<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property int $id
 * @property string $descripcion
 *
 * @property Encuesta[] $encuestas
 * @property ProfesorAsignatura[] $profesorAsignaturas
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asignatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncuestas()
    {
        return $this->hasMany(Encuesta::className(), ['asignatura_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesorAsignaturas()
    {
        return $this->hasMany(ProfesorAsignatura::className(), ['asignatura_id' => 'id']);
    }
}
