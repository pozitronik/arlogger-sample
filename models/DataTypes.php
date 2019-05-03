<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_types".
 *
 * @property int $id
 * @property string $value Type value
 * @property int $deleted Deleted item flag
 */
class DataTypes extends \yii\db\ActiveRecord {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'data_types';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[['value'], 'required'],
			[['deleted'], 'integer'],
			[['value'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'value' => 'Type value',
			'deleted' => 'Deleted item flag',
		];
	}
}
