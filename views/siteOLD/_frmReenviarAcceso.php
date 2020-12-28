


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dmstr\widgets\Alert;
use yii\bootstrap\Modal;

$this->title = 'Ingrese su número de identificación';
?> 


<div class="login-box">
    <div class="login-box-body">
        <center><h3>Sistema de Encuesta Universitaria - SEU</h3></center>
        <center>
<?php echo Html::img(Yii::$app->homeUrl . 'imagenes/logo.png', ['width' => '150', 'height' => '125', 'class' => 'user-image']); ?>
        </center>
        <br>
        <!--<p class="login-box-msg"> Ingrese su número de cédula </p>-->

        <div class="dedicacion-form" style="text-align: center">

            Estimado (a): <?php echo $alumno->nombreCompleto ?> <br>

            El enlace de activación para la encuesta ya fue enviado a su correo institucional (<?php echo $alumno->email_institucional ?>), favor de revisar bandeja de entrada o spam.
            <hr>
            <p>
                <strong> Nota: </strong>
                Para reenviar un nuevo enlace de clic en el botón Reenviar.</p>
            <center>

                <?= Html::a("Reenviar enlace <span class='glyphicon glyphicon-repeat'></span>", ['nuevo-token'], ['class' => 'btn btn-primary',
                    'onclick' => 'LlamarModal()'])
                ?>

<?= Html::a("Cancelar <span class='glyphicon glyphicon-ban-circle'></span>", ['index'], ['class' => 'btn btn-default']) ?>
                </p>
            </center>

            <p> Si presenta alguna inconsistencia en sus datos, favor de comunicar al Departamento de Evaluación Interna. </p>

        </div>

<div class="container">
          <strong>Power by: <a target="_blank" href="http://bit.ly/2za1W35">DesignTechX S.A.</a></strong> Copyright &copy; 2016-2017 
        </div>
    </div>
</div>



<div class="ModalActualizar">
    <?php
    Modal::begin(['headerOptions' => ['id' => 'modalHeader'],
        'options' => ['id' => 'modal-espera-envio-correo', 'tabindex' => false],
        'header' => '<h4 class="modal-title"> SEU - Por favor espere.. </h4>',
        'size' => 'modal-sm',
        //'id' => 'modal-espera-envio-correo',
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
    echo '   <center>
                <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
                <span class="sr-only">Loading...</span>
                </center>
                
<div id="Comprobando">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-check-square-o fa-stack-1x"></i>
                    </span>
                    Comprobando información <br>

                </div>
                <div id="Creando">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-check-square-o fa-stack-1x"></i>
                    </span>
                    Creando encuesta <br>

                </div>


                
                <div id="Generando">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-check-square-o fa-stack-1x"></i>
                    </span>
                    Generando enlace <br>

                </div>

                <div id="Enviando">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-check-square-o fa-stack-1x"></i>
                    </span>
                    Enviando enlace <br>

                </div>
<br>

<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:0%">
    40%
  </div>
</div>


';
    Modal::end();
    ?>
</div>


