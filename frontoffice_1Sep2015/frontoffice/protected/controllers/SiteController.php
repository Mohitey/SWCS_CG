<?php

class SiteController extends Controller {

	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array(
		// captcha action renders the CAPTCHA image displayed on the contact page
		'captcha' => array('class' => 'CCaptchaAction', 'backColor' => 0xFFFFFF, ),
		// page action renders "static" pages stored under 'protected/views/site/pages'
		// They can be accessed via: index.php?r=site/page&view=FileName
		'page' => array('class' => 'CViewAction', ), );
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->render('index');
		$this -> redirect($this -> createUrl("//home"));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
		if ($error = Yii::app() -> errorHandler -> error) {
			if (Yii::app() -> request -> isAjaxRequest)
				echo $error['message'];
			else
				$this -> render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact() {
		die("NO NO NO ... ");
		$model = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$model -> attributes = $_POST['ContactForm'];
			if ($model -> validate()) {
				$name = '=?UTF-8?B?' . base64_encode($model -> name) . '?=';
				$subject = '=?UTF-8?B?' . base64_encode($model -> subject) . '?=';
				$headers = "From: $name <{$model->email}>\r\n" . "Reply-To: {$model->email}\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app() -> params['adminEmail'], $subject, $model -> body, $headers);
				Yii::app() -> user -> setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this -> refresh();
			}
		}
		$this -> render('contact', array('model' => $model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin() { 
		//Utility::isSuperAdmin();
		if (Utility::isSessionValid()) {
			@session_start();
			if( ($_SESSION['ROLE_ID']==1) || ($_SESSION['ROLE_ID']==2) ){
				$url = Yii::app() -> baseUrl . "/ziiadmin";
				header("Location: $url");
				exit ;
			}
			else{
				$url = URL;
				header("Location: $url");
				exit ;
			}
		}
		$error = "";
		$model = new LoginForm;
		//Yii::app() -> theme = 'backend';
		
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}

		Yii::import('ext.recaptcha.recaptchalib', true);		

		$publickey = PUBLIC_KEY;
		$privatekey = PRIVATE_KEY;

		$captcha = recaptcha_get_html($publickey);
		$user = $error = "";
		// collect user input data
		if (isset($_POST['LoginForm'])) {

			if ($_POST['YII_CSRF_TOKEN'] != Yii::app() -> request > csrfToken) {
				throw new CHttpException(400, 'Invalid Request or Expired CSRF Token');
				exit ;
			}
			
			$recaptcha_response_field = Utility::sanatizeParams($_POST['recaptcha_response_field']);
			$recaptcha_challenge_field = $_POST["recaptcha_challenge_field"];
           
            
			$secret = INPUT_ENCRIPTION_KEY;
			//$value  = Phpencodeformcontents::decodeDataArray($secret,$_POST);
			$value = Phpencodeformcontents::decodeAesDataArray($secret, $_POST);
			 
			$_POST['recaptcha_response_field'] = $value['recaptcha_response_field'];
            
            
			//$_POST['LoginForm']= Phpencodeformcontents::decodeDataArray($secret,$_POST['LoginForm']);
			$_POST['LoginForm'] = Phpencodeformcontents::decodeAesDataArray($secret, $_POST['LoginForm']);
			$_POST['LoginForm'] = Utility::sanatizeParams($_POST['LoginForm']);

			$user = Utility::sanatizeParams($_POST['LoginForm']['username']);
			$user = preg_replace('/[^A-Za-z0-9@.\-\(\) ]/', '', $user);

			$passwd = Utility::sanatizeParams($_POST['LoginForm']['password']);

			if (empty($user)) {
				$error .= "<li>Please provide Username</li>";
			} elseif (empty($passwd)) {
				$error .= "<li>Please enter the Password</li>";
			} else {
				//echo $recaptcha_challenge_field."====".$recaptcha_response_field; die;
				$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $recaptcha_challenge_field, $recaptcha_response_field);
				if ($resp -> is_valid) {
					$model -> attributes = $_POST['LoginForm'];
					if ($model -> isAuthUser($user, $passwd)) {
						if ($model -> isActiveAuthUser($user, $passwd)) {
							//echo "$user ======".$_POST['redirect']; die;
							if ($user == "admin@localhost.com") { 
								$this -> redirect($_POST['redirect']);
							} else {
								$redirect=@$_COOKIE['redirect'];
								if(empty($redirect)){
									$redirect="/home";
								}
								$this -> redirect($redirect);
							}
						} else {
							$error .= "<li>Account not activated.</li>";
						}
					} else {
						$error .= "<li>Invalid Username or Password</li>";
					}
				} else {
					$error .= "<li>Invalid CAPTCHA</li>";
				}
			}
		}
		// display the login form
		$this -> render('ziilogin', array('model' => $model, 'user' => $user, 'captcha' => $captcha, 'error' => $error));
	}
	

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		//Yii::app()->user->logout();
		//$this->redirect(Yii::app()->homeUrl);
		$session = new CHttpSession;
		$session -> open();

		//Logout local session/cookie
		Yii::app() -> user -> logout();
		$session -> destroy();
		unset(Yii::app() -> request -> cookies['PHPSESSID']);
		unset(Yii::app() -> request -> cookies['swcscms_cookie']);
		//$this->redirect(Yii::app()->homeUrl);
		$url = Yii::app() -> baseUrl . "/site/login";
		$this -> redirect($url);
	}

}
