<?php
/* @var $this FormvaluesController */
/* @var $model FormFieldValue */

$this->breadcrumbs=array(
	'Form Field Values'=>array('index'),
	$model->form_value_id,
);

$this->menu=array(
	array('label'=>'List FormFieldValue', 'url'=>array('index')),
	array('label'=>'Create FormFieldValue', 'url'=>array('create')),
	array('label'=>'Update FormFieldValue', 'url'=>array('update', 'id'=>$model->form_value_id)),
	array('label'=>'Delete FormFieldValue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->form_value_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormFieldValue', 'url'=>array('admin')),
);
?>

<h1>View FormFieldValue #<?php echo $model->form_value_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'form_value_id',
		'form_id',
		'field_value',
		'is_active',
	),
)); ?>
