<?php
/* @var $this ManageAccordionController */
/* @var $model ManageAccordion */

$this->breadcrumbs=array(
	'Manage Accordions'=>array('index'),
	$model->acc_id=>array('view','id'=>$model->acc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ManageAccordion', 'url'=>array('index')),
	array('label'=>'Create ManageAccordion', 'url'=>array('create')),
	array('label'=>'View ManageAccordion', 'url'=>array('view', 'id'=>$model->acc_id)),
	array('label'=>'Manage ManageAccordion', 'url'=>array('admin')),
);
?>

<h1>Update ManageAccordion <?php echo $model->acc_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>