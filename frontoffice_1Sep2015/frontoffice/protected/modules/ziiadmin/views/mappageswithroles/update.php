<?php
/* @var $this MappageswithrolesController */
/* @var $model MapRolesPages */

$this->breadcrumbs=array(
	'Map Roles Pages'=>array('index'),
	$model->map_id=>array('view','id'=>$model->map_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List MapRolesPages', 'url'=>array('index')),
	array('label'=>'Create MapRolesPages', 'url'=>array('create')),
	array('label'=>'View MapRolesPages', 'url'=>array('view', 'id'=>$model->map_id)),
	array('label'=>'Manage MapRolesPages', 'url'=>array('admin')),
);*/
?>

<h1>Update MapRolesPages <?php echo $model->map_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'errorMessage'=>$errorMessage)); ?>
