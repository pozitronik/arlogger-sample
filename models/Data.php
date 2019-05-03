<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $name Name of item
 * @property string $create_time Creation_time
 * @property int $type_id Type ID key
 * @property int $deleted Deleted item flag
 *
 * @property DataTypes|ActiveQuery $dataType Related DataType record
 * @property RelDataKinds[]|ActiveQuery $relDataKinds Relation to binding table between DataKinds records
 * @property DataKinds[]|ActiveQuery $dataKinds Related DataKinds records
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

	/**
	 * @return DataTypes|ActiveQuery
	 */
	public function getDataType() {
		return $this->hasOne(DataTypes::class, ['id' => 'type_id']);
	}

	/**
	 * @return RelDataKinds[]|ActiveQuery
	 */
	public function getRelDataKinds() {
		return $this->hasMany(RelDataKinds::class, ['data_id' => 'id']);
	}

	/**
	 * @return DataKinds[]|ActiveQuery
	 */
	public function getDataKinds() {
		return $this->hasMany(DataKinds::class, ['id' => 'kind_id'])->via('relDataKinds');
	}
}
