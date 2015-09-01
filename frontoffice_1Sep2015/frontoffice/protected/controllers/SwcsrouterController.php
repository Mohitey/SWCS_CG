<?php

/**
 * Class to render the pages created in the database based on the keyword in the URL
 */
class SwcsrouterController extends Controller {

    public $keywords = "";
    public $description = "";
    public $stub = "";

    public function actionIndex() {

       

        $error = Yii::app()->errorHandler->error;
        if ($error) {
            $code = $error['code'];
            if ($code == 404) {
                $url = $error['traces'][0]['args'][0];
                $PATH_INFO = explode("/", $url);
                $tag = implode("/", $PATH_INFO);
                $data = array();
                if (Utility::getContentFromStub($tag) === FALSE) {
                    $this->render('//site/error', $error);
                    exit;
                } else {
                    if (isset($_COOKIE['langId'])) {
                        if ($_COOKIE['langId'] != 0) {
                            $langId = $_COOKIE['langId'];
                        } else {
                            $langId = "";
                        }
                    } else {
                        $langId = "";
                    }
                    $pageInfo = Utility::getContentFromStub($tag);
                    //$data['page_content'] = Utility::getBodyContent($pageInfo['page_content']);
                    $pageContent = $pageInfo['page_content' . $langId];
                    if (empty($pageContent)) {
                        $pageContent = $pageInfo['page_content'];
                    }
					$data['page_name'] = $pageInfo['page_name' . $langId];;
                    $data['page_content'] = $pageContent;
                    $this->keywords = $pageInfo['page_keywords'];
                    $this->description = $pageInfo['page_desc'];
                    $this->stub = ucwords(end($PATH_INFO));
                }
                 //Set no caching
                header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
                header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
                header("Cache-Control: no-store, no-cache, must-revalidate"); 
                header("Cache-Control: post-check=0, pre-check=0", false);
                header("Pragma: no-cache");
                
                $htmlCode = $this->render("//home/detail", $data, false);
                $htmlCode = preg_replace('#(?ix)(?>[^\S ]\s*|\s{2,})(?=(?:(?:[^<]++|<(?!/?(?:textarea|pre)\b))*+)(?:<(?>textarea|pre)\b|\z))#', ' ', $htmlCode);
        echo $htmlCode;
            }
        }
    }

}

?>
