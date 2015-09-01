<?php
/* @var $this ManagesubjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manage Subjects',
);

$this->menu=array(
	array('label'=>'Create ManageSubjects', 'url'=>array('create')),
	array('label'=>'Manage ManageSubjects', 'url'=>array('admin')),
);
?>

<h1>Manage Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
