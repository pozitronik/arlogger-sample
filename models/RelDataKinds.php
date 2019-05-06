<?php
declare(strict_types = 1);

namespace app\models;

use pozitronik\arlogger\models\ActiveRecordHistory;

/**
 * This is the model class for table "rel_data_kinds".
 *
 * @property int $id
 * @property int $data_id
 * @property int $kind_id
 */
class RelDataKinds extends ActiveRecordHistory {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName():string {
		return 'rel_data_kinds';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules():array {
		return [
			[['data_id', 'kind_id'], 'required'],
			[['data_id', 'kind_id'], 'integer']
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels():array {
		return [
			'id' => 'ID',
			'data_id' => 'Data ID',
			'kind_id' => 'Kind ID'
		];
	}
}
