<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Buku;

/**
 * BukuSearach represents the model behind the search form of `app\models\Buku`.
 */
class BukuSearach extends Buku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_penulis', 'id_penerbit', 'eksemplar', 'stok'], 'integer'],
            [['nama', 'tahun', 'kota', 'katalog', 'keterangan', 'no_rak', 'updated_at', 'created_at'], 'safe'],
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

    public function getQuerySearch($params)
    {
        $query = Buku::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_penulis' => $this->id_penulis,
            'id_penerbit' => $this->id_penerbit,
            'eksemplar' => $this->eksemplar,
            'stok' => $this->stok,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'katalog', $this->katalog])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'no_rak', $this->no_rak]);

        

        return $query;
    }
    
    public function search($params)
    {
        $query = $this->getQuerySearch($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8,
            ],
        ]);        

        return $dataProvider;
    }
}
