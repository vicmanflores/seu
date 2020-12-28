<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PreguntaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preguntas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">  </h3>

        <div class="pregunta-index">

                                <?php // echo $this->render('_buscar', ['model' => $searchModel]); ?>
            
            <p>
                <?= Html::a('Crear Pregunta <span class=\'glyphicon glyphicon-plus\'></span>', ['crear'], ['class' => 'btn btn-primary']) ?>
            </p>
                                        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                            'id',
            'estado:boolean',
            //'periodo_id',
            
             [
                            'attribute' => 'periodo_id',
                            'value' => 'periodo.nombre',
                            //'format' => 'raw',
                            'filter' => Select2::widget([
                                'model' => $searchModel,
                                'attribute' => 'periodo_id',
                                'pluginLoading' => false,
                                'data' => \yii\helpers\ ArrayHelper::map(\app\models\Periodo::find()
                                                //->where(['tipo_entidad_id' => \app\models\TipoEntidad::ENTIDAD_CARRERA])
                                                ->all(), 'id', 'nombre'),
                                'options' => ['placeholder' => 'Seleccione...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]),
                        ],
            
            'descripcion',

                [
                'header' => 'Acciones',
                'class' => app\helpers\vistas\botonesPersonalizados::className(),
                ],
                ],
                ]); ?>
                                </div>


    </div>
</div>