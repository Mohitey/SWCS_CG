<?php
/* @var $this SmtpController */
/* @var $model Smpt */

$this->breadcrumbs=array(
	'Smpts'=>array('index'),
	$model->sid,
);
/*
$this->menu=array(
	array('label'=>'List Smpt', 'url'=>array('index')),
	array('label'=>'Create Smpt', 'url'=>array('create')),
	array('label'=>'Update Smpt', 'url'=>array('update', 'id'=>$model->sid)),
	array('label'=>'Delete Smpt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Smpt', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>View SMPT Info #<?php echo $model->sid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sid',
		'smtp_host',
		'smtp_post',
		'smtp_user',
		'smtp_pass',
		'smtp_auth_needed',
	),
)); ?>
