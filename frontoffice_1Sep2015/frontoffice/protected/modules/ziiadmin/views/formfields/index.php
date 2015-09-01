<?php
/* @var $this FormfieldsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Field Names',
);

$this->menu=array(
	array('label'=>'Create FormFieldName', 'url'=>array('create')),
	array('label'=>'Manage FormFieldName', 'url'=>array('admin')),
);
?>

<h1>Form Field Names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
