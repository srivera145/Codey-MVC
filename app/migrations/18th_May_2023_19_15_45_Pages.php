<?php

namespace Codey;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Pages class
 */
class Pages extends Migration
{
	
	public function up()
	{

		/** create a table **/
		$this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
		$this->addColumn('date_created datetime NULL');
		$this->addColumn('date_updated datetime NULL');
		$this->addPrimaryKey('id');
		/*
		$this->addUniqueKey();
		*/
		$this->createTable('pages');

		/** insert data **/
		$this->addData('date_created',date("Y-m-d H:i:s"));
		$this->addData('date_updated',date("Y-m-d H:i:s"));

		$this->insertData('pages');
	} 

	public function down()
	{
		$this->dropTable('pages');
	}

}