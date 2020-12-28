<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alumno */

$this->title = 'Crear Alumno';
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="alumno-crear">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>
</div>
