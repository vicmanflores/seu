<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Periodo */

$this->title = 'Crear Periodo';
$this->params['breadcrumbs'][] = ['label' => 'Periodos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="periodo-crear">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>
</div>
