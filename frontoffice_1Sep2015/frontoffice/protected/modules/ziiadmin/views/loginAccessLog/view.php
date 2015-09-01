<?php
/* @var $this LoginAccessLogController */
/* @var $model LoginAccessLog */

$this->breadcrumbs=array(
	'Login Access Logs'=>array('index'),
	$model->log_id,
);

$this->menu=array(
	array('label'=>'List LoginAccessLog', 'url'=>array('index')),
	array('label'=>'Create LoginAccessLog', 'url'=>array('create')),
	array('label'=>'Update LoginAccessLog', 'url'=>array('update', 'id'=>$model->log_id)),
	array('label'=>'Delete LoginAccessLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->log_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LoginAccessLog', 'url'=>array('admin')),
);
?>

<h1>View LoginAccessLog #<?php echo $model->log_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'log_id',
		'uid',
		'time_stamp',
		'date_time',
	),
)); ?>
