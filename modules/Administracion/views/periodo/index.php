<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeriodoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Periodos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">  </h3>

        <div class="periodo-index">

                                <?php // echo $this->render('_buscar', ['model' => $searchModel]); ?>
            
            <p>
                <?= Html::a('Crear Periodo <span class=\'glyphicon glyphicon-plus\'></span>', ['crear'], ['class' => 'btn btn-primary']) ?>
            </p>
                                        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                            'id',
            'nombre',

                [
                'header' => 'Acciones',
                'class' => app\helpers\vistas\botonesPersonalizados::className(),
                ],
                ],
                ]); ?>
                                </div>


    </div>
</div>