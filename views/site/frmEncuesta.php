<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Encuesta";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-md-12">


        <div class="col-md-2"></div>

        <div class="col-md-8">

            <?php $form = ActiveForm::begin(); ?>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-md-8"><h3 class="box-title"><?php echo $alumnoAsignatura->profesorAsignatura->asignatura->descripcion; ?>

                        </h3>
                    - <?php                        echo $alumnoAsignatura->profesorAsignatura->profesor->nombreCompleto ?>
                    </div>

                    <div class="col-md-4"><div class="box-tools pull-right">
                            <?= Html::submitButton('Guardar <span class=\'glyphicon glyphicon-floppy-disk\'></span>', ['class' => 'btn btn-primary','id'=>'btnGuardarEncuesta']) ?>
                              <?=   Html::a("Cancelar <span class='glyphicon glyphicon-ban-circle'></span>", ['asignatura'], ['class' => 'btn btn-default']) ?>
                        </div></div>




                </div>
                <!-- /.box-header -->
                <div class="panel-body">
				
				
				<div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                <center> Valore de 1 a 5 cada uno de los siguientes ítems, siendo 1 la calificación mas baja y 5 la más alta. </center>
				</div>			

                    <?php foreach ($preguntas as $pregunta) { ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $pregunta->descripcion; ?></h3>
                            </div>
                            <div class = "panel-body">
                                <?php
                                echo $form->field($modelRespuesta, 'respuesta' . $pregunta->id)->inline(true)->radioList([
                                    '1' => '1',
                                    '2' => '2',
									'3' => '3',
									'4' => '4',
									'5' => '5',
									
                                ])->label(FALSE);
                                ?>
                            </div>
                        </div>

                        <?php
                    }
                    ?>




                </div>
               
            </div>





        </div>

        <div class="col-md-2"></div>

    </div>

</div>





<?php ActiveForm::end(); ?>