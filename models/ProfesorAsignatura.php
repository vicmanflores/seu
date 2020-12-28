<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor_asignatura".
 *
 * @property int $id
 * @property string $profesor_id
 * @property string $asignatura_id
 *
 * @property AlumnoAsignatura[] $alumnoAsignaturas
 * @property Asignatura $asignatura
 * @property Profesor $profesor
 */
class ProfesorAsignatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesor_asignatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profesor_id', 'asignatura_id'], 'string'],
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
            'profesor_id' => 'Profesor ID',
            'asignatura_id' => 'Asignatura ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnoAsignaturas()
    {
        return $this->hasMany(AlumnoAsignatura::className(), ['profesor_asignatura_id' => 'id']);
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
