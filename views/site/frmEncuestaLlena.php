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


            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-md-9"><h3 class="box-title">
                            <?php foreach ($encuestaLlena as $pregunta) { ?>

                                <?php
                                $asignatura = $pregunta->asignatura->descripcion;
                                $docente = $pregunta->profesor->nombreCompleto;
                            }

                            echo $asignatura;
                            ?>
                        </h3>
                        - <?php echo $docente; ?>
                    </div>

                    <div class="col-md-3"><div class="box-tools pull-right">
                            <?= Html::a("Regresar <span class='glyphicon glyphicon-circle-arrow-left'></span>", ['asignatura'], ['class' => 'btn btn-default']) ?>
                        </div></div>




                </div>
                <!-- /.box-header -->
                <div class="panel-body">

				<div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                <center> Valore de 1 a 5 cada uno de los siguientes ítems, siendo 1 la calificación mas baja y 5 la más alta. </center>
				</div>					
				
				
                    <?php foreach ($encuestaLlena as $pregunta) { ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $pregunta->pregunta->descripcion; ?></h3>
                            </div>
                            <div class = "panel-body">
                                <?php $form = ActiveForm::begin(); ?>


                                <?php
                                /*   $pregunta->respuesta;
                                  echo $form->field($pregunta, 'respuesta' )->radioList([
                                  '1' => 'Si',
                                  '0' => 'No',

                                  ])->label(FALSE);
                                 */
                                //  $model->config = '1';
								echo $form->field($pregunta, 'respuesta')->inline(true)->radioList([
                                    '1' => '1',
                                    '2' => '2',
									'3' => '3',
									'4' => '4',
									'5' => '5',
                                    ], ['itemOptions' => ['disabled' => true]])->label(FALSE);
                                ?>
                                <?php ActiveForm::end(); ?>
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





