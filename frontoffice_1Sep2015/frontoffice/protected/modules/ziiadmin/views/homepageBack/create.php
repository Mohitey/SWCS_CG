<?php
/* @var $this HomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepage'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List ManageHomepage', 'url'=>array('index')),
//	array('label'=>'Manage ManageHomepage', 'url'=>array('admin')),
//);
?>

<h1>Manage Homepage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>