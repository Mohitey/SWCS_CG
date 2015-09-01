<?php
/* @var $this UserinteractionsController */
/* @var $model UserInteractions */

$this->breadcrumbs=array(
	'User Interactions'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List UserInteractions', 'url'=>array('index')),
	array('label'=>'Manage UserInteractions', 'url'=>array('admin')),
);
*/
?>

<h1>Create UserInteractions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>