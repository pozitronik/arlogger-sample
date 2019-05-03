<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_data_kinds".
 *
 * @property int $id
 * @property int $data_id
 * @property int $kind_id
 */
class RelDataKinds extends \yii\db\ActiveRecord {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'rel_data_kinds';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[['data_id', 'kind_id'], 'required'],
			[['data_id', 'kind_id'], 'integer'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'data_id' => 'Data ID',
			'kind_id' => 'Kind ID',
		];
	}
}
