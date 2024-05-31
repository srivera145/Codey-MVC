<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Request;
use \Core\Session;
use \Model\User;
use \Core\Mailer;
use \Model\Model;
use \Model\Database;

/**
 * Verify class
 */

class Verify
{
	use MainController;
	use \Model\Database;

	public function index()
	{
		$req = new Request;
		$ses = new Session;

		$data = [
			'title' => 'Verify',
			'error' => $ses->get('error'),
			'success' => $ses->get('success'),
			'verified' => $ses->get('verified'),
			'user' => $ses->user(),

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
		$token = bin2hex(random_bytes(16));
		$ses = new Session;
		$user = new User;
		$userId = $ses->user('id');

		if ($userId) {
			$user->update($userId, ['token' => $token]);
		}

		return $token;
	}

	public function send_verification()
	{
		$ses = new \Core\Session;
		$userId = $ses->get('id');
		$email = $ses->user('email');
		$token = $this->generate_token();

		if ($email) {

			$to = $email;
			$subject = 'Email Verification';
			$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">
  <title></title>
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
 <!--[if mso]>
 <style type="text/css">
     ul {
  margin: 0 !important;
  }
  ol {
  margin: 0 !important;
  }
  li {
  margin-left: 47px !important;
  }

 </style><![endif]
--><!--[if !mso]><!-- --><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700,700i"><!--<![endif]--></head>
 <body class="body">
  <div dir="ltr" class="es-wrapper-color">
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#fafafa"></v:fill>
			</v:background>
		<![endif]-->
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
    <tbody>
     <tr>
      <td class="esd-email-paddings" valign="top">
       <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
        <tbody>
         <tr>
          <td class="esd-stripe esd-synchronizable-module" align="center">
           <table class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: transparent;" bgcolor="rgba(0, 0, 0, 0)">
            <tbody>
             <tr>
              <td class="esd-structure es-p20" align="left">
               <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                 <tr>
                  <td width="560" class="esd-container-frame" align="center" valign="top">
                   <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                     <tr>
                      <td align="center" class="esd-block-text es-infoblock"><p><a target="_blank">View online version</a></p></td>
                     </tr>
                    </tbody>
                   </table></td>
                 </tr>
                </tbody>
               </table></td>
             </tr>
            </tbody>
           </table></td>
         </tr>
        </tbody>
       </table>
       <table cellpadding="0" cellspacing="0" class="es-header" align="center">
        <tbody>
         <tr>
          <td class="esd-stripe esd-synchronizable-module" align="center">
           <table bgcolor="#ffffff" class="es-header-body" align="center" cellpadding="0" cellspacing="0" width="600">
            <tbody>
             <tr>
              <td class="esd-structure es-p10t es-p10b es-p20r es-p20l" align="left">
               <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                 <tr>
                      
                  <td width="560" class="es-m-p0r esd-container-frame" valign="top" align="center">
                      <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody><tr>
            <td align="left" class="esd-block-text">
                <h1 align="center" style="font-family:poppins,verdana,geneva,sans-serif;color:#0b5394">SemlyAI</h1>
            </td>
        </tr></tbody></table>
                  </td>
              
                      
              </tr>
                </tbody>
               </table></td>
             </tr>
            </tbody>
           </table></td>
         </tr>
        </tbody>
       </table>
       <table cellpadding="0" cellspacing="0" class="es-content" align="center">
        <tbody>
         <tr>
          <td class="esd-stripe" align="center">
           <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
            <tbody>
             <tr>
              <td class="esd-structure es-p30t es-p30b es-p20r es-p20l" align="left">
               <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                 <tr>
                  <td width="560" class="esd-container-frame" align="center" valign="top">
                   <table cellpadding="0" cellspacing="0" width="100%" style="border-style:solid;border-width:2px;border-collapse:separate">
                    <tbody>
                     <tr>
                      <td align="center" class="esd-block-image es-p10t es-p10b" style="font-size: 0px;"><a target="_blank"><img src="https://eehdkvp.stripocdn.email/content/guids/CABINET_67e080d830d87c17802bd9b4fe1c0912/images/55191618237638326.png" alt="" style="display: block;" width="100"></a></td>
                     </tr>
                     <tr>
                      <td align="center" class="esd-block-text es-p10b es-m-txt-c"><h1 style="font-size: 46px; line-height: 100%;">Confirm Your Email</h1></td>
                     </tr><tr>
            <td align="left" class="esd-block-text">
                <h2 align="center" style="line-height:200% !important">Hello ' . htmlspecialchars($_SESSION['USER']->first_name) . ',</h2>
            </td>
        </tr>
                     <tr>
                      <td align="center" class="esd-block-text es-p5t es-p5b es-p40r es-p40l es-m-p0r es-m-p0l"><p>You have received this message because your email address has been registered with our site. Please click the button below to verify your email address and confirm that you are the owner of this account.</p></td>
                     </tr>
                     <tr>
                      <td align="center" class="esd-block-text es-p10t es-p5b"><p>If you did not register with us, please disregard this email.</p></td>
                     </tr><tr>
            <td align="left" class="esd-block-text">
                <h1 align="center" style="color:#0b5394;font-family:poppins,&#39;helvetica neue&#39;,helvetica,arial,sans-serif">CLICK THE LINK BELOW TO VERIFY YOUR ACCOUNT:</h1>
            </td>
        </tr>
                     <tr>
                      <td align="center" class="esd-block-button es-p10t es-p10b"><span class="es-button-border" style="border-radius: 6px;"><h2 class="es-button" target="_blank" style="width:30%;color:white;background-color:#0b5394;border-left-width:30px;border-right-width:30px;border-radius:6px;font-family:lato,&#39;helvetica neue&#39;,helvetica,arial,sans-serif;padding:10px 30px"><a style="text-decoration:none;" href="' . ROOT . '/verify/verify_account?token=' . $token . '">Verify Email</a></h2></span></td>
                     </tr>
                     <tr>
                      <td align="center" class="esd-block-text es-p5t es-p5b es-p40r es-p40l es-m-p0r es-m-p0l"><p>Once confirmed, this email will be uniquely associated with your account.</p></td>
                     </tr>
                    </tbody>
                   </table></td>
                 </tr>
                </tbody>
               </table></td>
             </tr>
            </tbody>
           </table></td>
         </tr>
        </tbody>
       </table>
       <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
        <tbody>
         <tr>
          <td class="esd-stripe esd-synchronizable-module" align="center">
           <table class="es-footer-body" align="center" cellpadding="0" cellspacing="0" width="640" style="background-color: transparent;">
            <tbody>
             <tr>
              <td class="esd-structure es-p20t es-p20b es-p20r es-p20l" align="left">
               <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                 <tr>
                  <td width="600" class="esd-container-frame" align="left">
                   <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                     <tr>
                      <td align="center" class="esd-block-social es-p15t es-p15b" style="font-size:0">
                       <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social">
                        <tbody>
                         <tr>
                          <td align="center" valign="top" class="es-p40r"><a target="_blank" href=""><img title="Facebook" src="https://eehdkvp.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png" alt="Fb" width="32"></a></td>
                          <td align="center" valign="top" class="es-p40r"><a target="_blank" href=""><img title="X.com" src="https://eehdkvp.stripocdn.email/content/assets/img/social-icons/logo-black/x-logo-black.png" alt="X" width="32"></a></td>
                          <td align="center" valign="top" class="es-p40r"><a target="_blank" href=""><img title="Instagram" src="https://eehdkvp.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png" alt="Inst" width="32"></a></td>
                          <td align="center" valign="top"><a target="_blank" href=""><img title="Youtube" src="https://eehdkvp.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png" alt="Yt" width="32"></a></td>
                         </tr>
                        </tbody>
                       </table></td>
                     </tr>
                     <tr>
                      <td align="center" class="esd-block-text es-p35b"><p>&copy; 2024 SemlyAI, Inc. All Rights Reserved.</p></td>
                     </tr>
                     <tr>
                      <td class="esd-block-menu" esd-tmp-menu-padding="5|5" esd-tmp-divider="1|solid|#cccccc" esd-tmp-menu-color="#999999">
                       <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                        <tbody>
                         <tr>
                          <td align="center" valign="top" width="33.33%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 5px;"><a target="_blank" href="https://semly.digitaledgewebservices.com" style="color: #999999;">Visit Us </a></td>
                          <td align="center" valign="top" width="33.33%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 5px; border-left: 1px solid #cccccc;"><a target="_blank" href="https://semly.digitaledgewebservices.com" style="color: #999999;">Privacy Policy</a></td>
                          <td align="center" valign="top" width="33.33%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 5px; border-left: 1px solid #cccccc;"><a target="_blank" href="https://semly.digitaledgewebservices.com" style="color: #999999;">Terms of Use</a></td>
                         </tr>
                        </tbody>
                       </table></td>
                     </tr>
                    </tbody>
                   </table></td>
                 </tr>
                </tbody>
               </table></td>
             </tr>
            </tbody>
           </table></td>
         </tr>
        </tbody>
       </table>
       <table cellpadding="0" cellspacing="0" class="es-content esd-footer-popover" align="center">
        <tbody>
         <tr>
          <td class="esd-stripe esd-synchronizable-module" align="center">
           <table class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: transparent;" bgcolor="rgba(0, 0, 0, 0)">
            <tbody>
             <tr>
              <td class="esd-structure es-p20" align="left">
               <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                 <tr>
                  <td width="560" class="esd-container-frame" align="center" valign="top">
                   <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                     <tr>
                      <td align="center" class="esd-block-text es-infoblock"><p><a target="_blank"></a>No longer want to receive these emails?&nbsp;<a href="https://semly.digitaledgewebservices.com" target="_blank">Unsubscribe</a>.<a target="_blank"></a></p></td>
                     </tr>
                    </tbody>
                   </table></td>
                 </tr>
                </tbody>
               </table></td>
             </tr>
            </tbody>
           </table></td>
         </tr>
        </tbody>
       </table></td>
     </tr>
    </tbody>
   </table>
  </div>
 </body>
</html>';

			$mail = new Mailer();
			if ($mail->send($to, $subject, $message)) {
				// call update_verified method from Session class

				echo '<div style="width: 60%; background-color: rgba(0, 128, 0, 0.5); border-radius: 15px; box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2); color: green; padding: 10px; margin: 20px 0; text-align: center;">
        Verification email sent to ' . htmlspecialchars($to) . '. Please check your email.
      </div>';

			} else {
				echo 'Failed to send verification email.';
			}
		} else {
			echo 'User email not found.';
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
