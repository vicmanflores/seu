<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dmstr\widgets\Alert;
use yii\bootstrap\Modal;
$this->title = 'Ingrese su número de identificación';
?> 


<div class="login-box">
    <div class="login-box-body">
        <center><h3>Sistema de Encuestas Universitario - SEU</h3></center>
        <center>
            <?php echo Html::img(Yii::$app->homeUrl . 'imagenes/logo.png', ['width' => '300', 'height' => '250', 'class' => 'user-image']); ?>
        </center>

        <p class="login-box-msg"> Ingrese su número de identificación </p>

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
            <iframe width="350" height="200" src="https://www.youtube.com/embed/AzQkht6CqVM?ecver=1" frameborder="0" gesture="media" allowfullscreen></iframe>


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
        
         
        /* opacity: 0.5;
    filter: alpha(opacity=50);
    */
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
