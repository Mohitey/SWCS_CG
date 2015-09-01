<?php
/* @var $this ManageHomepageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manage Homepages',
);

$this->menu=array(
	array('label'=>'Create ManageHomepage', 'url'=>array('create')),
	array('label'=>'Manage ManageHomepage', 'url'=>array('admin')),
);
?>

<h1>Manage Homepages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
