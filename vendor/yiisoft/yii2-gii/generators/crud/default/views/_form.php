<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"> </h3>
            <div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

                <?= "<?php " ?>$form = ActiveForm::begin(); ?>

                <?php
                foreach ($generator->getColumnNames() as $attribute) {
                    if (in_array($attribute, $safeAttributes)) {
                        echo "<div class='col-md-4'> <?= " .
                        $generator->generateActiveField($attribute) .
                        " ?>\n\n </div>";
                    }
                }
                ?>
                <center>
                    <div class="form-group">
                        <?= "<?= " ?> Html::submitButton(<?= $generator->generateString("Guardar <span class='glyphicon glyphicon-floppy-disk'></span>") ?>, ['class' => 'btn btn-primary']) ?>
                        <?= "<?= " ?>  Html::a("Cancelar <span class='glyphicon glyphicon-ban-circle'></span>", ['index'], ['class' => 'btn btn-default']) ?>
                    </div>
                </center>

                <?= "<?php " ?>ActiveForm::end(); ?>

            </div>

        </div>
    </div>
</div>
