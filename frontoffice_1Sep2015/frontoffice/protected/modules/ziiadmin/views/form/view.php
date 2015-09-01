<?php
/* @var $this FormController */
/* @var $model FormInfo */

$this->breadcrumbs=array(
	'Form Infos'=>array('index'),
	$model->form_id,
);

//$this->menu=array(
//	array('label'=>'List FormInfo', 'url'=>array('index')),
//	array('label'=>'Create FormInfo', 'url'=>array('create')),
//	array('label'=>'Update FormInfo', 'url'=>array('update', 'id'=>$model->form_id)),
//	array('label'=>'Delete FormInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->form_id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage FormInfo', 'url'=>array('admin')),
//);
?>

<h1>View FormInfo #<?php echo $model->form_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'form_id',
		'form_name',
		'form_desc',
		'form_stub',
		'is_active',
		'created_by',
		'created_on',
		'modified_on',
		'modified_by',
	),
)); ?>
