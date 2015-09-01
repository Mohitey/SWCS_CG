<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manage News',
);

$this->menu=array(
	array('label'=>'Create ManageNews', 'url'=>array('create')),
	array('label'=>'Manage ManageNews', 'url'=>array('admin')),
);
?>

<h1>Manage News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
