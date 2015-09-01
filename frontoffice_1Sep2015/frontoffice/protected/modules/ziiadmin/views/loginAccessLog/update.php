<?php
/* @var $this LoginAccessLogController */
/* @var $model LoginAccessLog */

$this->breadcrumbs=array(
	'Login Access Logs'=>array('index'),
	$model->log_id=>array('view','id'=>$model->log_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LoginAccessLog', 'url'=>array('index')),
	array('label'=>'Create LoginAccessLog', 'url'=>array('create')),
	array('label'=>'View LoginAccessLog', 'url'=>array('view', 'id'=>$model->log_id)),
	array('label'=>'Manage LoginAccessLog', 'url'=>array('admin')),
);
?>

<h1>Update LoginAccessLog <?php echo $model->log_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>