<?php
/* @var $this ManagesubjectsController */
/* @var $model ManageSubjects */

$this->breadcrumbs=array(
	'Manage Subjects'=>array('index'),
	$model->sub_id=>array('view','id'=>$model->sub_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List ManageSubjects', 'url'=>array('index')),
	array('label'=>'Create ManageSubjects', 'url'=>array('create')),
	array('label'=>'View ManageSubjects', 'url'=>array('view', 'id'=>$model->sub_id)),
	array('label'=>'Manage ManageSubjects', 'url'=>array('admin')),
);*/
?>

<h1>Update Subject <?php echo $model->sub_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>