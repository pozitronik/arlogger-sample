<?php
declare(strict_types = 1);

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * DataTypesSearch represents the model behind the search form of `app\models\DataTypes`.
 */
class DataTypesSearch extends DataTypes {
	/**
	 * {@inheritdoc}
	 */
	public function rules():array {
		return [
			[['id', 'deleted'], 'integer'],
			[['value'], 'safe']
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
		$query = DataTypes::find();

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
			'deleted' => $this->deleted
		]);

		$query->andFilterWhere(['like', 'value', $this->value]);

		return $dataProvider;
	}
}
