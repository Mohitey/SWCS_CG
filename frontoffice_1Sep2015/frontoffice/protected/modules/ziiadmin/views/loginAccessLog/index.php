<?php
/* @var $this LoginAccessLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Login Access Logs',
);

$this->menu=array(
	array('label'=>'Create LoginAccessLog', 'url'=>array('create')),
	array('label'=>'Manage LoginAccessLog', 'url'=>array('admin')),
);
?>

<h1>Login Access Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
