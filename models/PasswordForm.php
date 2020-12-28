<?php

namespace app\models;


use yii\base\InvalidParamException;
use yii\web\LoginForm;
use yii\base\Model;
use Yii;

class PasswordForm extends Model {

    public $oldpass;
    public $newpass;
    public $repeatnewpass;

    public function rules() {
        return [
            [['oldpass', 'newpass', 'repeatnewpass'], 'required'],
            ['oldpass', 'findPasswords'],
            ['repeatnewpass', 'compare', 'compareAttribute' => 'newpass'],
            ['newpass', 'no_clave_anterior'],
        ];
    }

    public function no_clave_anterior($attribute, $params) {
        if ($this->$attribute == $this->oldpass) {
            $this->addError($attribute, 'Ingrese una clave diferente a la actual');
        }
    }

    public function findPasswords($attribute, $params) {
        $user = User::find()->where([
                    'username' => Yii::$app->user->identity->username
                ])->one();
        //   print_r($user);
        // $user->validatePassword($this->oldpass);
        // die();
        //$password = $user->password_hash;
        if ($user->validatePassword($this->oldpass) != 1)
            $this->addError($attribute, 'Clave Anterior es incorrecta');
    }

    public function attributeLabels() {
        return [
            'oldpass' => 'Clave Anterior',
            'newpass' => 'Nueva Clave',
            'repeatnewpass' => 'Repetir Nueva Clave',
        ];
    }

}
