<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dmstr\widgets\Alert;
use yii\bootstrap\Modal;

$this->title = 'Ingrese su número de identificación';
?> 


<div class="row">
	<div class="col-md-10"></div>
	<div class="col-md-2"><center>
            <?= Html::a("Administrar <span class='glyphicon glyphicon-lock'></span>", ['/Administracion'], ['class' => 'btn btn-default']) ?>
</center></div>
</div>





<div class="login-box">
    <div class="login-box-body">
        <center><h3>EvaDANU 2020-1</h3></center>
        <center>
            <?php echo Html::img(Yii::$app->homeUrl . 'imagenes/logo.png', ['width' => '300', 'height' => '250', 'class' => 'user-image']); ?>
        </center>
        <p class="login-box-msg"> Ingrese su identificación(Cédula o Pasaporte) anteponiendo la letra e, ejemplo e1309684456 </p>
        <div class="dedicacion-form">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'cedula')->textInput()->label(FALSE) ?>
            <?= Alert::widget() ?>
            <center>
                <div class="form-group">
                    <?= Html::submitButton('Enviar enlace <span class=\'glyphicon glyphicon-ok\'></span>', ['class' => 'btn btn-primary', 'onclick' => 'LlamarModal()'])
                    ?>
                </div>
            </center>
            <?php ActiveForm::end(); ?>





        </div>
           <center>
          © Copyright 2020, Todos los derechos reservados ULEAM |  

				<a href="http://departamentos.uleam.edu.ec/diit/" title="Webnovant"> Dirección de Informática e Innovación Tecnológica</a>
        </center>
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


<div class="ventana_flotante">
    <div class="box box-default">
        <div class="box-header">

            <h3 class="box-title">Video tutorial</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-defaulf btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>

        <div class="box-body">		
			<iframe width="350" height="200" src="https://www.youtube.com/embed/1PphN-2cw-0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			 
        </div>
		
	
		
				<div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                <center> Si presenta alguna incidencia escriba un correo detallando lo sucedido a: </br>   
				<br>

				<b><a href="mailto:incidencias.danu@uleam.edu.ec">incidencias.danu@uleam.edu.ec</a></b>
				
				</center>
				</div>	
		
    </div>
</div>



<style type="text/css">
    .box {
        position: relative;
        border-radius: 3px;
        /*background: #ffffff;*/
        border-top: 3px solid #d2d6de;
        margin-bottom: 20px;
        width: 370px;

        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    }

    .box-body {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        padding: 0px; 
    }


    .ventana_flotante {
        /*background: none repeat scroll 0 0 #FFFFFF;*/
        background: none repeat scroll 0 0 ;
        /*  border: 1px solid #DDDDDD;*/
        border-radius: 6px 6px 6px 6px;
        bottom: 50px;
        left: auto;
        /* margin-left: -40px;*/
        padding: 20px 0 0;
        position: fixed;
        text-align: center;
        width: 80px;
        z-index: 15;
    }
</style>