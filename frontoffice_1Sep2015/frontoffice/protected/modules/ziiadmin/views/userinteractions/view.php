<?php
/* @var $this UserinteractionsController */
/* @var $model UserInteractions */

$this->breadcrumbs=array(
	'User Interactions'=>array('index'),
	$model->msg_id,
);
/*
$this->menu=array(
	array('label'=>'List UserInteractions', 'url'=>array('index')),
	array('label'=>'Create UserInteractions', 'url'=>array('create')),
	array('label'=>'Update UserInteractions', 'url'=>array('update', 'id'=>$model->msg_id)),
	array('label'=>'Delete UserInteractions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->msg_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserInteractions', 'url'=>array('admin')),
);
*/
?>

<h1>View UserInteractions #<?php echo $model->msg_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'msg_id',
		'user_id',
		'message',
		'attachment',
		'msg_type',
		'added_date',
		'is_active',
	),
)); ?>
