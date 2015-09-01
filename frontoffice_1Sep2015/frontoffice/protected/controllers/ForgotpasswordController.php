<?php

class ForgotpasswordController extends Controller {
	
	private function rand_string( $length ) {

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,$length);

    }
    
  
    
    public function actionIndex() {
        Yii::import('ext.recaptcha.recaptchalib',true);
        $publickey = PUBLIC_KEY;
        $privatekey = PRIVATE_KEY;
        $captcha=recaptcha_get_html($publickey);
        
        
        if(isset($_POST['email'])){        
            if ($_POST['YII_CSRF_TOKEN'] != Yii::app()->request>csrfToken) {
                throw new CHttpException(400, 'Invalid Request or Expired CSRF Token');
                exit;
            } 
            
            //echo "+++++++++++<pre>"; print_r($_POST); 
            $error = array();     
            $secret = INPUT_ENCRIPTION_KEY;
            $recaptcharesponsefield=Utility::sanatizeParams($_POST['recaptcha_response_field']);
            $recaptchachallengefield=$_POST["recaptcha_challenge_field"];
            
            $_POST  = Phpencodeformcontents::decodeAesDataArray($secret,$_POST);
            $post = Utility::sanatizeParams($_POST);
            //echo "<hr /><pre>"; print_r($_POST); print_r($post); exit;
            
            if(empty($post['email'])) {
                $error[] = 'Email is required';
            } elseif(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = "E-mail is not valid";
            } elseif(count($error) > 0) {
                   $this->render("index",array("error"=>$error));
            } else {
                $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $recaptchachallengefield,$recaptcharesponsefield);
                if ($resp->is_valid) {  
				   $emailInfo = Utility::isValidEmail($post['email']);
					if ($emailInfo != FALSE) { 
					    $ForgotPassword = new ForgotPassword;
						$_POST['forgotPassword']['uid'] = $emailInfo['uid'];
						$randPass = $this->rand_string(8);
                        $_POST['forgotPassword']['pass_code'] = $randPass;
                        $_POST['forgotPassword']['time_stamp'] = strtotime(date('Y-m-d h:i:s'));
						$ForgotPassword->attributes = $_POST['forgotPassword'];
						$isValidated = $ForgotPassword->validate();
                        $renderData = array();
                        if (!$isValidated) {
                            $allError = $ForgotPassword->getErrors();
                            foreach ($allError as $errorValue) {
                                foreach ($errorValue as $Val) {
                                    $error[] = $Val;
                                }
                            }
                            $this->render("index",array("error"=>$error,'captcha'=>$captcha,'email'=>$email));
                        } else {                   
                            //send email
                            $hmac = sha1($emailInfo['uid'].'__'.$randPass.'__'.SECRETKEY);                            
                            $activationLink = URL."/resetpassword/index/ucode/".$randPass.'/hmac/'.$hmac;
                            $email = $emailInfo['email'];
							$activation_link=$activationLink;
							
							$message="<b>Activate your account</b>";
							$message.="Please click on the following link to activate your account: ";
							
							$userName =" ";
							$params=array();
							$params['userName']=$userName;
							$params['activation_link']=$activation_link;
							$params['cmo_portal']="CMO Portal :: Haryana";
							$params['message']=$message;
							
							$content=$this->renderPartial("message",$params,true);
							
							
							
                            Yii::import('application.extensions.phpmailer.JPhpMailer');
                            $mail = new JPhpMailer;
                            $mail->IsSMTP(true);
                            $mail->SMTPDebug = 1;
                            $mail->SMTPSecure = 'ssl';
                            $mail->Host = SMTP_HOST;
                            $mail->Port = SMTP_PORT;
                            $mail->SMTPAuth = true;
                            $mail->Username = SMTP_USER;
                            $mail->Password = SMTP_PASSWORD;
                            $mail->SetFrom(SMTP_USER);
                                                 
							$mail->SetFrom(SMTP_USER,'CMO :: Admin');
							$mail->Subject='Forgot Password :: CMO Admin';
							$mail->AltBody='To view the message, please use an HTML compatible email viewer!';
							$mail->MsgHTML($content);
							$mail->AddAddress($email);
							
							
                            /*$mail->AddAddress($to);
                            $mail->Subject = 'Haryana Industries :: Reset Password';
                            $mail->MsgHTML("<h1>Haryana Industries :: Reset your password</h1> 
                                                Click <a href='$activationLink'><button>here</button></a> OR open following link to reset your password: <br /> $activationLink");
                            
							*/ 
							 if (!$mail->Send()) {
                                //echo "=> " . $mail->ErrorInfo;
                                //exit;
                              $error[] = "Mail could not be sent...";
                              $this->render("index",array("error"=>$error,'captcha'=>$captcha,'email'=>$email));
                            } else {
                                $ForgotPassword->save();
                                $success = 'Password has been sent to your email.';
                                $this->render("index",array("success"=>$success,'captcha'=>$captcha,'email'=>$post['email']));
                            }
                      }                                               
					} else {
					    $error[] = "Invalid Email";
                        $this->render("index",array("error"=>$error,'captcha'=>$captcha,'email'=>$email));
					}                
                       
                } else {
                	$email = $post['email'];
                    $error[] = "Invalid Captcha";
                    $this->render("index",array("error"=>$error,'captcha'=>$captcha,'email'=>$email));
                }
          }
        }
        else{
           $htmlCode = $this->render("index",array('captcha'=>$captcha), false);
           $htmlCode = preg_replace('#(?ix)(?>[^\S ]\s*|\s{2,})(?=(?:(?:[^<]++|<(?!/?(?:textarea|pre)\b))*+)(?:<(?>textarea|pre)\b|\z))#', ' ', $htmlCode);
        echo $htmlCode;
        }
    }
}
