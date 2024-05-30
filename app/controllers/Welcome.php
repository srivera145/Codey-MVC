<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * home class
 */
class Welcome
{
	use MainController;

	public function index()
	{
		$data = [
			'title' => 'Welcome',
		];
		
		$this->view('welcome',$data);
	}

}
