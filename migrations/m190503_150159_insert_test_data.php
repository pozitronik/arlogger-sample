<?php

use yii\db\Migration;

/**
 * Class m190503_150159_insert_test_data
 */
class m190503_150159_insert_test_data extends Migration {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp() {
		$this->insert('data_kinds',[
			'name' => 'Music'
		]);
		$this->insert('data_kinds',[
			'name' => 'Book'
		]);
		$this->insert('data_kinds',[
			'name' => 'Movie'
		]);
		$this->insert('data_kinds',[
			'name' => 'Porn',
			'main' => true
		]);
		$this->insert('data_kinds',[
			'name' => 'Podcast'
		]);

		$this->insert('data_types',[
			'value' => 'Text'
		]);
		$this->insert('data_types',[
			'value' => 'Audio'
		]);
		$this->insert('data_types',[
			'value' => 'Video'
		]);
		$this->insert('data_types',[
			'value' => 'Picture'
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown() {
		$this->truncateTable('data_kinds');
		$this->truncateTable('data_types');
	}

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
		echo "m190503_150159_insert_test_data cannot be reverted.\n";

		return false;
	}
	*/
}
