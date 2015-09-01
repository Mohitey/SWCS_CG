<?php
/* @var $this ModuleController */
/* @var $model Modules */

$this->breadcrumbs=array(
	'Modules'=>array('index'),
	$model->mod_id,
);

//$this->menu=array(
//	array('label'=>'List Modules', 'url'=>array('index')),
//	array('label'=>'Create Modules', 'url'=>array('create')),
//	array('label'=>'Update Modules', 'url'=>array('update', 'id'=>$model->mod_id)),
//	array('label'=>'Delete Modules', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mod_id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Modules', 'url'=>array('admin')),
//);
?>

<h1>View Modules #<?php echo $model->mod_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mod_id',
		'module_name',
		'module_desc',
		'is_active',
	),
)); ?>
