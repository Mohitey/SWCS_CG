<?php
/* @var $this PagecategoriesController */
/* @var $model PageCategories */

$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	'Create',
);

//$this->menu=array(
//        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
//	array('label'=>'List PageCategories', 'url'=>array('index')),
//	array('label'=>'Manage PageCategories', 'url'=>array('admin')),
//);
?>

<h1>Create PageCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>