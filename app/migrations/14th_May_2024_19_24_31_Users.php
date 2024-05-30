<?php

namespace Codey;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Users class
 */
class Users extends Migration
{
	
	public function up()
	{

		/** create a table **/
		$this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
		$this->addColumn('first_name varchar(255) NULL');
		$this->addColumn('last_name varchar(255) NULL');
		$this->addColumn('email varchar(255) NULL');
		$this->addColumn('role varchar(20) NULL');
		$this->addColumn('password varchar(255) NULL');
		$this->addColumn('token varchar(255) NULL');
		$this->addColumn('verified tinyint(1) NULL');
		$this->addColumn('date_created datetime NULL');
		$this->addColumn('date_updated datetime NULL');
		$this->addPrimaryKey('id');
		/*
		$this->addUniqueKey();
		*/
		$this->createTable('users');

		/** insert data **/
		//$this->addData('date_created',date("Y-m-d H:i:s"));
		//$this->addData('date_updated',date("Y-m-d H:i:s"));

		//$this->insertData('users');
	} 

	public function down()
	{
		$this->dropTable('users');
	}

}