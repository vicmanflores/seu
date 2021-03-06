


<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Acceso al Sistema';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?> 


<div class="login-box">
    <div class="login-box-body">
        <center><h2>Univerdidad Laica Eloy Alfaro de Manabí</h2></center>
        <center>
            <?php echo Html::img(Yii::$app->homeUrl . 'imagenes/logo.png', ['width' => '200', 'height' => '200', 'class' => 'user-image']); ?>
            </center>
        <p class="login-box-msg">Ingrese sus credenciales</p>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
        <?=
                $form
                ->field($model, 'cedula', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('Usuario')])
        ?>

        
        <div class="row">
            <div class="col-xs-8" hidden>
                
            </div>
            <!-- /.col -->
            <div class="col-xs-8" >

            </div>
            <div class="col-xs-4">
                <?= Html::submitButton('Ingresar', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <!--<a href="recuperarclave" class="text-center">Restablecer Clave</a><br>-->
    </div>
</div>
