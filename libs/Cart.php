<?php

namespace common\libs;

use Yii;
use backend\models\OrdenDetalle;
use backend\models\Descuento;
use backend\models\Impuesto;

class Cart {

    function saveCart($idOrden) {
        $detalleFactura = Yii::$app->session['cart'];
        foreach ($detalleFactura as $value) {
            $modelOrdenDetalle = new OrdenDetalle();
            $modelOrdenDetalle->id_orden = $idOrden;
            $modelOrdenDetalle->precio = $value['precio'];
            $modelOrdenDetalle->id_impuesto = $value['id_impuesto'];
            $modelOrdenDetalle->id_descuento = $value['id_descuento'];
            $modelOrdenDetalle->valor_impuesto = $value['valor_impuesto'];
            $modelOrdenDetalle->valor_descuento = $value['valor_descuento'];
            $modelOrdenDetalle->subtotal = $value['subtotal'];
            $modelOrdenDetalle->id_categoria_reparacion = $value['id_categoria_reparacion'];
            $modelOrdenDetalle->serial = $value['serial'];
            $modelOrdenDetalle->marca = $value['marca'];
            $modelOrdenDetalle->modelo = $value['modelo'];
            $modelOrdenDetalle->observacion = $value['observacion'];
            $modelOrdenDetalle->descripcion_producto = $value['descripcion_producto'];
            $modelOrdenDetalle->save();
        }

        unset(Yii::$app->session['cart']);
        unset(Yii::$app->session['cabecera']);
    }

    function addCart($modelOrdenDetalle) {
        $id = Yii::$app->security->generateRandomString();
        $impuesto = Impuesto::find()->select(['valor',])->where(['id' => $modelOrdenDetalle->id_impuesto])->one();
        $valorImpuesto = ($modelOrdenDetalle->precio * $impuesto->valor) / 100;

        $descuento = Descuento::find()->select(['valor',])->where(['id' => $modelOrdenDetalle->id_descuento])->one();
        $valorDescuento = ($modelOrdenDetalle->precio * $descuento->valor) / 100;

        $subTotal = ($modelOrdenDetalle->precio + $valorImpuesto) - $valorDescuento;
        // $modelOrdenDetalle = new OrdenDetalle();
        if (!isset(Yii::$app->session['cart'])) {
            $cart[$id] = [
                'id' => $id,
                'serial' => $modelOrdenDetalle['serial'],
                'descripcion_producto' => $modelOrdenDetalle['descripcion_producto'],
                'marca' => $modelOrdenDetalle['marca'],
                'modelo' => $modelOrdenDetalle['modelo'],
                'id_categoria_reparacion' => $modelOrdenDetalle['id_categoria_reparacion'],
                'observacion' => $modelOrdenDetalle['observacion'],
                'id_impuesto' => $modelOrdenDetalle['id_impuesto'],
                'id_descuento' => $modelOrdenDetalle['id_descuento'],
                'precio' => $modelOrdenDetalle['precio'],
                //'id_orden' => $modelOrdenDetalle['id_orden'],
                'valor_impuesto' => $valorImpuesto,
                'valor_descuento' => $valorDescuento,
                'subtotal' => $subTotal,
                'precio_sin_descuento' => $modelOrdenDetalle['precio_sin_descuento'],
            ];
        } else {
            $cart = Yii::$app->session['cart'];
            if (array_key_exists($id, $cart)) {
                $cart[$id] = [
                    'id' => $id,
                    'serial' => $modelOrdenDetalle['serial'],
                    'descripcion_producto' => $modelOrdenDetalle['descripcion_producto'],
                    'marca' => $modelOrdenDetalle['marca'],
                    'modelo' => $modelOrdenDetalle['modelo'],
                    'id_categoria_reparacion' => $modelOrdenDetalle['id_categoria_reparacion'],
                    'observacion' => $modelOrdenDetalle['observacion'],
                    'id_impuesto' => $modelOrdenDetalle['id_impuesto'],
                    'id_descuento' => $modelOrdenDetalle['id_descuento'],
                    'precio' => $modelOrdenDetalle['precio'],
                    //'id_orden' => $modelOrdenDetalle['id_orden'],
                    'valor_impuesto' => $valorImpuesto,
                    'valor_descuento' => $valorDescuento,
                    'subtotal' => $subTotal,
                    'precio_sin_descuento' => $modelOrdenDetalle['precio_sin_descuento'],
                ];
            } else {
                $cart[$id] = [
                    'id' => $id,
                    'serial' => $modelOrdenDetalle['serial'],
                    'descripcion_producto' => $modelOrdenDetalle['descripcion_producto'],
                    'marca' => $modelOrdenDetalle['marca'],
                    'modelo' => $modelOrdenDetalle['modelo'],
                    'id_categoria_reparacion' => $modelOrdenDetalle['id_categoria_reparacion'],
                    'observacion' => $modelOrdenDetalle['observacion'],
                    'id_impuesto' => $modelOrdenDetalle['id_impuesto'],
                    'id_descuento' => $modelOrdenDetalle['id_descuento'],
                    'precio' => $modelOrdenDetalle['precio'],
                    //'id_orden' => $modelOrdenDetalle['id_orden'],
                    'valor_impuesto' => $valorImpuesto,
                    'valor_descuento' => $valorDescuento,
                    'subtotal' => $subTotal,
                    'precio_sin_descuento' => $modelOrdenDetalle['precio_sin_descuento'],
                ];
            }
        }
        Yii::$app->session['cart'] = $cart;
    }

    function updateCart($modelOrdenDetalle, $id) {

        $impuesto = Impuesto::find()->select(['valor',])->where(['id' => $modelOrdenDetalle->id_impuesto])->one();
        $valorImpuesto = ($modelOrdenDetalle->precio * $impuesto->valor) / 100;

        $descuento = Descuento::find()->select(['valor',])->where(['id' => $modelOrdenDetalle->id_descuento])->one();
        $valorDescuento = ($modelOrdenDetalle->precio * $descuento->valor) / 100;

        $subTotal = ($modelOrdenDetalle->precio + $valorImpuesto) - $valorDescuento;

        if (isset(Yii::$app->session['cart'])) {
            $cart = Yii::$app->session['cart'];
            if (array_key_exists($id, $cart)) {
                $cart[$id] = [
                    'id' => $id,
                    'serial' => $modelOrdenDetalle['serial'],
                    'descripcion_producto' => $modelOrdenDetalle['descripcion_producto'],
                    'marca' => $modelOrdenDetalle['marca'],
                    'modelo' => $modelOrdenDetalle['modelo'],
                    'id_categoria_reparacion' => $modelOrdenDetalle['id_categoria_reparacion'],
                    'observacion' => $modelOrdenDetalle['observacion'],
                    'id_impuesto' => $modelOrdenDetalle['id_impuesto'],
                    'id_descuento' => $modelOrdenDetalle['id_descuento'],
                    'precio' => $modelOrdenDetalle['precio'],
                    //'id_orden' => $modelOrdenDetalle['id_orden'],
                    'valor_impuesto' => $valorImpuesto,
                    'valor_descuento' => $valorDescuento,
                    'subtotal' => $subTotal,
                    'precio_sin_descuento' => $modelOrdenDetalle['precio_sin_descuento'],
                ];
            }

            Yii::$app->session['cart'] = $cart;
        }
    }

    function viewItemCart($id) {
        $cart = Yii::$app->session['cart'];
        if (array_key_exists($id, $cart)) {
            $cart[$id];
        }

        return $cart[$id];
    }

    function deleteItemCart($id) {
        $cart = Yii::$app->session['cart'];
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
        }
        Yii::$app->session['cart'] = $cart;
    }

}
