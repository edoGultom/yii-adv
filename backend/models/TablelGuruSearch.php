<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TableGuru;

/**
 * TablelGuruSearch represents the model behind the search form of `app\models\TableGuru`.
 */
class TablelGuruSearch extends TableGuru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jeniskelamin', 'id_kelas'], 'integer'],
            [['nama', 'alamat'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TableGuru::find();

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
            'id_jeniskelamin' => $this->id_jeniskelamin,
            'id_kelas' => $this->id_kelas,
        ]);

        $query->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
