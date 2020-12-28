<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pregunta */

$this->title = 'Pregunta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Preguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="pregunta-view">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>



                <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                            'id',
            'estado:boolean',
            'periodo_id',
            'descripcion',
                ],
                ]) ?>

                <center>
                        <p>
                            <?= Html::a('Crear Pregunta <span class=\'glyphicon glyphicon-plus\'></span>', ['crear'], ['class' => 'btn btn-success']) ?>
                            
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

