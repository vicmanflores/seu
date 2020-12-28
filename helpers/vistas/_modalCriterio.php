


<?php

use yii\bootstrap\Modal
?>

<!--/*MODAL PARA ACTUALIZAR*/-->
<div class="ModalCriterio">
    <?php
    Modal::begin(['headerOptions' => ['id' => 'modalHeader'],
        'options' => [
            'id' => 'ModalFormularioCriterio', 'tabindex' => false
            ],
        'header' => " ",
        'size' => 'modal-lg',
        'id' => 'modal-crear-criterio',
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
    echo "<div id='ResultadoCriterio'></div>";
    Modal::end();
    ?>
</div>

