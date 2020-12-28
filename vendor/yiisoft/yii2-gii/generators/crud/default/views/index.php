<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">  </h3>

        <div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

            <?php if (!empty($generator->searchModelClass)): ?>
                <?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_buscar', ['model' => $searchModel]); ?>
            <?php endif; ?>

            <p>
                <?= "<?= " ?>Html::a(<?= $generator->generateString("Crear " . Inflector::camel2words(StringHelper::basename($generator->modelClass)) . " <span class='glyphicon glyphicon-plus'></span>") ?>, ['crear'], ['class' => 'btn btn-primary']) ?>
            </p>
            <?= $generator->enablePjax ? '<?php Pjax::begin(); ?>' : '' ?>
            <?php if ($generator->indexWidgetType === 'grid'): ?>
                <?= "<?= " ?>GridView::widget([
                'dataProvider' => $dataProvider,
                <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
                ['class' => 'yii\grid\SerialColumn'],

                <?php
                $count = 0;
                if (($tableSchema = $generator->getTableSchema()) === false) {
                    foreach ($generator->getColumnNames() as $name) {
                        if (++$count < 6) {
                            echo "            '" . $name . "',\n";
                        } else {
                            echo "            // '" . $name . "',\n";
                        }
                    }
                } else {
                    foreach ($tableSchema->columns as $column) {
                        $format = $generator->generateColumnFormat($column);
                        if (++$count < 6) {
                            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        } else {
                            echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        }
                    }
                }
                ?>

                [
                'header' => 'Acciones',
                'class' => app\helpers\vistas\botonesPersonalizados::className(),
                ],
                ],
                ]); ?>
            <?php else: ?>
                <?= "<?= " ?>ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
                },
                ]) ?>
            <?php endif; ?>
            <?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>
        </div>


    </div>
</div>