<?php

namespace Codey;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * Subscription class
 */
class Subscription extends Migration
{
	public function up()
	{
		/** create a table **/
		$this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
		$this->addColumn('plan varchar(255) NOT NULL');
		$this->addColumn('is_active tinyint(1) NOT NULL');
		$this->addColumn('price int NOT NULL');
		$this->addColumn('user_id int(11) NOT NULL');
		$this->addColumn('date_created datetime NULL');
		$this->addColumn('date_updated datetime NULL');
		$this->addPrimaryKey('id');

		/** add foreign keys **/
		$this->addForeignKey('user_id', 'users', 'id');

		$this->createTable('subscription');

		/** insert data **/
		//$this->addData('date_created', date("Y-m-d H:i:s"));
		//$this->addData('date_updated', date("Y-m-d H:i:s"));

		//$this->insertData('subscription');
	}

	public function down()
	{
		$this->dropTable('subscription');
	}
}
