<?php 

defined('ROOTPATH') OR exit('Access Denied!');

if((empty($_SERVER['SERVER_NAME']) && php_sapi_name() == 'cli') || (!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost'))
{
	/** database config **/
	define('DBNAME', 'codey_db'); // update this to your database name
	define('DBHOST', 'localhost'); // update this to your database host
	define('DBUSER', 'root'); // update this to your database user
	define('DBPASS', ''); // update this to your database password
	define('DBDRIVER', ''); // update this to your database driver
	
	define('ROOT', 'http://localhost/codey/public'); //update this to your root url

}else
{
	/** database config **/
	define('DBNAME', 'codey_db'); // update this to your database name
	define('DBHOST', 'localhost'); // update this to your database host
	define('DBUSER', 'root'); // update this to your database user
	define('DBPASS', ''); // update this to your database password
	define('DBDRIVER', ''); // update this to your database driver

	define('ROOT', 'https://www.yourwebsite.com'); //update this to your root url

}

define('APP_NAME', "Codey MVC"); //update this to your app name
define('APP_DESC', "A simple MVC framework for PHP developers"); //update this to your app description

/** true means show errors **/
define('DEBUG', true); //set to false to hide errors

/** email credentials **/
define('EMAIL_USERNAME', '{update this to your email username}'); //update this to your email username
define('EMAIL_PASS', '{update this to your email password}'); //update this to your email password
define('EMAIL_HOST', '{update this to your email host}'); //update this to your email host
define('EMAIL_PORT', 465);

/** Stripe credentials **/

define('STRIPE_API_KEY', '{update this to your stripe api key}'); //update this to your stripe api key