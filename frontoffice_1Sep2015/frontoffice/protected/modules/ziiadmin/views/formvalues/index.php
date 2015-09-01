<?php
/* @var $this FormvaluesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Field Values',
);

$this->menu=array(
	array('label'=>'Create FormFieldValue', 'url'=>array('create')),
	array('label'=>'Manage FormFieldValue', 'url'=>array('admin')),
);
?>

<h1>Form Field Values</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
