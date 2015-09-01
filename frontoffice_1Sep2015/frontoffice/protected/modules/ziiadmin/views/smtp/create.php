<?php
/* @var $this SmtpController */
/* @var $model Smpt */

$this->breadcrumbs=array(
	'Smpts'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Smpt', 'url'=>array('index')),
	array('label'=>'Manage Smpt', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Create SMTP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>