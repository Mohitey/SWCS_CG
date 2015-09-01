<?php
/* @var $this FormfieldsController */
/* @var $model FormFieldName */

$this->breadcrumbs=array(
	'Form Field Names'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List FormFieldName', 'url'=>array('index')),
	array('label'=>'Manage FormFieldName', 'url'=>array('admin')),
);*/
?>

<h1>Create Form Field</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>