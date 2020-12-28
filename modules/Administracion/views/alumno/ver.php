<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */

$this->title = 'Alumno: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="alumno-view">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>



                <?= DetailView::widget([
                'model' => $model,
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
            'carrera_id',
            'token',
            'estado',
                ],
                ]) ?>

                <center>
                        <p>
                            <?= Html::a('Crear Alumno <span class=\'glyphicon glyphicon-plus\'></span>', ['crear'], ['class' => 'btn btn-success']) ?>
                            
                            <?= Html::a('Modificar <span class=\'glyphicon glyphicon-edit\'></span>', ['modificar', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Eliminar <span class=\'glyphicon glyphicon-trash\'></span>', ['eliminar', 'id' => $model->id], [

                            'class' => 'btn btn-danger',
                            'data' => [
                            'confirm' => '¿Está seguro de que eliminar el item seleccionado?',
                            'method' => 'post',
                            ],
                            ]) ?>
                            <?=   Html::a("Regresar <span class='glyphicon glyphicon-arrow-left'></span>", ['index'], ['class' => 'btn btn-default']) ?>
                        </p>
                    </center>
            </div>

        </div>

    </div>

