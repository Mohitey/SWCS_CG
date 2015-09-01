<?php
/* @var $this MappageswithrolesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Map Roles Pages',
);

$this->menu=array(
	array('label'=>'Create MapRolesPages', 'url'=>array('create')),
	array('label'=>'Manage MapRolesPages', 'url'=>array('admin')),
);
?>

<h1>Map Roles Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
