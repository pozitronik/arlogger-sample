<?php
declare(strict_types = 1);

use yii\db\Migration;

/**
 * Class m190503_140858_create_test_tables
 */
class m190503_140858_create_test_tables extends Migration {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp() {
		$this->createTable('data', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull()->comment('Name of item'),
			'create_time' => $this->timestamp()->comment('Creation_time'),
			'type_id' => $this->integer()->null()->comment('Type ID key'),
			'deleted' => $this->boolean()->defaultValue(0)->comment('Deleted item flag')
		]);

		$this->createTable('data_types', [
			'id' => $this->primaryKey(),
			'value' => $this->string()->notNull()->comment('Type value'),
			'deleted' => $this->boolean()->defaultValue(0)->comment('Deleted item flag')
		]);

		$this->createTable('data_kinds', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull()->comment('Kind name'),
			'main' => $this->boolean()->defaultValue(0)->comment('Main kind flag'),
			'deleted' => $this->boolean()->defaultValue(0)->comment('Deleted item flag')
		]);

		$this->createTable('rel_data_kinds', [
			'id' => $this->primaryKey(),
			'data_id' => $this->integer()->notNull(),
			'kind_id' => $this->integer()->notNull()
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown() {
		$this->dropTable('data');
		$this->dropTable('data_types');
		$this->dropTable('data_kinds');
		$this->dropTable('rel_data_kinds');
	}

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
		echo "m190503_140858_create_test_tables cannot be reverted.\n";

		return false;
	}
	*/
}
