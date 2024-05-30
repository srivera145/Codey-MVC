<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Subscription class
 */
class Subscription
{
	
	use Model;

	protected $table = 'subscriptions';
	protected $primaryKey = 'id';
	protected $foreignKey = 'user_id';

	protected $allowedColumns = [

		'user_id',
		'plan',
		'price',
		'is_active', // '0' or '1
		'created_at',
		'updated_at',
	];

	/*****************************
	 * 	rules include:
		required
		alpha
		email
		numeric
		unique
		symbol
		longer_than_8_chars
		alpha_numeric_symbol
		alpha_numeric
		alpha_symbol
	 * 
	 ****************************/
	protected $validationRules = [

		'user_id' => 'required|numeric',
		'plan' => 'required|alpha',
		'is_active' => 'required|numeric',
		'price' => 'required|numeric',
		'created_at' => 'required',
		'updated_at' => 'required',
	];

	/**
	 * Add a new subscription
	 * 
	 * @return array
	 */

	public function getUserDetails($userId)
	{
		if($rows)
		{
			foreach ($rows as $key => $row) {

				$user_row = $this->get_row("select * from users where id = :id limit 1", ['id' => $row->user_id]);
				if ($user_row)
					$rows[$key]->user_row = $user_row;
			}
		}
		
		return $rows;
	}

	public function getSubscription($userId)
	{
		$subscription = $this->get_row("select * from subscriptions where user_id = :user_id limit 1", ['user_id' => $userId]);

		if ($subscription) {
			return $subscription;
		}

		return false;
	}

}