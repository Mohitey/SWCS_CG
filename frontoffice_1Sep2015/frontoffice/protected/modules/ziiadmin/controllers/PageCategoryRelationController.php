<?php

class PageCategoryRelationController extends Controller
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
                            'actions' => array('admin','adminnew','create', 'update','index', 'view'),
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
		$model=new PageCategoryRelation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PageCategoryRelation']))
		{
			$model->attributes=$_POST['PageCategoryRelation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->relation_id));
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

		if(isset($_POST['PageCategoryRelation']))
		{
			$model->attributes=$_POST['PageCategoryRelation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->relation_id));
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
		$dataProvider=new CActiveDataProvider('PageCategoryRelation');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdminold()
	{
		$model=new PageCategoryRelation('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PageCategoryRelation']))
			$model->attributes=$_GET['PageCategoryRelation'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
	    $filtersForm = new FiltersForm;
        if (isset($_GET['FiltersForm'])) {
            $filtersForm->filters = $_GET['FiltersForm'];
        }

		$connection = Yii::app()->db;
        $sql = "SELECT bo_page_category_relation .*, bo_page_categories .*, bo_page_info.page_name  FROM bo_page_category_relation 
            INNER JOIN bo_page_info
            ON bo_page_info.page_id=bo_page_category_relation.page_id
            INNER JOIN bo_page_categories
            ON bo_page_categories.pcat_id=bo_page_category_relation.cat_id
            WHERE bo_page_info.is_active = 1 "; 
        $command = $connection->createCommand($sql);
        $command->execute();
        $allResults = $command->queryAll();
        $filteredData = $filtersForm->filter($allResults);
        $dataProvider = new CArrayDataProvider($filteredData, array(
                    'keyField' => false,
                    'sort' => array(
                        'attributes' => array(
                            'relation_id',
                            'page_id',
                            'cat_id',
                            'page_name',
                            'page_order',
                            'is_active'
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 20,
                    ),
                ));
        //echo "<pre>"; print_r($allResults); die;
        $this->render('admin', array('dataProvider' => $dataProvider, 'filtersForm' => $filtersForm,));
        
        //echo "<pre>"; print_r($rows); die;
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PageCategoryRelation the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PageCategoryRelation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PageCategoryRelation $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='page-category-relation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
