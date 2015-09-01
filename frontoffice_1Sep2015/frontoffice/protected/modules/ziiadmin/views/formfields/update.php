<?php
/* @var $this FormfieldsController */
/* @var $model FormFieldName */

$this->breadcrumbs=array(
	'Form Field Names'=>array('index'),
	$model->field_id=>array('view','id'=>$model->field_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List FormFieldName', 'url'=>array('index')),
	array('label'=>'Create FormFieldName', 'url'=>array('create')),
	array('label'=>'View FormFieldName', 'url'=>array('view', 'id'=>$model->field_id)),
	array('label'=>'Manage FormFieldName', 'url'=>array('admin')),
);*/
?>

<h1>Update Form Field  <?php echo $model->field_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>