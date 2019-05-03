<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $name Name of item
 * @property string $create_time Creation_time
 * @property int $type_id Type ID key
 * @property int $deleted Deleted item flag
 */
class Data extends \yii\db\ActiveRecord {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'data';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[['name'], 'required'],
			[['create_time'], 'safe'],
			[['type_id', 'deleted'], 'integer'],
			[['name'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Name of item',
			'create_time' => 'Creation_time',
			'type_id' => 'Type ID key',
			'deleted' => 'Deleted item flag',
		];
	}
}
