<?php
/* @var $this ManageAccordionController */
/* @var $model ManageAccordion */

$this->breadcrumbs=array(
	'Manage Accordions'=>array('index'),
	$model->acc_id,
);

$this->menu=array(
	array('label'=>'List ManageAccordion', 'url'=>array('index')),
	array('label'=>'Create ManageAccordion', 'url'=>array('create')),
	array('label'=>'Update ManageAccordion', 'url'=>array('update', 'id'=>$model->acc_id)),
	array('label'=>'Delete ManageAccordion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->acc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ManageAccordion', 'url'=>array('admin')),
);
?>

<h1>View ManageAccordion #<?php echo $model->acc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'acc_id',
		'acc_title',
		'acc_descr',
		'added_by',
		'acc_order',
		'updated_date',
		'is_active',
	),
)); ?>
