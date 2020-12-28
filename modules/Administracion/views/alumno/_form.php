<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-12">


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"> <?php echo $this->title ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-body">
                   <div class="alumno-form">

                <?php $form = ActiveForm::begin(); ?>

                <div class='col-md-4'> <?= $form->field($model, 'id')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'identificacion')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'apellido_paterno')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'apellido_materno')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'primer_nombre')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'segundo_nombre')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'telefono')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'email_institucional')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'sexo')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'carrera_id')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'token')->textInput() ?>

 </div><div class='col-md-4'> <?= $form->field($model, 'estado')->textInput() ?>

 </div>              

            </div>



        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <center>
            <?= Html::submitButton('Guardar <span class=\'glyphicon glyphicon-floppy-disk\'></span>', ['class' => 'btn btn-primary']) ?>
            <?= Html::a("Cancelar <span class='glyphicon glyphicon-ban-circle'></span>", ['index'], ['class' => 'btn btn-default']) ?>

        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>

</div>

