<?php

class AboutController extends Controller {
    
    public function actionIndex(){
        $data=array();
        
        $this->render('index',$data);
    }

}
?>