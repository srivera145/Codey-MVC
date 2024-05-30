<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

require ROOTPATH . 'assets/vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51N44CEEo9JK0lLFsfXZTtDea1kpYrznvpxwGnlIWNdyH3V5kCCEVKY7LNhJDdstzyxqiMsFFgRVJuaFJpix93k5800DTzePmbb');

use \Core\Request;
use \Core\Session;

/**
 * Basic class
 */

class Basic
{
	use MainController;

	public function index()
	{
		$req = new Request;
		$ses = new Session;
		
		$data = [
			'title' => 'Basic',
			'checkout_session' => \Stripe\Checkout\Session::create([
				'success_url' => 'http://localhost/codey/public/success',
				'cancel_url' => 'http://localhost/codey/public/cancel',
				'payment_method_types' => ['card'],
				'mode' => 'subscription',
				'line_items' => [[
					'price' => "price_1N6csaEo9JK0lLFszqQOFrJb",
					// For metered billing, do not pass quantity
					'quantity' => 1,
				]],
			]),
			'create_subscription' => 'create_subscription',
		];
		if (!$ses->is_logged_in()) {

			message("You must be logged in to view this page!");
			redirect('login');
		}

		$this->view('basic', $data);
	}

	public function create_subscription($data)
	{
		$basicPlan = 'basic';
		$premiumPlan = 'premium';
		$proPlan = 'pro';

		$basicPrice = 25;
		$premiumPrice = 75;
		$proPrice = 50;

		$userId = $data['user_id'];

		$subscription = $this->get_subscription($userId);

		if ($subscription) {
			return ['status' => 'error', 'message' => 'Subscription already exists'];
		}

		$plan = $data['plan'];

		if ($plan == $basicPlan) {
			$price = $basicPrice;
		} elseif ($plan == $premiumPlan) {
			$price = $premiumPrice;
		} elseif ($plan == $proPlan) {
			$price = $proPrice;
		} else {
			return ['status' => 'error', 'message' => 'Invalid plan'];
		}

		$data['price'] = $price;

		$subscription = $this->create($data);

		if ($subscription) {
			// if user has a subscription, add to the subscription table
			$this->table->insert($data);


			return ['status' => 'success', 'message' => 'Subscription created successfully'];
		}

		return ['status' => 'error', 'message' => 'Subscription creation failed'];
	}


		
}
