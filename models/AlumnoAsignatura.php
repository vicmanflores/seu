<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno_asignatura".
 *
 * @property int $id
 * @property int $alumno_id
 * @property string $encuestada
 * @property int $profesor_asignatura_id
 *
 * @property Alumno $alumno
 * @property ProfesorAsignatura $profesorAsignatura
 */
class AlumnoAsignatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumno_asignatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumno_id', 'profesor_asignatura_id','encuestada'], 'integer'],
            //[['encuestada'], 'string'],
            [['alumno_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alumno::className(), 'targetAttribute' => ['alumno_id' => 'id']],
            [['profesor_asignatura_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProfesorAsignatura::className(), 'targetAttribute' => ['profesor_asignatura_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alumno_id' => 'Alumno ID',
            'encuestada' => 'Encuestada',
            'profesor_asignatura_id' => 'Profesor Asignatura ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumno()
    {
        return $this->hasOne(Alumno::className(), ['id' => 'alumno_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesorAsignatura()
    {
        return $this->hasOne(ProfesorAsignatura::className(), ['id' => 'profesor_asignatura_id']);
    }
}
