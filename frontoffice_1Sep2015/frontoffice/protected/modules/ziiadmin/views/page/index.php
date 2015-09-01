<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Page',
);

$this->menu=array(
        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>

<h1>Page</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
