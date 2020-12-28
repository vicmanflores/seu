<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Encuesta";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-md-12">


        <div class="col-md-3"></div>

        <div class="col-md-6">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"> <?php echo $alumnoAsignatura->asignatura->descripcion; ?> </h3>
                </div>
                <div class="panel-body">


<?php /* $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); */ ?>
                    <?php $form = ActiveForm::begin(); ?>


<?php
foreach ($preguntas as $pregunta) {
    ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $pregunta->descripcion; ?></h3>
                            </div>
                            <div class = "panel-body">
                                    <?php
                                    //echo "<br>";
                                    //  $model->config = '1';
                                    echo $form->field($modelRespuesta, 'respuesta' . $pregunta->id)->radioList([
                                        '1' => 'Si',
                                        '0' => 'No',
                                    ])->label(FALSE);
                                    ?>
                            </div>
                        </div>

                                <?php
                                /*
                                  echo "<br>";
                                  //  $model->config = '1';
                                  echo $form->field($modelRespuesta, 'respuesta' . $pregunta->id)->radioList([
                                  '1' => 'Si',
                                  '0' => 'No',
                                  ])->label(FALSE);

                                 */ /*
                                  $name = $pregunta->id;
                                  $items = [1 => "SI", 0 => "NO"];
                                  $selection = 2;
                                  //https://github.com/yiisoft/yii2/issues/5789
                                  echo Html::radioList($name, $selection, $items, [
                                  'item' => function ($index, $label, $name, $checked, $value) {
                                  $disabled = true; // replace with whatever check you use for each item
                                  return Html::radio($name, $checked, [
                                  'value' => $value,
                                  'label' => Html::encode($label),
                                  //'disabled' => $disabled,
                                  ]);
                                  },
                                  ]);
                                 */
                            }
                            ?>
                    <center>
                        <div class="form-group">
                    <?= Html::submitButton(' <span class=\'glyphicon glyphicon-floppy-disk\'></span>', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </center>

                            <?php ActiveForm::end(); ?>

                </div>
            </div>

            
            
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>

        <div class="col-md-3"></div>

    </div>

</div>




