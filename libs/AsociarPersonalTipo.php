<?php

namespace app\libs;

use Yii;
use app\models\PersonalTipo;
use app\helpers\HelperPersonalizado;
class AsociarPersonalTipo {

    function guardarObjetoPersonalTipo($idPersonal) {
        $detalleFactura = Yii::$app->session['variableSessionObjetoPersonalTipo'];
       echo $peridoActivo = HelperPersonalizado::PeriodoActivo();
        
        foreach ($detalleFactura as $value) {
            $modelPersonalTipo = new PersonalTipo();
            $modelPersonalTipo->tipo_id = $value['tipo_id'];
            if ($value['departamento_id']=="") {
                $modelPersonalTipo->departamento_id =NULL;
            }else{
                $modelPersonalTipo->departamento_id = $value['departamento_id'];
            }
            
            
            $modelPersonalTipo->carrera_id = $value['carrera_id'];
            $modelPersonalTipo->periodo_eva_id = $peridoActivo;
            $modelPersonalTipo->dedicacion_id = $value['dedicacion_id'];
            $modelPersonalTipo->relacion_dependencia_id = $value['relacion_dependencia_id'];
            $modelPersonalTipo->carrera_principal = $value['carrera_principal'];
            $modelPersonalTipo->campo_conocimiento_id = $value['campo_conocimiento_id'];
            $modelPersonalTipo->personal_cargo_id = $value['personal_cargo_id'];
            $modelPersonalTipo->personal_id = $idPersonal;
            $modelPersonalTipo->save();
            print_r($modelPersonalTipo->getErrors());
          //  die();
            

            /* $modelOrdenDetalle = new OrdenDetalle();
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
              $modelOrdenDetalle->save(); */
        }

      unset(Yii::$app->session['variableSessionObjetoPersonalTipo']);
        //unset(Yii::$app->session['cabecera']);
    }

    function agregarItem($modeloPersonalTipo) {
        $id = Yii::$app->security->generateRandomString();
        if (!isset(Yii::$app->session['variableSessionObjetoPersonalTipo'])) {
            $objetoPersonalTipo[$id] = [
                'id' => $id,
                'tipo_id' => $modeloPersonalTipo['tipo_id'],
                'departamento_id' => $modeloPersonalTipo['departamento_id'],
                'carrera_id' => $modeloPersonalTipo['carrera_id'],
              //  'periodo_eva_id' => $modeloPersonalTipo['periodo_eva_id'],
                'dedicacion_id' => $modeloPersonalTipo['dedicacion_id'],
                'relacion_dependencia_id' => $modeloPersonalTipo['relacion_dependencia_id'],
                'carrera_principal' => $modeloPersonalTipo['carrera_principal'],
                'campo_conocimiento_id' => $modeloPersonalTipo['campo_conocimiento_id'],
                'personal_cargo_id' => $modeloPersonalTipo['personal_cargo_id'],
                'personal_id' => $modeloPersonalTipo['personal_id'],
            ];
        } else {
            $objetoPersonalTipo = Yii::$app->session['variableSessionObjetoPersonalTipo'];
            if (array_key_exists($id, $objetoPersonalTipo)) {
                $objetoPersonalTipo[$id] = [
                    'id' => $id,
                    'tipo_id' => $modeloPersonalTipo['tipo_id'],
                    'departamento_id' => $modeloPersonalTipo['departamento_id'],
                    'carrera_id' => $modeloPersonalTipo['carrera_id'],
                //    'periodo_eva_id' => $modeloPersonalTipo['periodo_eva_id'],
                    'dedicacion_id' => $modeloPersonalTipo['dedicacion_id'],
                    'relacion_dependencia_id' => $modeloPersonalTipo['relacion_dependencia_id'],
                    'carrera_principal' => $modeloPersonalTipo['carrera_principal'],
                    'campo_conocimiento_id' => $modeloPersonalTipo['campo_conocimiento_id'],
                    'personal_cargo_id' => $modeloPersonalTipo['personal_cargo_id'],
                    'personal_id' => $modeloPersonalTipo['personal_id'],
                ];
            } else {
                $objetoPersonalTipo[$id] = [
                    'id' => $id,
                    'tipo_id' => $modeloPersonalTipo['tipo_id'],
                    'departamento_id' => $modeloPersonalTipo['departamento_id'],
                    'carrera_id' => $modeloPersonalTipo['carrera_id'],
                   // 'periodo_eva_id' => $modeloPersonalTipo['periodo_eva_id'],
                    'dedicacion_id' => $modeloPersonalTipo['dedicacion_id'],
                    'relacion_dependencia_id' => $modeloPersonalTipo['relacion_dependencia_id'],
                    'carrera_principal' => $modeloPersonalTipo['carrera_principal'],
                    'campo_conocimiento_id' => $modeloPersonalTipo['campo_conocimiento_id'],
                    'personal_cargo_id' => $modeloPersonalTipo['personal_cargo_id'],
                    'personal_id' => $modeloPersonalTipo['personal_id'],
                ];
            }
        }
        Yii::$app->session['variableSessionObjetoPersonalTipo'] = $objetoPersonalTipo;
    }

    function modificarItem($modeloPersonalTipo, $id) {

        if (isset(Yii::$app->session['variableSessionObjetoPersonalTipo'])) {
            $objetoPersonalTipo = Yii::$app->session['variableSessionObjetoPersonalTipo'];
            if (array_key_exists($id, $objetoPersonalTipo)) {
                $objetoPersonalTipo[$id] = [
                    'id' => $id,
                    'tipo_id' => $modeloPersonalTipo['tipo_id'],
                    'departamento_id' => $modeloPersonalTipo['departamento_id'],
                    'carrera_id' => $modeloPersonalTipo['carrera_id'],
                  //  'periodo_eva_id' => $modeloPersonalTipo['periodo_eva_id'],
                    'dedicacion_id' => $modeloPersonalTipo['dedicacion_id'],
                    'relacion_dependencia_id' => $modeloPersonalTipo['relacion_dependencia_id'],
                    'carrera_principal' => $modeloPersonalTipo['carrera_principal'],
                    'campo_conocimiento_id' => $modeloPersonalTipo['campo_conocimiento_id'],
                    'personal_cargo_id' => $modeloPersonalTipo['personal_cargo_id'],
                    'personal_id' => $modeloPersonalTipo['personal_id'],
                ];
            }

            Yii::$app->session['variableSessionObjetoPersonalTipo'] = $objetoPersonalTipo;
        }
    }

    function verItemObjetoPersonalTipo($id) {
        $objetoPersonalTipo = Yii::$app->session['variableSessionObjetoPersonalTipo'];
        if (array_key_exists($id, $objetoPersonalTipo)) {
            $objetoPersonalTipo[$id];
        }

        return $objetoPersonalTipo[$id];
    }

    function elimiarItemObjetoPersonalTipo($id) {
        $objetoPersonalTipo = Yii::$app->session['variableSessionObjetoPersonalTipo'];
        if (array_key_exists($id, $objetoPersonalTipo)) {
            unset($objetoPersonalTipo[$id]);
        }
        Yii::$app->session['variableSessionObjetoPersonalTipo'] = $objetoPersonalTipo;
    }

}
