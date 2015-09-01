<?php
/* @var $this UserinteractionsController */
/* @var $model UserInteractions */

$this->breadcrumbs=array(
	'Shared Idea'=>array('index'),
	$model->msg_id=>array('view','id'=>$model->msg_id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List UserInteractions', 'url'=>array('index')),
	array('label'=>'Create UserInteractions', 'url'=>array('create')),
	array('label'=>'View UserInteractions', 'url'=>array('view', 'id'=>$model->msg_id)),
	array('label'=>'Manage UserInteractions', 'url'=>array('admin')),
);
*/
?>

<h1>Read Shared Idea</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>