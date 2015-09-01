<?php
/* @var $this NewsController */
/* @var $model ManageNews */

$this->breadcrumbs=array(
	'Manage News'=>array('index'),
	$model->news_id,
);

/*$this->menu=array(
	array('label'=>'List ManageNews', 'url'=>array('index')),
	array('label'=>'Create ManageNews', 'url'=>array('create')),
	array('label'=>'Update ManageNews', 'url'=>array('update', 'id'=>$model->news_id)),
	array('label'=>'Delete ManageNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->news_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ManageNews', 'url'=>array('admin')),
);*/
?>

<h1>View ManageNews #<?php echo $model->news_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'news_id',
		//'added_by',
		'news_heading',
		'news_desc',
		//'image',
		'added_date',
		'is_active',
	),
)); ?>
