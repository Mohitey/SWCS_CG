<?php
/* @var $this ManageHomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepages'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List ManageHomepage', 'url'=>array('index')),
	array('label'=>'Manage ManageHomepage', 'url'=>array('admin')),
);*/
?>

<h1>Create ManageHomepage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>