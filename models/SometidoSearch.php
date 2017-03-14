<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sometido;

/**
 * SometidoSearch represents the model behind the search form about `app\models\Sometido`.
 */
class SometidoSearch extends Sometido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'respuesta_1', 'respuesta_2', 'respuesta_3', 'respuesta_4', 'respuesta_5'], 'integer'],
            [['frecuencia', 'clasificacion', 'sugerencias_recomendaciones'], 'safe'],
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
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sometido::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'respuesta_1' => $this->respuesta_1,
            'respuesta_2' => $this->respuesta_2,
            'respuesta_3' => $this->respuesta_3,
            'respuesta_4' => $this->respuesta_4,
            'respuesta_5' => $this->respuesta_5,
        ]);

        $query->andFilterWhere(['like', 'frecuencia', $this->frecuencia])
            ->andFilterWhere(['like', 'clasificacion', $this->clasificacion])
            ->andFilterWhere(['like', 'sugerencias_recomendaciones', $this->sugerencias_recomendaciones]);

        return $dataProvider;
    }
}
