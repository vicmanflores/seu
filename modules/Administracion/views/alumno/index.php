<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">  </h3>

        <div class="alumno-index">

                                <?php // echo $this->render('_buscar', ['model' => $searchModel]); ?>
            
            <p>
                <?= Html::a('Crear Alumno <span class=\'glyphicon glyphicon-plus\'></span>', ['crear'], ['class' => 'btn btn-primary']) ?>
            </p>
                                        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                            //'id',
            'identificacion',
            'apellido_paterno',
            'apellido_materno',
            'primer_nombre',
            // 'segundo_nombre',
            // 'telefono',
            'email_institucional:email',
            // 'sexo',
            // 'carrera_id',
            // 'token',
            // 'estado',

                [
                'header' => 'Acciones',
                'class' => app\helpers\vistas\botonesPersonalizados::className(),
                ],
                ],
                ]); ?>
                                </div>


    </div>
</div>