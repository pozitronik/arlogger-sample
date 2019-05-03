<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_kinds".
 *
 * @property int $id
 * @property string $name Kind name
 * @property int $main Main kind flag
 * @property int $deleted Deleted item flag
 */
class DataKinds extends \yii\db\ActiveRecord {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'data_kinds';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[['name'], 'required'],
			[['main', 'deleted'], 'integer'],
			[['name'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Kind name',
			'main' => 'Main kind flag',
			'deleted' => 'Deleted item flag',
		];
	}
}