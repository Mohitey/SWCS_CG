<?php

class ChangepasswordController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index'),
                //'users' => array('user'), 
                'expression'=>'Utility::isSuperAdmin()',
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index'),
                'expression'=>'Utility::isAuthUser()',
            ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	    Yii::import('ext.recaptcha.recaptchalib',true);
        $publickey = PUBLIC_KEY;
        $privatekey = PRIVATE_KEY;
        $captcha=recaptcha_get_html($publickey);
        $error = array();
        if(isset($_POST['Users'])){
            $recaptcharesponsefield=Utility::sanatizeParams($_POST['recaptcha_response_field']);
            $recaptchachallengefield=$_POST["recaptcha_challenge_field"];
            $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $recaptchachallengefield,$recaptcharesponsefield);
            if ($resp->is_valid) {  
                $session = new CHttpSession;
                $session->open();
                $loginUser = Utility::sanatizeParams($session['UID']);
                $oldpwd = Utility::sanatizeParams($_POST['Users']['oldpassword']);
                $pwd = Utility::sanatizeParams($_POST['Users']['newpassword']);
                $confpwd = Utility::sanatizeParams($_POST['Users']['confirmpassword']);
                if(empty($oldpwd)) {
                    $error[] = "Old password is required";
                } elseif(empty($pwd)) {
                    $error[] = "New password is required";
                } elseif(empty($confpwd)) {
                    $error[] = "Confirm password is required";
                } elseif($pwd != $confpwd) {
                    $error[] = "New password and confirm password should be same";
                } else {
                    $password = hash_hmac('sha1', $oldpwd , PASSWORD_SALT);
                    $sql = "SELECT * FROM users WHERE uid = :uid AND password=:password";
                    $connection = Yii::app()->db;
                    $command = $connection->createCommand($sql);
                    $command->bindParam(":uid", $loginUser, PDO::PARAM_INT);
                    $command->bindParam(":password", $password, PDO::PARAM_STR);
                    $row = $command->queryRow();
                    if($row != FALSE) { 
                        
                        $newpassword = hash_hmac('sha1', $pwd , PASSWORD_SALT);
                        $model = Users::model()->findByPk($loginUser);
                        $model->password = $newpassword;
                        $model->save();
                        $this->redirect("/site/logout");
                   } else {
                     $error[] = 'Wrong Password.'; 
                   }
                }
           } else {
               $error[] = 'Invalid Captcha'; 
           }
        }
		$this->render('index',array('captcha'=>$captcha,'error'=>$error));
	}
	
	

	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Enquiry the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Enquiry::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Enquiry $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='enquiry-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
