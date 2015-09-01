<?php

class HomepageSliderController extends Controller
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
                'actions' => array('admin','create', 'update','index', 'view'),
                //'users' => array('user'), 
                'expression'=>'Utility::isSuperAdmin()',
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'update','index', 'view','create'),
                'expression'=>'Utility::isAuthUser()',
            ),
            array('deny', // deny all users
                'users' => array('*'),
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
		$model=new HomepageSlider;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HomepageSlider']))
		{
			$target=realpath(Yii::app()->basePath . DIRECTORY_SEPARATOR . '..') .DIRECTORY_SEPARATOR.'themes'. DIRECTORY_SEPARATOR .'SWCS'. DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR .'slider'. DIRECTORY_SEPARATOR;
			if (!move_uploaded_file($_FILES['HomepageSlider']['tmp_name']['image_path'], $target.$_FILES["HomepageSlider"]["name"]['image_path'])) {
     			  Yii::app()->user->setFlash('Error', "Error While uploading files ");
                $this->redirect('create');
			}
			$model->attributes=$_POST['HomepageSlider'];
			$model->image_path=CUploadedFile::getInstance($model,'image_path');
			if($model->save())
				$this->redirect(array('view','id'=>$model->image_id));
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

		if(isset($_POST['HomepageSlider']))
		{
			$model->attributes=$_POST['HomepageSlider'];
			if(!empty($_FILES['ManageHomepage']['name']['image_path'])){
			$target=realpath(Yii::app()->basePath . DIRECTORY_SEPARATOR . '..') .DIRECTORY_SEPARATOR.'themes'. DIRECTORY_SEPARATOR .'SWCS'. DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR .'slider'. DIRECTORY_SEPARATOR;
			if (!move_uploaded_file($_FILES['HomepageSlider']['tmp_name']['image_path'], $target.$_FILES["HomepageSlider"]["name"]['image_path'])) {
     			  Yii::app()->user->setFlash('Error', "Error While uploading files ");
                $this->redirect($id);
			}																																					
			unlink($target.$_POST['old_file_name']);
			$model->image_path=CUploadedFile::getInstance($model,'image_path');
		}
		else
			$model->image_path=$_POST['old_file_name'];
		$model->updated_date=date('Y-m-d H:i:s');
			/*die("hjerer	");*/
			if($model->save())
				$this->redirect(array('view','id'=>$model->image_id));
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
		$dataProvider=new CActiveDataProvider('HomepageSlider');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HomepageSlider('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HomepageSlider']))
			$model->attributes=$_GET['HomepageSlider'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HomepageSlider the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HomepageSlider::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HomepageSlider $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='homepage-slider-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
