<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encuesta".
 *
 * @property integer $id
 * @property integer $pregunta_id
 * @property string $alumno_id
 * @property string $profesor_id
 * @property string $asignatura_id
 * @property string $carrera_id
 * @property integer $periodo_id
 * @property integer $respuesta
 *
 * @property Alumno $alumno
 * @property Pregunta $pregunta
 * @property Asignatura $asignatura
 * @property Profesor $profesor
 */
class Encuesta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encuesta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pregunta_id', 'alumno_id', 'profesor_id', 'asignatura_id', 'respuesta'], 'required'],
            [['pregunta_id', 'periodo_id', 'respuesta'], 'integer'],
            [['alumno_id', 'profesor_id', 'asignatura_id', 'carrera_id'], 'string'],
            [['alumno_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alumno::className(), 'targetAttribute' => ['alumno_id' => 'id']],
            [['pregunta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pregunta::className(), 'targetAttribute' => ['pregunta_id' => 'id']],
            [['asignatura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['asignatura_id' => 'id']],
            [['profesor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profesor::className(), 'targetAttribute' => ['profesor_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pregunta_id' => 'Pregunta ID',
            'alumno_id' => 'Alumno ID',
            'profesor_id' => 'Profesor ID',
            'asignatura_id' => 'Asignatura ID',
            'carrera_id' => 'Carrera ID',
            'periodo_id' => 'Periodo ID',
            'respuesta' => 'Respuesta',
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
    public function getPregunta()
    {
        return $this->hasOne(Pregunta::className(), ['id' => 'pregunta_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignatura()
    {
        return $this->hasOne(Asignatura::className(), ['id' => 'asignatura_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesor()
    {
        return $this->hasOne(Profesor::className(), ['id' => 'profesor_id']);
    }
}
