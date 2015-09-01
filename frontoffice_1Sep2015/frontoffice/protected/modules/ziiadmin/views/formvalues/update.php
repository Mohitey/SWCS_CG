<?php
/* @var $this FormvaluesController */
/* @var $model FormFieldValue */

$this->breadcrumbs=array(
	'Form Field Values'=>array('index'),
	$model->form_value_id=>array('view','id'=>$model->form_value_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormFieldValue', 'url'=>array('index')),
	array('label'=>'Create FormFieldValue', 'url'=>array('create')),
	array('label'=>'View FormFieldValue', 'url'=>array('view', 'id'=>$model->form_value_id)),
	array('label'=>'Manage FormFieldValue', 'url'=>array('admin')),
);
?>

<h1>Update FormFieldValue <?php echo $model->form_value_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>