<?php

use yii\helpers\Html;
use yii\web\Session;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */
?>


<header class="main-header">
    <nav class="navbar navbar-static-top">

        <div class="navbar-custom-menu">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>

            </button>
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href=" <?php echo Url::toRoute(['/site/salir']); ?>" class="navbar-brand">
                        <i class="fa fa-power-off"></i> Salir </a>
                </li>
            </ul>
        </div>


        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <a href=" <?php echo Url::toRoute(['/site/index']); ?>" class="navbar-brand">
                <i class="fa fa-edit"></i>  <b>Sistema de Encuestas Universitario - SEU</b></a>
                <?php

                use mdm\admin\components\MenuHelper;
                use yii\bootstrap\Nav;

echo Nav::widget([
                    'options' => ["class" => "nav navbar-nav",],
                    'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id),
                ]);


                dmstr\widgets\Menu::widget(
                        [
                            'options' => [
                                'class' => 'sidebar-menu',
                                'icon' => 'fa fa-user',
                                'label' => '<span class="glyphicon glyphicon-user"></span>',
                            ],
                            'items' =>
                            MenuHelper::getAssignedMenu(Yii::$app->user->id),
                ]);
                ?>


        </div>

    </nav>
</header>


