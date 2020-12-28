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

                    <?php foreach ($preguntas as $pregunta) { ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $pregunta->descripcion; ?></h3>
                            </div>
                            <div class = "panel-body">
                                <?php
                                echo $form->field($modelRespuesta, 'respuesta' . $pregunta->id)
                                          ->inline(true)
                                        ->radioList([
                                    '1' => 'Si',
                                    '0' => 'No',
                                ])->label(FALSE);
                                ?>
                            </div>
                        </div>

                        <?php
                    }
                    ?>




                </div>
                <!-- /.box-body -->
                <!--<div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>-->
                <!-- /.box-footer -->
            </div>





        </div>

        <div class="col-md-2"></div>

    </div>

</div>





<?php ActiveForm::end(); ?>