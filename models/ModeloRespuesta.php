<?php

namespace app\models;

use Yii;
use yii\base\Model;
/*
 $ciclo= 1000;
        for ($i = 1; $i <= $ciclo; $i++) {
 echo "public $.respuesta".$i.";";
}

  
        for ($i = 1; $i <= $ciclo; $i++) {
 "'respuesta".$i."',"."";
}


 for ($i = 1; $i <= $ciclo; $i++) {
 "'respuesta$i' => 'Respuesta',"."";
}

 
         
die();
 *  */

class ModeloRespuesta extends Model {

   public $respuesta1;public $respuesta2;public $respuesta3;public $respuesta4;public $respuesta5;public $respuesta6;public $respuesta7;public $respuesta8;public $respuesta9;public $respuesta10;public $respuesta11;public $respuesta12;public $respuesta13;public $respuesta14;public $respuesta15;public $respuesta16;public $respuesta17;public $respuesta18;public $respuesta19;public $respuesta20;public $respuesta21;public $respuesta22;public $respuesta23;public $respuesta24;public $respuesta25;public $respuesta26;public $respuesta27;public $respuesta28;public $respuesta29;public $respuesta30;public $respuesta31;public $respuesta32;public $respuesta33;public $respuesta34;public $respuesta35;public $respuesta36;public $respuesta37;public $respuesta38;public $respuesta39;public $respuesta40;public $respuesta41;public $respuesta42;public $respuesta43;public $respuesta44;public $respuesta45;public $respuesta46;public $respuesta47;public $respuesta48;public $respuesta49;public $respuesta50;public $respuesta51;public $respuesta52;public $respuesta53;public $respuesta54;public $respuesta55;public $respuesta56;public $respuesta57;public $respuesta58;public $respuesta59;public $respuesta60;public $respuesta61;public $respuesta62;public $respuesta63;public $respuesta64;public $respuesta65;public $respuesta66;public $respuesta67;public $respuesta68;public $respuesta69;public $respuesta70;public $respuesta71;public $respuesta72;public $respuesta73;public $respuesta74;public $respuesta75;public $respuesta76;public $respuesta77;public $respuesta78;public $respuesta79;public $respuesta80;public $respuesta81;public $respuesta82;public $respuesta83;public $respuesta84;public $respuesta85;public $respuesta86;public $respuesta87;public $respuesta88;public $respuesta89;public $respuesta90;public $respuesta91;public $respuesta92;public $respuesta93;public $respuesta94;public $respuesta95;public $respuesta96;public $respuesta97;public $respuesta98;public $respuesta99;public $respuesta100;

    public function rules() {
        return [
            [['respuesta1','respuesta2','respuesta3','respuesta4','respuesta5','respuesta6','respuesta7','respuesta8','respuesta9','respuesta10','respuesta11','respuesta12','respuesta13','respuesta14','respuesta15','respuesta16','respuesta17','respuesta18','respuesta19','respuesta20','respuesta21','respuesta22','respuesta23','respuesta24','respuesta25','respuesta26','respuesta27','respuesta28','respuesta29','respuesta30','respuesta31','respuesta32','respuesta33','respuesta34','respuesta35','respuesta36','respuesta37','respuesta38','respuesta39','respuesta40','respuesta41','respuesta42','respuesta43','respuesta44','respuesta45','respuesta46','respuesta47','respuesta48','respuesta49','respuesta50','respuesta51','respuesta52','respuesta53','respuesta54','respuesta55','respuesta56','respuesta57','respuesta58','respuesta59','respuesta60','respuesta61','respuesta62','respuesta63','respuesta64','respuesta65','respuesta66','respuesta67','respuesta68','respuesta69','respuesta70','respuesta71','respuesta72','respuesta73','respuesta74','respuesta75','respuesta76','respuesta77','respuesta78','respuesta79','respuesta80','respuesta81','respuesta82','respuesta83','respuesta84','respuesta85','respuesta86','respuesta87','respuesta88','respuesta89','respuesta90','respuesta91','respuesta92','respuesta93','respuesta94','respuesta95','respuesta96','respuesta97','respuesta98','respuesta99','respuesta100',], 'required'],
        ];
    }

   
    public function attributeLabels() {
        return [
           'respuesta1' => 'Respuesta','respuesta2' => 'Respuesta','respuesta3' => 'Respuesta','respuesta4' => 'Respuesta','respuesta5' => 'Respuesta','respuesta6' => 'Respuesta','respuesta7' => 'Respuesta','respuesta8' => 'Respuesta','respuesta9' => 'Respuesta','respuesta10' => 'Respuesta','respuesta11' => 'Respuesta','respuesta12' => 'Respuesta','respuesta13' => 'Respuesta','respuesta14' => 'Respuesta','respuesta15' => 'Respuesta','respuesta16' => 'Respuesta','respuesta17' => 'Respuesta','respuesta18' => 'Respuesta','respuesta19' => 'Respuesta','respuesta20' => 'Respuesta','respuesta21' => 'Respuesta','respuesta22' => 'Respuesta','respuesta23' => 'Respuesta','respuesta24' => 'Respuesta','respuesta25' => 'Respuesta','respuesta26' => 'Respuesta','respuesta27' => 'Respuesta','respuesta28' => 'Respuesta','respuesta29' => 'Respuesta','respuesta30' => 'Respuesta','respuesta31' => 'Respuesta','respuesta32' => 'Respuesta','respuesta33' => 'Respuesta','respuesta34' => 'Respuesta','respuesta35' => 'Respuesta','respuesta36' => 'Respuesta','respuesta37' => 'Respuesta','respuesta38' => 'Respuesta','respuesta39' => 'Respuesta','respuesta40' => 'Respuesta','respuesta41' => 'Respuesta','respuesta42' => 'Respuesta','respuesta43' => 'Respuesta','respuesta44' => 'Respuesta','respuesta45' => 'Respuesta','respuesta46' => 'Respuesta','respuesta47' => 'Respuesta','respuesta48' => 'Respuesta','respuesta49' => 'Respuesta','respuesta50' => 'Respuesta','respuesta51' => 'Respuesta','respuesta52' => 'Respuesta','respuesta53' => 'Respuesta','respuesta54' => 'Respuesta','respuesta55' => 'Respuesta','respuesta56' => 'Respuesta','respuesta57' => 'Respuesta','respuesta58' => 'Respuesta','respuesta59' => 'Respuesta','respuesta60' => 'Respuesta','respuesta61' => 'Respuesta','respuesta62' => 'Respuesta','respuesta63' => 'Respuesta','respuesta64' => 'Respuesta','respuesta65' => 'Respuesta','respuesta66' => 'Respuesta','respuesta67' => 'Respuesta','respuesta68' => 'Respuesta','respuesta69' => 'Respuesta','respuesta70' => 'Respuesta','respuesta71' => 'Respuesta','respuesta72' => 'Respuesta','respuesta73' => 'Respuesta','respuesta74' => 'Respuesta','respuesta75' => 'Respuesta','respuesta76' => 'Respuesta','respuesta77' => 'Respuesta','respuesta78' => 'Respuesta','respuesta79' => 'Respuesta','respuesta80' => 'Respuesta','respuesta81' => 'Respuesta','respuesta82' => 'Respuesta','respuesta83' => 'Respuesta','respuesta84' => 'Respuesta','respuesta85' => 'Respuesta','respuesta86' => 'Respuesta','respuesta87' => 'Respuesta','respuesta88' => 'Respuesta','respuesta89' => 'Respuesta','respuesta90' => 'Respuesta','respuesta91' => 'Respuesta','respuesta92' => 'Respuesta','respuesta93' => 'Respuesta','respuesta94' => 'Respuesta','respuesta95' => 'Respuesta','respuesta96' => 'Respuesta','respuesta97' => 'Respuesta','respuesta98' => 'Respuesta','respuesta99' => 'Respuesta','respuesta100' => 'Respuesta',
        ];
    }

}