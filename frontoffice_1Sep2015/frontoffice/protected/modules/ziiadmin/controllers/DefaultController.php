<?php
class DefaultController extends Controller {

    public function actionIndex() { 
		Utility::isSuperAdmin();
        //$error = Yii::app()->errorHandler->error;
        //$this->render('index',$error);
         
        $data=array();
        
        $share=$this->getImage("share");
		$public=$this->getImage("public");
		
		if($share===FALSE){
			$share="images/1.png";	
		}
		if($public===FALSE){
			$public="images/1.png";	
		}
		
		$data['share']=$share; 
		$data['public']=$public;
		$data['delshare']=$this->createUrl("/ziiadmin/default/delete/item/s");
		$data['delpublic']=$this->createUrl("/ziiadmin/default/delete/item/p");
		
		//echo "<pre> DEBUG:"; print_r($data); exit;
	
		if(isset($_POST['save'])){
			//echo "<pre> DEBUG:"; print_r($_FILES); exit;
			
			foreach ($_FILES as $name=>$file) {
				$destination="thumb.jpg";
				
				if($name=='publicsuggestions'){
					if($file['error']==0){
						$this->cleanDir("public");
						move_uploaded_file($file['tmp_name'], "images/public/".$destination);
					}
				}
				else{
					if($file['error']==0){
						$this->cleanDir("share");
						move_uploaded_file($file['tmp_name'], "images/share/".$destination);
					}
				}
			}
		}
		
        $this->render('index',$data);
    }
	
	public function actionDelete() {
		if(isset($_GET['item'])){
			$item=trim($_GET['item']);
			
			if($item=="p"){
				$this->cleanDir("public");
			}
			elseif($item=="s"){
				$this->cleanDir("share");
			}			
		}
		$this->redirect($this->createUrl('/ziiadmin/default'));
	}
	
	private function getImage($type="share"){
		if($type=="share"){
			$dir="images/share";
		}
		else{
			$dir="images/public";
		}
		
		if ($dh = opendir($dir)) {
	        while (($file = readdir($dh)) !== false) {
	        	if($file!="." && $file!=".."){
	            	return $dir ."/". $file;
				}
	        }
	        closedir($dh);
	    }
		return FALSE;
	}
	
	private function cleanDir($type="share"){
		if($type=="share"){
			$dir="images/share";
		}
		else{
			$dir="images/public";
		}
		
		if ($dh = opendir($dir)) {
	        while (($file = readdir($dh)) !== false) {
	        	if($file!="." && $file!=".."){
	            	unlink($dir ."/". $file);
				}
	        }
	        closedir($dh);
	    }
		return FALSE;
	}
	
	/**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
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
                'actions' => array('delete', 'index'),
                //'users' => array('admin'),
                'expression' => 'Utility::isSuperAdmin()',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
	
}
