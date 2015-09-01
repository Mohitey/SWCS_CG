<?php
/* @var $this FormvaluesController */
/* @var $model FormFieldValue */

$this->breadcrumbs=array(
	'Form Field Values'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormFieldValue', 'url'=>array('index')),
	array('label'=>'Manage FormFieldValue', 'url'=>array('admin')),
);
?>

<h1>Create FormFieldValue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>