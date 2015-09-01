<?php
/* @var $this PageController */
/* @var $model PageInfo */

$this->breadcrumbs=array(
	'Page'=>array('index'),
	'Create',
);
/*
$this->menu=array(
        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Create Page</h1>

<?php 

if(isset($error)){
	$this->renderPartial('_form', array('error'=>$error,'model'=>$model)); 
} else { 
	$this->renderPartial('_form', array('model'=>$model)); 
}?>