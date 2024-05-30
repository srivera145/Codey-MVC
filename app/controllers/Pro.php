<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Request;
use \Core\Session;

require ROOTPATH . 'assets/vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51N44CEEo9JK0lLFsfXZTtDea1kpYrznvpxwGnlIWNdyH3V5kCCEVKY7LNhJDdstzyxqiMsFFgRVJuaFJpix93k5800DTzePmbb');


/**
 * Pro class
 */
class Pro
{
	use MainController;

	public function index()
	{
		$req = new Request;
		$ses = new Session;

		$data = [
			'title' => 'Pro',
			'checkout_session' => \Stripe\Checkout\Session::create([
				'success_url' => 'http://localhost/codey/public/success',
				'cancel_url' => 'http://localhost/codey/public/cancel',
				'payment_method_types' => ['card'],
				'mode' => 'subscription',
				'line_items' => [[
					'price' => "price_1PJHWxEo9JK0lLFs3fmGYyPk",
					// For metered billing, do not pass quantity
					'quantity' => 1,
				]],
			]),
		];

		if (!$ses->is_logged_in()) {

			message("You must be logged in to view this page!");
			redirect('login');
		}

		$this->view('pro', $data);
	}

}
