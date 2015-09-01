<?php

class PageController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
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
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new PageInfo;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['PageInfo'])) {
		
			if(!empty($_POST['PageInfo']['page_stub'])) {
			    $pageId = "";
				$total = Utility::checkStub($_POST['PageInfo']['page_stub'],$pageId);
				if($total >0 ) {
					$this->render('create', array(
						'model' => $model,
						'error' => 'Stub name already exist',
					));
				}
			}
			
            $_POST['PageInfo']['is_active'] = decbin($_POST['PageInfo']['is_active']);
            $_POST['PageInfo']['page_content'] = Utility::getBodyContent($_POST['PageInfo']['page_content']);
            if(isset($_POST['PageInfo']['page_content1'])) {
                $_POST['PageInfo']['page_content1'] = Utility::getBodyContent($_POST['PageInfo']['page_content1']);
            }
            if(isset($_POST['PageInfo']['page_content2'])) {
                $_POST['PageInfo']['page_content2'] = Utility::getBodyContent($_POST['PageInfo']['page_content2']);
            }
            if(isset($_POST['PageInfo']['page_content3'])) {
                $_POST['PageInfo']['page_content3'] = Utility::getBodyContent($_POST['PageInfo']['page_content3']);
            }
            if(isset($_POST['PageInfo']['page_content4'])) {
                $_POST['PageInfo']['page_content4'] = Utility::getBodyContent($_POST['PageInfo']['page_content4']);
            }
			$pcatlist = $_POST['PageInfo']['pcat_id'];
			$_POST['PageInfo']['pcat_id'] = $pcatlist[0];
            $model->attributes = $_POST['PageInfo'];
            if ($model->save()) {
				$lastPageId = Utility::getLastInsertedPageId($_POST['PageInfo']['page_stub']);
				//$lastOrderNumber = 1;
				//$i = 1;
				foreach($pcatlist as $k=>$v){
					$lastOrderNumber = Utility::getLastOrderNumber($v);
					
					$sql = "insert into bo_page_category_relation (page_id,cat_id,page_order,is_active) values (:page_id,:cat_id,:page_order,:is_active)";
					$lastOrderNumber += 1;
					$parameters = array(":page_id"=>$lastPageId,":cat_id"=>$v,":page_order"=>$lastOrderNumber,":is_active"=>'1');
					Yii::app()->db->createCommand($sql)->execute($parameters);	
					//$i++;
				}
                $this->redirect(array('view', 'id' => $model->page_id));
           }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        if (!Utility::isSuperAdmin()) { 
            if(!empty($_SESSION['PAGE_IDS'])) {
	            $pageIds = $_SESSION['PAGE_IDS']; 
	            $pageIds = trim($pageIds,","); 
	            $idsArray = explode(",",$pageIds);
	            if(!in_array($id,$idsArray)){
	                $this->redirect("/ziiadmin");
	            }
	        }
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['PageInfo'])) {
			if(!empty($_POST['PageInfo']['page_stub'])) {
				$total = Utility::checkStub($_POST['PageInfo']['page_stub'],$id);
				if($total >0 ) {
					$this->render('create', array(
						'model' => $model,
						'error' => 'Stub name already exist',
					));
				}
			}
			
            $_POST['PageInfo']['is_active'] = decbin($_POST['PageInfo']['is_active']);
            $_POST['PageInfo']['page_content'] = Utility::getBodyContent($_POST['PageInfo']['page_content']);
            //echo "<pre>"; print_r($_POST['PageInfo']); die;
            if(isset($_POST['PageInfo']['page_content1'])) {
                $_POST['PageInfo']['page_content1'] = Utility::getBodyContent($_POST['PageInfo']['page_content1']);
            }
            if(isset($_POST['PageInfo']['page_content2'])) {
                $_POST['PageInfo']['page_content2'] = Utility::getBodyContent($_POST['PageInfo']['page_content2']);
            }
            if(isset($_POST['PageInfo']['page_content3'])) {
                $_POST['PageInfo']['page_content3'] = Utility::getBodyContent($_POST['PageInfo']['page_content3']);
            }
            if(isset($_POST['PageInfo']['page_content4'])) {
                $_POST['PageInfo']['page_content4'] = Utility::getBodyContent($_POST['PageInfo']['page_content4']);
            }
            
            $model->attributes = $_POST['PageInfo'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->page_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('PageInfo');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new PageInfo('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['PageInfo']))
            $model->attributes = $_GET['PageInfo'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return PageInfo the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = PageInfo::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param PageInfo $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'page-info-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
