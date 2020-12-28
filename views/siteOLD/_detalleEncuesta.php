<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncuestaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>


<?=

GridView::widget([
    'dataProvider' => $dataProvider,
    //  'filterModel' => $searchModel,
    'summary' => FALSE,
    'columns' => [
        //['class' => 'yii\grid\SerialColumn'],
        /*'id',
        'pregunta_id',
        'alumno_id',
        'profesor_id',
        'asignatura_id',*/
        
        [
            'label' => 'Pregunta',
            'value' => 'pregunta.descripcion'
        ],
         'respuesta:boolean',
    /*                [
      'header' => 'Acciones',
      'class' => app\helpers\vistas\botonesPersonalizados::className(),
      ], */
    ],
]);
?>
