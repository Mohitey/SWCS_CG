<?php
/* @var $this ManageAccordionController */
/* @var $model ManageAccordion */

$this->breadcrumbs=array(
	'Manage Accordions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ManageAccordion', 'url'=>array('index')),
	array('label'=>'Manage ManageAccordion', 'url'=>array('admin')),
);
?>

<h1>Create ManageAccordion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>