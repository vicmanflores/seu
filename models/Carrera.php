<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrera".
 *
 * @property string $id
 * @property string $codigo
 * @property string $descripcion
 * @property string $facultad_id
 *
 * @property Alumno[] $alumnos
 * @property Profesor[] $profesors
 */
class Carrera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'codigo', 'descripcion', 'facultad_id'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'facultad_id' => 'Facultad ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumno::className(), ['carrera_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesors()
    {
        return $this->hasMany(Profesor::className(), ['carrera_id' => 'id']);
    }
}
