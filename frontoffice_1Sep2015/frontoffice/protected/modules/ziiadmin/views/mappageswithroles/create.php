<?php
/* @var $this MappageswithrolesController */
/* @var $model MapRolesPages */

$this->breadcrumbs=array(
	'Map Roles Pages'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List MapRolesPages', 'url'=>array('index')),
	array('label'=>'Manage MapRolesPages', 'url'=>array('admin')),
);*/
?>

<h1>Create MapRolesPages</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'errorMessage'=>$errorMessage)); ?>
