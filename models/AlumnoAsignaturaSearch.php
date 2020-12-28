<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AlumnoAsignatura;

/**
 * AlumnoAsignaturaSearch represents the model behind the search form about `app\models\AlumnoAsignatura`.
 */
class AlumnoAsignaturaSearch extends AlumnoAsignatura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'alumno_id', 'profesor_asignatura_id'], 'integer'],
            [['encuestada'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Crea instancia del proveedor de datos aplicando paramétros de búsqueda 
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AlumnoAsignatura::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
             // Elimine el comentario de la siguiente línea si no desea devolver cualquier registro cuando falla la validación
            // $query->where('0=1');
            return $dataProvider;
        }

        // COndiciones de filtro del grid
        $query->andFilterWhere([
            'id' => $this->id,
            'alumno_id' => $this->alumno_id,
            'profesor_asignatura_id' => $this->profesor_asignatura_id,
        ]);

        $query->andFilterWhere(['like', 'encuestada', $this->encuestada]);

        return $dataProvider;
    }
}
