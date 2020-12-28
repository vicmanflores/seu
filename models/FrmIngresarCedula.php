<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class FrmIngresarCedula extends Model {

    public $cedula;
    private $_cedulaAlumno = false;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            [['cedula'], 'required'],
        ];
    }

   
    public function attributeLabels() {
        return [
            'cedula' => 'Identificación',
                // rememberMe must be a boolean value
        ];
    }

}
