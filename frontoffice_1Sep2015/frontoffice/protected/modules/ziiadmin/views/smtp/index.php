<?php
/* @var $this SmtpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Smpts',
);
/*
$this->menu=array(
	array('label'=>'Create Smpt', 'url'=>array('create')),
	array('label'=>'Manage Smpt', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>SMTP Info</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
