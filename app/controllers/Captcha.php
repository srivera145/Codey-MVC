<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Session;

/**
 * Captcha class
 */
class Captcha
{
	use MainController;

	public function index()
	{
		$data['title'] = 'Captcha page view';

		$this->view('captcha', $data);

		$ses = new Session;

		  if (!$ses->is_logged_in()) {
		  	redirect('login');
		  }
	}

	public function create_captcha()
	{
		$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 7);

		$font = ROOTPATH . '/assets/fonts/OpenSans-Regular.ttf';

		$image = imagecreatetruecolor(170, 60);

		$white = imagecolorallocate($image, 242, 242, 242);

		$black = imagecolorallocate($image, 0, 0, 0);
		$gray = imagecolorallocate($image, 200, 200, 200);
		$darkgray = imagecolorallocate($image, 160, 160, 160);

		imagefilledrectangle($image, 0, 0, 399, 99, $white);

		// Wave Distortion 
		$freq = rand(12, 15);  // Frequency
		$amp = rand(45, 30);  // Amplitude
		for ($x = 0; $x < 170; $x++) {
			imageline($image, $x, 5, $x, 5 + sin($x / $freq) * $amp, $gray);
		}

		// Tilting & Positioning
		$charSpacing = 20; // Adjust for character spacing
		for ($i = 0; $i < strlen($random_number); $i++) {
			$angle = rand(-25, 25); // Random tilt between -15 and 15 degrees
			$y = 40 + rand(-9, 9);  // Random vertical shift
			imagettftext($image, 30, $angle, $charSpacing * $i + 10, $y, $darkgray, $font, $random_number[$i]);
		}


		// Random Lines (for more noise)
		for ($i = 0; $i < 5; $i++) {
			imageline($image, rand(0, 170), rand(0, 60), rand(0, 170), rand(0, 60), $gray);
		}

		//imagettftext($image, 30, $angle, $charSpacing * $i + 10, $y, $darkgray, $font, $random_number[$i]);
		header("Content-type: image/png");
		imagepng($image);
		$_SESSION['captcha'] = $random_number;
		imagedestroy($image);
	}

	public function check_captcha()
	{
		$captcha = $_POST['captcha'];

		if ($captcha == $_SESSION['captcha']) {

			echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<div style="font-family:Poppins; margin-top:435px; text-align:center;margin-left:570px;margin-right:875px;" class="alert alert-success" role="alert">The Captcha you entered was correct! Redirecting you to the main page...</div>';

			// redirect to main page with 2 second delay after showing message that captcha was correct
			header("refresh:2;url=" . ROOT . "/home");
		} else {
			
			echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<div style="font-family:Poppins; margin-top:435px; text-align:center;margin-left:570px;margin-right:875px;" class="alert alert-danger" role="alert">The Captcha you entered was incorrect! Please wait for this page to reload and try again.</div>';

			// redirect to back to captcha page with 2 second delay after showing message to try again
			header("refresh:2;url=" . ROOT . "/captcha");

		}
	}
}