<?php

class FilemanagerController extends Controller
{
	public function actionIndex()
	{
		Yii::app()->theme='backend';
		$this->render('index');
	}

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
                'actions' => array('index'),
                //'users' => array('user'),
                'expression'=>'Utility::isSuperAdmin()',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
}
