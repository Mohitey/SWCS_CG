<?php

class ManageHomepageController extends Controller
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
		$model=new ManageHomepage;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ManageHomepage']))
		{
			$target=realpath(Yii::app()->basePath . DIRECTORY_SEPARATOR . '..') .DIRECTORY_SEPARATOR.'themes'. DIRECTORY_SEPARATOR .'SWCS'. DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR ;
			if (!move_uploaded_file($_FILES['ManageHomepage']['tmp_name']['homepage_minitster_image'], $target.$_FILES["ManageHomepage"]["name"]['homepage_minitster_image'])) {
     			  Yii::app()->user->setFlash('Error', "Error While uploading files ");
                $this->redirect('create');
			}
			$model->attributes=$_POST['ManageHomepage'];
			$model->homepage_minitster_image=CUploadedFile::getInstance($model,'homepage_minitster_image');
			if($model->save())
				$this->redirect(array('view','id'=>$model->content_id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ManageHomepage']))
		{
			$model->attributes=$_POST['ManageHomepage'];
			if(!empty($_FILES['ManageHomepage']['name']['homepage_minitster_image'])){
				$target=realpath(Yii::app()->basePath . DIRECTORY_SEPARATOR . '..') .DIRECTORY_SEPARATOR.'themes'. DIRECTORY_SEPARATOR .'SWCS'. DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR ;
				if (!move_uploaded_file($_FILES['ManageHomepage']['tmp_name']['homepage_minitster_image'], $target.$_FILES["ManageHomepage"]["name"]['homepage_minitster_image'])) {
     				Yii::app()->user->setFlash('Error', "Error While uploading files ");
                	$this->redirect($id);
				}
			unlink($target.$_POST['old_file_name']);	
			$model->homepage_minitster_image=CUploadedFile::getInstance($model,'homepage_minitster_image');
			}
			else
				$model->homepage_minitster_image=$_POST['old_file_name'];
				$model->last_updated_on=date('Y-m-d H:i:s');

			if($model->save())
				$this->redirect(array('view','id'=>$model->content_id));
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
		$dataProvider=new CActiveDataProvider('ManageHomepage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ManageHomepage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ManageHomepage']))
			$model->attributes=$_GET['ManageHomepage'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ManageHomepage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ManageHomepage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ManageHomepage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='manage-homepage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
