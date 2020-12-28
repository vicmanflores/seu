<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Periodo */

$this->title = 'Modificar Periodo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Periodos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['ver', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>

<div class="periodo-modificar">   

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
