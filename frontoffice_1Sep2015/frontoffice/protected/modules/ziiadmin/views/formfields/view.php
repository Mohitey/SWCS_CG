<?php
/* @var $this FormfieldsController */
/* @var $model FormFieldName */

$this->breadcrumbs=array(
	'Form Field Names'=>array('index'),
	$model->field_id,
);

/*$this->menu=array(
	array('label'=>'List FormFieldName', 'url'=>array('index')),
	array('label'=>'Create FormFieldName', 'url'=>array('create')),
	array('label'=>'Update FormFieldName', 'url'=>array('update', 'id'=>$model->field_id)),
	array('label'=>'Delete FormFieldName', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->field_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormFieldName', 'url'=>array('admin')),
);*/
?>

<h1>View Form Field #<?php echo $model->field_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'field_id',
		'field_name',
		'field_label',
		'field_type',
		'field_size',
		'default_value',
		'is_required',
		'is_active',
	),
)); ?>
