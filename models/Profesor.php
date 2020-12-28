<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property string $id
 * @property string $identificacion
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $telefono
 * @property string $email_institucional
 * @property string $email_personal
 * @property string $sexo
 * @property string $carrera_id
 * @property string $estado
 *
 * @property Encuesta[] $encuestas
 * @property Carrera $carrera
 * @property ProfesorAsignatura[] $profesorAsignaturas
 */
class Profesor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'identificacion', 'apellido_paterno', 'primer_nombre', 'sexo'], 'required'],
            [['id', 'identificacion', 'apellido_paterno', 'apellido_materno', 'primer_nombre', 'segundo_nombre', 'telefono', 'email_institucional', 'email_personal', 'sexo', 'carrera_id', 'estado'], 'string'],
            [['id'], 'unique'],
            [['carrera_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['carrera_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identificacion' => 'Identificacion',
            'apellido_paterno' => 'Apellido Paterno',
            'apellido_materno' => 'Apellido Materno',
            'primer_nombre' => 'Primer Nombre',
            'segundo_nombre' => 'Segundo Nombre',
            'telefono' => 'Telefono',
            'email_institucional' => 'Email Institucional',
            'email_personal' => 'Email Personal',
            'sexo' => 'Sexo',
            'carrera_id' => 'Carrera ID',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncuestas()
    {
        return $this->hasMany(Encuesta::className(), ['profesor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrera()
    {
        return $this->hasOne(Carrera::className(), ['id' => 'carrera_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesorAsignaturas()
    {
        return $this->hasMany(ProfesorAsignatura::className(), ['profesor_id' => 'id']);
    }
    
    public function getNombreCompleto()
    {
        return $this->primer_nombre .' '.$this->segundo_nombre .' '.$this->apellido_paterno .' '.$this->apellido_materno;
    }
}
