<?php
declare(strict_types = 1);

namespace app\models;

use pozitronik\arlogger\models\ActiveRecordHistory;
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
class Data extends ActiveRecordHistory {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName():string {
		return 'data';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules():array {
		return [
			[['name'], 'required'],
			[['create_time'], 'safe'],
			[['create_time'], 'default', 'value' => date('Y-m-d H:i:s')],
			[['type_id', 'deleted'], 'integer'],
			[['name'], 'string', 'max' => 255],
			[['dataKinds'], 'safe']
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels():array {
		return [
			'id' => 'ID',
			'name' => 'Name',
			'create_time' => 'Creation time',
			'type_id' => 'Item type',
			'dataKinds' => 'Item kinds',
			'deleted' => 'Deleted'
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

	/**
	 * @param int[]|string $dataKinds
	 */
	public function setDataKinds($dataKinds):void {
		//todo use relation helper
	}
}
