<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $estado_id
 * @property string $token
 * @property string $fecha_creacion
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash' ], 'required'],
            ['username', 'unique'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'token'], 'string'],
            [['estado_id'], 'integer'],
            [['fecha_creacion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Usuario',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Clave',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'estado_id' => 'Estado',
            'token' => 'Token',
            'fecha_creacion' => 'Fecha Creacion',
        ];
    }
}
