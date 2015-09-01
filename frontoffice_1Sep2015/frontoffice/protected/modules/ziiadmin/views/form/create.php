<?php
/* @var $this FormController */
/* @var $model FormInfo */

$this->breadcrumbs=array(
	'Form Infos'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List FormInfo', 'url'=>array('index')),
//	array('label'=>'Manage FormInfo', 'url'=>array('admin')),
//);
?>

<h1>Create Form </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>