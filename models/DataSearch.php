<?php
declare(strict_types = 1);

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * DataSearch represents the model behind the search form of `app\models\Data`.
 */
class DataSearch extends Data {
	/**
	 * {@inheritdoc}
	 */
	public function rules():array {
		return [
			[['id', 'type_id', 'deleted'], 'integer'],
			[['name', 'create_time'], 'safe']
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function scenarios():array {
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
	public function search($params):ActiveDataProvider {
		$query = Data::find();

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query
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
			'create_time' => $this->create_time,
			'type_id' => $this->type_id,
			'deleted' => $this->deleted
		]);

		$query->andFilterWhere(['like', 'name', $this->name]);

		return $dataProvider;
	}
}
