<?php
/* @var $this HomepagesliderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Homepagesliders',
);

$this->menu=array(
	array('label'=>'Create homepageslider', 'url'=>array('create')),
	array('label'=>'Manage homepageslider', 'url'=>array('admin')),
);
?>

<h1>Homepagesliders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
