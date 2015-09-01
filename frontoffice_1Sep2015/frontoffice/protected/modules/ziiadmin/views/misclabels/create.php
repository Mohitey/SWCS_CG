<?php
/* @var $this MiscLabelsController */
/* @var $model MiscLabels */

$this->breadcrumbs=array(
	'Misc Labels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MiscLabels', 'url'=>array('index')),
	array('label'=>'Manage MiscLabels', 'url'=>array('admin')),
);
?>

<h1>Create MiscLabels</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>