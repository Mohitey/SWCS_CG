<?php
/* @var $this ModuleController */
/* @var $model Modules */

$this->breadcrumbs=array(
	'Modules'=>array('index'),
	'Create',
);

?>

<h1>Create Modules</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>