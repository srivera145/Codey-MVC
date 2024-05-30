<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Request;
use \Core\Session;
use \Model\User;
use \Core\Mailer;
use \Model\Model;

/**
 * Verify class
 */

class Verify
{
	use MainController;

	public function index()
	{
		$req = new Request;
		$ses = new Session;

		$data = [
			'title' => 'Verify',
			'error' => $ses->get('error'),
			'success' => $ses->get('success'),
			'verified' => $ses->get('verified'),
			'user' => $ses->user()

		];

		if ($ses->user('verified') == 1) {
			// Redirect to home
			redirect('home');
			exit;
		}

		$this->view('verify', $data);
	}

	public function generate_token()
	{
		$token = bin2hex(random_bytes(50));
		$ses = new Session();
		$ses->set('token', $token);
		return $token;
		echo $token;
	}

	public function send_verification()
	{
		$ses = new \Core\Session;
		$userId = $ses->get('id');
		$email = $ses->user('email');
		$token = $ses->user('token');

		if ($email) {

			$to = $email;
			$subject = "Email Verification";
			$message =
			'<h1>Verify your email address</h1><p>Please click the link below to verify your email address:</p><p><a href="' . ROOT . '/verify/verify_account?token=' . $token . '">Verify Email</a></p>';

			$mail = new Mailer();
			if ($mail->send($to, $subject, $message)) {
				// call update_verified method from Session class

				echo "Verification email sent to $to. Please check your email.";
			} else {
				echo "Failed to send verification email.";
			}
		} else {
			echo "User email not found.";
		}
	}

	public function verify_account()
	{
		$req = new Request();
		$token = $req->get('token');
		$user = new User();
		$ses = new Session();

		$user_data = $user->first(['token' => $token]);
		if ($user_data) {
			// Update the user's verified status
			$user->update($user_data->id, ['verified' => 1]);
			// Update session to reflect that the user is verified
			$ses->set('user', array_merge((array) $user_data, ['verified' => 1]));
			$ses->set('success', 'Your account has been successfully verified.');
			$this->view('verify_success'); // Render the success view
		} else {
			
			$ses->set('error', 'Invalid verification token.');

			
			$this->view('verify_error'); // Render the error view
		}
	}
}