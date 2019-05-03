<?php
declare(strict_types = 1);

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "data_types".
 *
 * @property int $id
 * @property string $value Type value
 * @property int $deleted Deleted item flag
 */
class DataTypes extends ActiveRecord {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName():string {
		return 'data_types';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules():array {
		return [
			[['value'], 'required'],
			[['deleted'], 'integer'],
			[['value'], 'string', 'max' => 255]
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels():array {
		return [
			'id' => 'ID',
			'value' => 'Type value',
			'deleted' => 'Deleted item flag'
		];
	}
}
