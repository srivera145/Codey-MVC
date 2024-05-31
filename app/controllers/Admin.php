<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Admin class
 */
class Admin
{
	use MainController;

	public function index()
	{
		$data = [
			'title' => 'Admin',
			


		];

		$this->view('admin', $data);
	}

}
