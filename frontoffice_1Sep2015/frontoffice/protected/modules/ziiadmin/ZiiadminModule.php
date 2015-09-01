<?php

class ZiiadminModule extends CWebModule {

    public function init() {
        Yii::app()->theme='backend';
        //Yii::app()->theme='backoffice';
        //if( ($_SESSION['role_id']==1) || ($_SESSION['role_id']==2) ){
		//if (!Utility::isSessionValid()) {
		@session_start();		
	//.echo "<pre>"; print_r($_SESSION); exit;
	if( ($_SESSION['ROLE_ID']!=1) && ($_SESSION['ROLE_ID']!=2) ) {	            
            $url=URL;
            header("Location: $url");
            exit;
        }
        
        
        // this method is called when the module is being created
        // you may place code here to customize the module or the application
        // import the module-level models and components
        $this->setImport(array(
            'ziiadmin.models.*',
            'ziiadmin.components.*',
        ));
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        } else
            return false;
    }

}
