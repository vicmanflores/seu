<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periodo */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-md-2"></div>
<div class="col-md-8">


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"> <?php echo $this->title ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-body">
            <?php $form = ActiveForm::begin(); ?>

            <div class='col-md-6'>
 <?= $form->field($model, 'id')->textInput() ?>

             
            </div>
            <div class='col-md-6'> 
 <?= $form->field($model, 'nombre')->textInput() ?>
            
             

            </div>                




        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <center>
            <?= Html::submitButton('Guardar <span class=\'glyphicon glyphicon-floppy-disk\'></span>', ['class' => 'btn btn-primary']) ?>
            <?= Html::a("Cancelar <span class='glyphicon glyphicon-ban-circle'></span>", ['index'], ['class' => 'btn btn-default']) ?>
</center>
        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>

</div>
<div class="col-md-2"></div>