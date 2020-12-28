<?php

use yii\bootstrap\Modal
?>

<!--/*MODAL PARA ACTUALIZAR*/-->
<div class="ModalActualizar">
    <?php
    Modal::begin(['headerOptions' => ['id' => 'modalHeader'],
        'options' => [ 'id' => 'ModalFormularioActualizar', 'tabindex' => false],
        'header' => '<h4 class="modal-title"> <font color="#fff"> Sistema de Evaluaciones </font></h4>',
        'size' => 'modal-md',
        'id' => 'modal-crear-personal-tipo',
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
    echo "<div id='ResultadoAcualizar'></div>";
    Modal::end();
    ?>
</div>


<style>
    #ModalFormularioActualizar .modal-header, .modal-primary .modal-footer {
    background-color: #357ca5 !important;
    
}
</style>