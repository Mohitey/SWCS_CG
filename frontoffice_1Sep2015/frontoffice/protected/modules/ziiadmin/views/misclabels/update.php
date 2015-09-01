<?php
/* @var $this MiscLabelsController */
/* @var $model MiscLabels */

$this->breadcrumbs=array(
	'Misc Labels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List MiscLabels', 'url'=>array('index')),
	array('label'=>'Create MiscLabels', 'url'=>array('create')),
	array('label'=>'View MiscLabels', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MiscLabels', 'url'=>array('admin')),
);*/
?>

<h1>Update MiscLabels <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
