<?php

class HomeController extends Controller {
    
    public function actionIndex(){
        $data=array();
        $data['pageName']="Homepage";
        
        $this->renderPartial('index',$data);
    }

}
?>