<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use kartik\widgets\Select2;
use yii\bootstrap\Collapse;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnoAsignaturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumno Asignaturas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <!-- 
     <div class="col-md-6">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h3 class="panel-title">Datos personales</h3>
             </div>
             <div class="panel-body">
    <?php
    DetailView::widget([
        'model' => $alumno,
        'attributes' => [
            'id',
            'identificacion',
            'apellido_paterno',
            'apellido_materno',
            'primer_nombre',
            'segundo_nombre',
            'telefono',
            'email_institucional:email',
            'sexo',
            'estado',
        ],
    ])
    ?> 
 
             </div>
         </div>
 
     </div>
 
    -->
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Lista de asignaturas </h3>
            </div>
            <div class="panel-body">


                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'summary' => FALSE,
                    //   'filterModel' => $searchModel,
                    'columns' => [
                        //  ['class' => 'yii\grid\SerialColumn'],
                        //          'id',
                        //'alumno_id',
/*                        [
                            'class' => 'kartik\grid\ExpandRowColumn',
                            'width' => '50px',
                            'value' => function ($model, $key, $index, $column) {
                                return GridView::ROW_COLLAPSED;

                            },
                            'detail' => function ($model, $key, $index, $column) {

                                $searchModel = new \app\models\EncuestaSearch();
                                $searchModel->asignatura_id = $model->profesorAsignatura->asignatura_id;
                                $searchModel->profesor_id = $model->profesorAsignatura->profesor_id;
                                $dataProviderPersonalTipo = $searchModel->search(Yii::$app->request->queryParams);
                                $dataProviderPersonalTipo->sort = false;
                                return Yii::$app->controller->renderPartial(
                                                '_detalleEncuesta', ['searchModel' => $searchModel,
                                            'dataProvider' => $dataProviderPersonalTipo,
                                                //   'model'=>$model,
                                ]);
                            },
                            'headerOptions' => ['class' => 'kartik-sheet-style'],
                            'expandOneOnly' => true,
                        ],*/
                        [
                            'label' => 'Asignatura',
                            'value' => 'profesorAsignatura.asignatura.descripcion'
                        ],
                                    [
                            'label' => 'Profesor',
                            'value' => 'profesorAsignatura.profesor.nombreCompleto'
                        ],
                        //'asignatura_id.descripcion',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{editar}',
                            'buttons' => [
                                'editar' => function ($url, $model, $key) {
                                    if ($model->encuestada == 1) {
                                        return Html::a('Ver encuesta <span class="glyphicon glyphicon-eye-open"></span>', Yii::$app->request->baseUrl . '/site/ver-encuesta?pid=' . $model->profesorAsignatura->profesor_id.'&aid='.$model->profesorAsignatura->asignatura_id, [
                                                    'title' => 'Modificar',
                                                    'class' => 'btn btn-info ',
                                        ]);
                                    } else {

                                        return Html::a('Realizar encuenta <span class="fa fa-edit"></span>', Yii::$app->request->baseUrl . '/site/encuesta/' . $model->profesor_asignatura_id, [
                                                    'title' => 'Modificar',
                                                    'class' => 'btn btn-primary ',
                                        ]);
                                    }

//                     return  Html::a('<span class="glyphicon glyphicon-edit"></span>', ['value' => Yii::$app->request->baseUrl . '/Personal/personal/modificar/?id=' . $key, 'class' => 'btn btn-primary',]);
                                },
                            ],
                        ],
                    ],
                ]);
                ?>

            </div>
        </div>

    </div>
</div>

