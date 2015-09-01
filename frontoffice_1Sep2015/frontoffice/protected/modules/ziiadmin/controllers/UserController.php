<?php

class UserController extends Controller {

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
                //'users' => array('admin'),
                'expression'=>'Utility::isSuperAdmin()',
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
        $model = new Users;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $error = "";
            $_POST['Users']=  Utility::sanatizeParams($_POST['Users']); 
            $pwd = $_POST['Users']['password'];
            $regexp = '#^.*(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^0-9a-zA-Z]).*$#';
            $regexp2 = '#^.*(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$#';
            
            if(preg_match($regexp, $pwd) === 0 && preg_match($regexp2, $pwd) === 0 && strlen($pwd) < 7) { 
               $error =  "<span style='color:red'>Weak</span> password!";
               $htmlCode = $this->render('create', array(
                    'model' => $model,
                    'error' =>$error,
                ),true);
                $htmlCode = preg_replace('#(?ix)(?>[^\S ]\s*|\s{2,})(?=(?:(?:[^<]++|<(?!/?(?:textarea|pre)\b))*+)(?:<(?>textarea|pre)\b|\z))#', ' ', $htmlCode);
                echo $htmlCode;
                die;
            } 
                     
            $_POST['Users']['created_datetime']=date('Y-m-d H:i:s');
            if(!empty($_POST['Users']['password'])){
                $_POST['Users']['password']=hash_hmac('sha1', $_POST['Users']['password'] , PASSWORD_SALT);
            }
            if(!filter_var($_POST['Users']['email'], FILTER_VALIDATE_EMAIL)){
                $_POST['Users']['email']="";
            }            
            $model->attributes = $_POST['Users'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->uid));
        }

        $htmlCode = $this->render('create', array(
            'model' => $model,
        ),true);
         $htmlCode = preg_replace('#(?ix)(?>[^\S ]\s*|\s{2,})(?=(?:(?:[^<]++|<(?!/?(?:textarea|pre)\b))*+)(?:<(?>textarea|pre)\b|\z))#', ' ', $htmlCode);
        echo $htmlCode;
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $_POST['Users']=  Utility::sanatizeParams($_POST['Users']);            
            $_POST['Users']['created_datetime']=date('Y-m-d H:i:s');
            if(!empty($_POST['Users']['password'])){
                $_POST['Users']['password']=hash_hmac('sha1', $_POST['Users']['password'] , PASSWORD_SALT);
            }
            if(!filter_var($_POST['Users']['email'], FILTER_VALIDATE_EMAIL)){
                $_POST['Users']['email']="";
            }  
            $model->attributes = $_POST['Users'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->uid));
        }

        $htmlCode = $this->render('update', array(
            'model' => $model,
        ),true);
         $htmlCode = preg_replace('#(?ix)(?>[^\S ]\s*|\s{2,})(?=(?:(?:[^<]++|<(?!/?(?:textarea|pre)\b))*+)(?:<(?>textarea|pre)\b|\z))#', ' ', $htmlCode);
        echo $htmlCode;
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
        $dataProvider = new CActiveDataProvider('Users');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Users('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Users']))
            $model->attributes = $_GET['Users'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Users the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Users::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Users $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
