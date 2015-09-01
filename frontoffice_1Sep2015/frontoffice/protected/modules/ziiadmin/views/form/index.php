<?php
/* @var $this FormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Infos',
);

//$this->menu=array(
//	array('label'=>'Create FormInfo', 'url'=>array('create')),
//	array('label'=>'Manage FormInfo', 'url'=>array('admin')),
//);
?>

<h1>Form Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
