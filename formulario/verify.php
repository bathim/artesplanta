 <?php
 /*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

  include 'config.php';
  require_once('recaptchalib.php');
  $privatekey = "6LdmnPwSAAAAAPhIOZxDV96o2o7-VVuKFeFWShlx";
  error_reporting (E_ALL ^ E_NOTICE);
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
  $post = (!empty($_POST)) ? true : false;
  $name = stripslashes($_POST['name']);
    		$email = trim($_POST['email']);
    		$subject = stripslashes($_POST['subject']);
    		$message = stripslashes($_POST['message']);
    		$error = '';

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
    if($post)
    	{
    		if(!$error)
    			{
    				$mail = mail(WEBMASTER_EMAIL, $subject, $message,
    					"From: ".$name." <".$email.">\r\n"
    					."Reply-To: ".$email."\r\n"
    					."X-Mailer: PHP/" . phpversion());
    				if($mail)
    					{
    						echo 'OK';
    						echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    					}
    				}
    			}
    		}
  ?>