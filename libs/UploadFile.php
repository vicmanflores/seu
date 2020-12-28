<?php

namespace common\libs;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;
use backend\models\Cliente;
use yii\web\UploadedFile;

class UploadFile {

    function uploadFile($archivo, $ruta, $nombre, $campo, $ancho,$alto,$calidad) {

                $archivo->saveAs($ruta . $nombre . '.' . $archivo->extension);
                $campo = $ruta . $nombreImagen . '.' . $model->archivo->extension;
                Image::getImagine()->open($campo)->thumbnail(new
                                Box($ancho, $alto))->save($campo, ['quality' => 100]);

    }

}
