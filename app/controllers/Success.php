<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Request;
use \Core\Session;

/**
 * Success class
 */

class Success
{
	use MainController;

	public function index()
	{
		$req = new Request;
		$ses = new Session;

		$data = [
			'title' => 'Success',
			'description' => 'This is the Success page'
		];

		if (!$ses->is_logged_in()) {

			message("You must be logged in to view this page!");
			redirect('login');
		}

		$this->view('success', $data);
	}

}
