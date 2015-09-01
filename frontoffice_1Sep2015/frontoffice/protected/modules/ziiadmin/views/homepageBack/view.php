<?php
/* @var $this HomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepage'=>array('index'),
	$model->content_id,
);

//$this->menu=array(
//	array('label'=>'List ManageHomepage', 'url'=>array('index')),
//	array('label'=>'Create ManageHomepage', 'url'=>array('create')),
//	array('label'=>'Update ManageHomepage', 'url'=>array('update', 'id'=>$model->content_id)),
//	array('label'=>'Delete ManageHomepage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->content_id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage ManageHomepage', 'url'=>array('admin')),
//);
?>

<h1>Manage Homepage</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'content_id',
		'homepage_image',
		'homepage_image_title',
		'last_updated_on',
		'updated_by',
		'is_active',
	),
)); ?>
