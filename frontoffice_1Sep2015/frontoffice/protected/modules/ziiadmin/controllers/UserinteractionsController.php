<?php

class UserinteractionsController extends Controller
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
                            'actions' => array('admin', 'create', 'update','index', 'view'),
                            //'users' => array('admin'),
                            'expression'=>'Utility::isSuperAdmin()',
                        ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new UserInteractions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserInteractions']))
		{
			$model->attributes=$_POST['UserInteractions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->msg_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		//echo "<pre>"; print_r($_FILES); die;
		if(isset($_FILES['attachments'])) {
			$attachment="";
			
			if($_FILES['attachments']['error']['0']==0){
				$source=$_FILES['attachments']['tmp_name']['0'];
				$attachment= "./themes/backend/uploads/userinteractions/".time().$_FILES['attachments']['name']['0'];
				//$attachment=ROOT_DIR.$destination;
				if(!move_uploaded_file($source, $attachment)) {
					//echo "<pre>"; print_r(error_get_last()); die;
				} 
			}
		}
		//echo "<pre>"; print_r($_FILES); die;
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserInteractions']))
		{
			$msg_id=$_POST['UserInteractions']['msg_id'];
			$remarks=$_POST['UserInteractions']['remarks'];
			$reply_to=$_POST['UserInteractions']['reply_to'];
			$userid=$_POST['UserInteractions']['userid']; 
			if(empty($userid)){ $userid=1;}
			
			$userEmail=Users::model()->findByPk($reply_to)->email;
			$userName=Users::model()->findByPk($reply_to)->full_name;
			
			$userInteractions=new UserInteractions();
			$userInteractions->user_id=$userid;
			$userInteractions->msg_to=$reply_to;
			$userInteractions->attachment=$attachment;
			$userInteractions->message=$remarks;
			$userInteractions->subject="REPLY";
			$userInteractions->msg_type="interaction";
			$userInteractions->added_date=date("Y-m-d H:i:s");
			$userInteractions->save();
			
			//Send Email
			Yii::import('ext.phpmailer.JPhpMailer');
			$mail=new JPhpMailer;
			$mail->IsSMTP();
			$mail->Host=SMTP_HOST;
			$mail->SMTPAuth=true;
			$mail->Username=SMTP_USER;
			$mail->Password=SMTP_PASSWORD;
			$mail->SetFrom(SMTP_USER,SHARE_IDEA_EMAIL_NOTICE);
			$mail->Subject='Reply from CM Office';
			$mail->AltBody='To view the message, please use an HTML compatible email viewer!';
			$mail->MsgHTML($remarks);
			$mail->AddAttachment($attachment);      // attachment
			$mail->AddAddress($userEmail,$userName);
			$mail->Send();
			
			$_POST['UserInteractions']=array();
			$_POST['UserInteractions']['is_active']=0;
			
			$model->attributes=$_POST['UserInteractions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->msg_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('UserInteractions');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UserInteractions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserInteractions']))
			$model->attributes=$_GET['UserInteractions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UserInteractions the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UserInteractions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserInteractions $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-interactions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
