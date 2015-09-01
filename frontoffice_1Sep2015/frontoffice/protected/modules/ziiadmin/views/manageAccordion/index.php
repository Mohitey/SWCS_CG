<?php
/* @var $this ManageAccordionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manage Accordions',
);

$this->menu=array(
	array('label'=>'Create ManageAccordion', 'url'=>array('create')),
	array('label'=>'Manage ManageAccordion', 'url'=>array('admin')),
);
?>

<h1>Manage Accordions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
