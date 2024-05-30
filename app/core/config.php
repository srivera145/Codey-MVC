<?php 

defined('ROOTPATH') OR exit('Access Denied!');

if((empty($_SERVER['SERVER_NAME']) && php_sapi_name() == 'cli') || (!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost'))
{
	/** database config **/
	define('DBNAME', 'codey_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/codey/public');

}else
{
	/** database config **/
	define('DBNAME', 'codey_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "Codey MVC");
define('APP_DESC', "A simple MVC framework for PHP developers");

/** true means show errors **/
define('DEBUG', true);

/** email credentials **/
define('EMAIL_USERNAME', 'semlyai@digitaledgewebservices.com');
define('EMAIL_PASS', 'nC&hn2&U');
define('EMAIL_HOST', 'smtp.titan.email');
define('EMAIL_PORT', 465);

