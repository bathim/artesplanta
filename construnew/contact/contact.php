 <?php
 /*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

  include 'config.php';
  require_once('recaptchalib.php');
  $privatekey = "6Ldlev4SAAAAAIfb05lt_jdKwwaWooTUMfQ7UpoQ";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("La respuesta del reCAPTCHA es incorrecta. Por favor Regrese a la pagina anterior trate de nuevo." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
    error_reporting (E_ALL ^ E_NOTICE);
    $post = (!empty($_POST)) ? true : false;
    if($post)
    	{
        $name = stripslashes($_POST['name']);
        $email = trim($_POST['email']);
        $subject = stripslashes($_POST['subject']);
        $message = stripslashes($_POST['message']);
        $error = '';
    		if(!$error)
    			{
    				$mail = mail(WEBMASTER_EMAIL, $subject, $message,
    					"From: ".$name." <".$email.">\r\n"
    					."Reply-To: ".$email."\r\n"
    					."X-Mailer: PHP/" . phpversion());
    				if($mail)
    					{
    						echo 'OK';
    					}
    				}
    			}
    		}
  ?>