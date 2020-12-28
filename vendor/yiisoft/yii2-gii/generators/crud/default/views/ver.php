<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('{modelClass}: ', ['modelClass' => Inflector::camel2words(StringHelper::basename($generator->modelClass))]) ?> . $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>



                <?= "<?= " ?>DetailView::widget([
                'model' => $model,
                'attributes' => [
                <?php
                if (($tableSchema = $generator->getTableSchema()) === false) {
                    foreach ($generator->getColumnNames() as $name) {
                        echo "            '" . $name . "',\n";
                    }
                } else {
                    foreach ($generator->getTableSchema()->columns as $column) {
                        $format = $generator->generateColumnFormat($column);
                        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                    }
                }
                ?>
                ],
                ]) ?>

                <center>
                        <p>
                            <?= "<?= " ?>Html::a(<?= $generator->generateString("Crear " . Inflector::camel2words(StringHelper::basename($generator->modelClass)) . " <span class='glyphicon glyphicon-plus'></span>") ?>, ['crear'], ['class' => 'btn btn-success']) ?>
                            
                            <?= "<?= " ?>Html::a(<?= $generator->generateString("Modificar <span class='glyphicon glyphicon-edit'></span>") ?>, ['modificar', <?= $urlParams ?>], ['class' => 'btn btn-primary']) ?>
                            <?= "<?= " ?>Html::a(<?= $generator->generateString("Eliminar <span class='glyphicon glyphicon-trash'></span>") ?>, ['eliminar', <?= $urlParams ?>], [

                            'class' => 'btn btn-danger',
                            'data' => [
                            'confirm' => <?= $generator->generateString('¿Está seguro de que eliminar el item seleccionado?') ?>,
                            'method' => 'post',
                            ],
                            ]) ?>
                            <?= "<?= " ?>  Html::a("Regresar <span class='glyphicon glyphicon-arrow-left'></span>", ['index'], ['class' => 'btn btn-default']) ?>
                        </p>
                    </center>
            </div>

        </div>

    </div>

