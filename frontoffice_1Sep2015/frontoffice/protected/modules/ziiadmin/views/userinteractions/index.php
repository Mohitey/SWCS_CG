<?php
/* @var $this UserinteractionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Interactions',
);
/*
$this->menu=array(
	array('label'=>'Create UserInteractions', 'url'=>array('create')),
	array('label'=>'Manage UserInteractions', 'url'=>array('admin')),
);
*/
?>

<h1>User Interactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
