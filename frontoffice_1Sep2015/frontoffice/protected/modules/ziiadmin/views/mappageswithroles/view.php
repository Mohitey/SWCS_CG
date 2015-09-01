<?php
/* @var $this MappageswithrolesController */
/* @var $model MapRolesPages */

$this->breadcrumbs=array(
	'Map Roles Pages'=>array('index'),
	$model->map_id,
);

/*$this->menu=array(
	array('label'=>'List MapRolesPages', 'url'=>array('index')),
	array('label'=>'Create MapRolesPages', 'url'=>array('create')),
	array('label'=>'Update MapRolesPages', 'url'=>array('update', 'id'=>$model->map_id)),
	array('label'=>'Delete MapRolesPages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->map_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MapRolesPages', 'url'=>array('admin')),
);*/
?>

<h1>View MapRolesPages #<?php echo $model->map_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'map_id',
		'role_id',
		'parent_page_id',
		'is_active',
	),
)); ?>
