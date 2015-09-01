<?php
/* @var $this LoginAccessLogController */
/* @var $model LoginAccessLog */

$this->breadcrumbs=array(
	'Login Access Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LoginAccessLog', 'url'=>array('index')),
	array('label'=>'Manage LoginAccessLog', 'url'=>array('admin')),
);
?>

<h1>Create LoginAccessLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>