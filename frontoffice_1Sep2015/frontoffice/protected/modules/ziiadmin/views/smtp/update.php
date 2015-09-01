<?php
/* @var $this SmtpController */
/* @var $model Smpt */

$this->breadcrumbs=array(
	'Smpts'=>array('index'),
	$model->sid=>array('view','id'=>$model->sid),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Smpt', 'url'=>array('index')),
	array('label'=>'Create Smpt', 'url'=>array('create')),
	array('label'=>'View Smpt', 'url'=>array('view', 'id'=>$model->sid)),
	array('label'=>'Manage Smpt', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Update SMTP Info <?php echo $model->sid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>