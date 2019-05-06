<?php
declare(strict_types = 1);

namespace app\models;

use pozitronik\arlogger\models\ActiveRecordHistory;

/**
 * This is the model class for table "data_kinds".
 *
 * @property int $id
 * @property string $name Kind name
 * @property int $main Main kind flag
 * @property int $deleted Deleted item flag
 */
class DataKinds extends ActiveRecordHistory {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName():String {
		return 'data_kinds';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules():array {
		return [
			[['name'], 'required'],
			[['main', 'deleted'], 'integer'],
			[['name'], 'string', 'max' => 255]
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels():array {
		return [
			'id' => 'ID',
			'name' => 'Kind name',
			'main' => 'Main kind flag',
			'deleted' => 'Deleted item flag'
		];
	}
}
