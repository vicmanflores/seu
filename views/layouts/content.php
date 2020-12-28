<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>


<div class="wrapper">

    <!-- Full Width Column -->
    <div class="content-wrapper">

       
 <div class="container">
        <!-- Main content -->
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php
                if ($this->title !== null) {
                     \yii\helpers\Html::encode($this->title);
                } else {
                     \yii\helpers\Inflector::camel2words(
                            \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                     ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                }
                ?>
            </h1>
             <?PHP
            Breadcrumbs::widget(
                    [
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]
            )
            ?>
        </section>
        <section class="content">
           
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>

        <!-- /.container -->
    </div>
        
    </div>
    <!-- /.content-wrapper -->
    <footer id="pie" class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Versión</b> 1.0.0.2
            </div>
                 
          © Copyright 2020, Todos los derechos reservados ULEAM |  

				<a href="http://departamentos.uleam.edu.ec/diit/" title="Webnovant"> Dirección de Informática e Innovación Tecnológica</a>
        
        </div>
        <!-- /.container -->
    </footer>
</div>




<style>

    body{background-color:#fff}.form-group.has-success label{color:#367fa9}.form-group.has-success .form-control,.form-group.has-success .input-group-addon{border-color:#367fa9;box-shadow:none}.btn{border:1px solid transparent;border-radius:0}.has-success .select2-container--krajee .select2-selection,.has-success.select2-container--krajee .select2-dropdown{border-color:#367fa9}.has-success .select2-container--krajee.select2-container--focus .select2-selection,.has-success .select2-container--open .select2-selection{-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #367fa9;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #367fa9;border-color:#367fa9}

</style>


<?php $this->registerCss("
div.required label.control-label:after {
    content: \" *\";
    color: red;
}
")?>