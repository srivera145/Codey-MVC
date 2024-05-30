<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Request;
use \Core\Session;

/**
 * Home class
 */

class Home
{
	use MainController;

	public function index()
	{
		$req = new Request;
		$ses = new Session;

		$data = [
			'title' => 'Home',
			'error' => $ses->get('error'),
			'success' => $ses->get('success'),
			'user' => $ses->user()
		];
		
		if (!$ses->is_logged_in()) {

			message("You must be logged in to view this page!");
			redirect('login');
		}

		if ($data['user']->verified == 0) {
			// Redirect to verify
			redirect('verify');
			exit;
		}

		$this->view('home', $data);
	}

}
