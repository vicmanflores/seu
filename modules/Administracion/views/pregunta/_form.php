<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Pregunta */
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

            <div class='col-md-6'> <?= $form->field($model, 'id')->textInput() ?>

             
<?php
                    echo $form->field($model, 'periodo_id')->widget(Select2::classname(), [
                        'data' => \yii\helpers\ ArrayHelper::map(\app\models\Periodo::find()->all(), 'id', 'nombre'),
                        'language' => 'es',
                        'options' => ['placeholder' => 'Seleccione',
                        ],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?> 
            </div>
            <div class='col-md-6'> 

            
                    <?= $form->field($model, 'descripcion')->textInput() ?>
                
              <?php
              echo "<br>";
              echo $form->field($model, 'estado')->checkbox() ?>

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