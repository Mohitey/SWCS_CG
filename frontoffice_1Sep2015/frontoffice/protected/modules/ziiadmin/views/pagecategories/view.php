<?php
/* @var $this PagecategoriesController */
/* @var $model PageCategories */

$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	$model->pcat_id,
);

//$this->menu=array(
//        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
//	array('label'=>'List PageCategories', 'url'=>array('index')),
//	array('label'=>'Create PageCategories', 'url'=>array('create')),
//	array('label'=>'Update PageCategories', 'url'=>array('update', 'id'=>$model->pcat_id)),
//	array('label'=>'Delete PageCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pcat_id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage PageCategories', 'url'=>array('admin')),
//);
?>

<h1>View PageCategories #<?php echo $model->pcat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pcat_id',
		'pcat_name',
		'pcal_desc',
		'is_active',
	),
)); ?>
