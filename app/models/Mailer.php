<?php

/**
 * Mailer manipulation class
 */

namespace Core;

defined('ROOTPATH') or exit('Access Denied!');

require_once ROOTPATH . 'assets/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mailer
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->setup();
    }

    private function setup()
    {
        // Server settings
        $this->mail->isSMTP();
        $this->mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
        $this->mail->Host =  EMAIL_HOST;   // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;
        $this->mail->Username = EMAIL_USERNAME; // SMTP username
        $this->mail->Password = EMAIL_PASS; // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $this->mail->Port = 587; // TCP port to connect to
    }

    public function send($to, $subject, $body, $from = EMAIL_USERNAME, $fromName = APP_NAME)
    {
        try {
            // Recipients
            $this->mail->setFrom(EMAIL_USERNAME, APP_NAME);
            $this->mail->addAddress($to);

            // Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            // Log or handle the error
            return false;
        }
    }
}
