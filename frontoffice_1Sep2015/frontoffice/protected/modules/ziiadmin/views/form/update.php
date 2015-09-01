<?php
/* @var $this FormController */
/* @var $model FormInfo */

$this->breadcrumbs=array(
	'Form Infos'=>array('index'),
	$model->form_id=>array('view','id'=>$model->form_id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List FormInfo', 'url'=>array('index')),
//	array('label'=>'Create FormInfo', 'url'=>array('create')),
//	array('label'=>'View FormInfo', 'url'=>array('view', 'id'=>$model->form_id)),
//	array('label'=>'Manage FormInfo', 'url'=>array('admin')),
//);
?>

<h1>Update FormInfo <?php echo $model->form_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>