<?php
/* @var $this MiscLabelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Misc Labels',
);

$this->menu=array(
	array('label'=>'Create MiscLabels', 'url'=>array('create')),
	array('label'=>'Manage MiscLabels', 'url'=>array('admin')),
);
?>

<h1>Misc Labels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
