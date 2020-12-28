<?php

namespace app\helpers;

use Yii;
use yii\BaseYii;

class HelperPersonalizado {

    const FECHA_ACTUAL = "now()";
    const HORA_ACTUAL = "time()";
    const MENSAJE_ERROR_ELIMINAR = "No se puede eliminar el ítem seleccionado, asegúrese de que no tenga datos relacionados, o que la información no se este utilizando en otro proceso";
    const MENSAJE_EXITO = "Proceso realizado con éxito";

    public static function PeriodoActivo() {
        $periodo = \app\models\PeriodoEva::find()->where(['estado' => 1])->one();
        $periodoActivo = $periodo->id;
        return $periodoActivo;
    }

    public static function SoloNumeros($param) {
        if (is_numeric($param)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function FormatearFecha($fecha) {
        $dia = substr($fecha, 8, 2);
        $mes = substr($fecha, 5, 2);
        $anio = substr($fecha, 0, 4);

        switch ($mes) {
            case '01':
                $mes = "Enero";
                break;
            case '02':
                $mes = "Febrero";
                break;
            case '03':
                $mes = "Marzo";
                break;
            case '04':
                $mes = "Abril";
                break;
            case '05':
                $mes = "Mayo";
                break;
            case '06':
                $mes = "Junio";
                break;
            case '07':
                $mes = "Julio";
                break;
            case '08':
                $mes = "Agosto";
                break;
            case '09':
                $mes = "Septiembre";
                break;
            case '10':
                $mes = "Octubre";
                break;
            case '11':
                $mes = "Noviembre";
                break;
            case '12':
                $mes = "Diciembre";
                break;
        }
        $fecha = $dia . " de " . $mes . " de " . $anio;
        return $fecha;
    }

    public static function AcortarCadena($cadena, $limite) {
        $cad = $cadena;
        $cadenaCorta = substr($cad, 0, $limite); //La subcadena aprender
        return $cadenaCorta;
    }

    public static function RutaAbsoluta() {
        $host = $_SERVER['HTTP_HOST'];
//$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        return $base = "https://" . $host . '/danu/evadanu_2020_1/web/';
    }

    public static function RutaRaiz() {
        $host = $_SERVER['HTTP_HOST'];
//$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        return $base = "https://" . $host . '/danu/evadanu_2020_1/web/';
    }

    public static function RestarFecha($fecha, $dia) {

        $nuevafecha = strtotime($dia . 'day', strtotime($fecha));
        return $nuevafecha = date('Y-m-d', $nuevafecha);
    }

    public static function SumarDias($fecha, $dia) {
//$fecha = date('Y-m-j');
        $nuevafecha = strtotime('+' . $dia . ' day', strtotime($fecha));
        $nuevafecha = date('Y-m-d', $nuevafecha);
//echo $nuevafecha;
        return $nuevafecha;
    }

    public static function IdAlumno() {
        $variableSessionAlumno = Yii::$app->session;
        return $variableSessionAlumno['datos']['idAlumno'];
    }

    public static function CedulaAlumno() {
        $variableSessionAlumno = Yii::$app->session;
        return $variableSessionAlumno['datos']['identificacion'];
    }

    public static function GenerarToken($parametro) {
        
        $generado = Yii::$app->security->generateRandomString();
        $token = Yii::$app->security->generatePasswordHash($parametro . '' . $generado);
        return $token;
    }

    
    public static function GenerarClave($parametro) {
        
        $clave = Yii::$app->security->generatePasswordHash($parametro);
        return $clave;
    }
    
}
