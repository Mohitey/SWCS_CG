<?php
/* @var $this ManagesubjectsController */
/* @var $model ManageSubjects */

$this->breadcrumbs=array(
	'Manage Subjects'=>array('index'),
	$model->sub_id,
);

/*$this->menu=array(
	array('label'=>'List ManageSubjects', 'url'=>array('index')),
	array('label'=>'Create ManageSubjects', 'url'=>array('create')),
	array('label'=>'Update ManageSubjects', 'url'=>array('update', 'id'=>$model->sub_id)),
	array('label'=>'Delete ManageSubjects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sub_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ManageSubjects', 'url'=>array('admin')),
);*/
?>

<h1>View Subject #<?php echo $model->sub_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sub_id',
		'subject',
		'is_active',
	),
)); ?>
