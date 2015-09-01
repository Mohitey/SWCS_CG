<?php
/* @var $this MiscLabelsController */
/* @var $model MiscLabels */

$this->breadcrumbs=array(
	'Misc Labels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MiscLabels', 'url'=>array('index')),
	array('label'=>'Create MiscLabels', 'url'=>array('create')),
	array('label'=>'Update MiscLabels', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MiscLabels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MiscLabels', 'url'=>array('admin')),
);
?>

<h1>View MiscLabels #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'label',
		//'label1',
		//'label2',
		//'label3',
		//'label4',
	),
)); ?>
