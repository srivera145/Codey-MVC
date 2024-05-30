<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');


/**
 * User class
 */
class User
{
	
	use Model;

	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $loginUniqueColumn = 'email';

	protected $allowedColumns = [

		'first_name',
		'last_name',
		'role',
		'email',
		'password',
		'token',
		'verified',
		'date_created',
		'date_updated',
	];

	/*****************************
	 * 	rules include:
		required
		alpha
		email
		numeric
		unique
		symbol
		not_less_than_8_chars
		longer_than_8_chars
		alpha_numeric_symbol
		alpha_numeric
		alpha_symbol
	 * 
	 ****************************/
	protected $onInsertValidationRules = [

		'email' => [
			'email',
			'unique',
			'required',
		],
		'first_name' => [
			'alpha',
			'required',
		],
		'last_name' => [
			'alpha',
			'required',
		],
		'role' => [
			'alpha',
			'required',
		],
		'password' => [
			'not_less_than_8_chars',
			'capital_letter',
			'small_letter',
			'numeric',
			'symbol',
			'match',
			'required',
		],
		'password2' => [
			'not_less_than_8_chars',
			'capital_letter',
			'small_letter',
			'numeric',
			'symbol',
			'match',
			'required',
		],
		'token' => [
			'alpha_numeric',
			'required',
		],
		'verified' => [
			'numeric',
			'required',
		],
	];

	protected $onUpdateValidationRules = [

		'email' => [
			'email',
			'unique',
			'required',
		],
		'username' => [
			'alpha',
			'required',
		],
		'role' => [
			'alpha',
			'required',
		],
		'password' => [
			'not_less_than_8_chars',
			'capital_letter',
			'small_letter',
			'numeric',
			'symbol',
			'match',
			'required',
		],
		'token' => [
			'alpha_numeric',
			'required',
		],
		'verified' => [
			'numeric',
			'required',
		],
	];

	public function signup($data)
	{
		if($this->validate($data))
		{
			//add extra user columns here
			$data['token'] = bin2hex(random_bytes(50));
			$data['verified'] = 0;
			$data['email'] = $data['email'];
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
			$data['role'] = 'user';
			$data['date_created'] = date("Y-m-d H:i:s");
			$data['date_updated'] = date("Y-m-d H:i:s");

			$this->insert($data);
			redirect('login');
		}
	}



	public function isLoggedIn()
	{
		$user = $this->session->get('USER');
		if($user)
		{
			return true;
		}

		return false;

		return $ses->isLoggedIn();
	}

	public function login($data)
	{
		$row = $this->first([$this->loginUniqueColumn => $data[$this->loginUniqueColumn]]);

		if ($row) {
			
			//confirm password
			if (password_verify($data['password'], $row->password)) {
				$ses = new \Core\Session;
				$ses->auth($row);

				switch ($row->role) {
					case 'admin':

						redirect('admin');
						break;
						
					case 'user':

						redirect('captcha');
						break;

					default:
						redirect('captcha');
						break;
				}
			} else {
				$this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password";
			}
		} else {
			$this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password";
		}
	}

}