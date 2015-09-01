<?php
/* @var $this ManagesubjectsController */
/* @var $model ManageSubjects */

$this->breadcrumbs=array(
	'Manage Subjects'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List ManageSubjects', 'url'=>array('index')),
	array('label'=>'Manage ManageSubjects', 'url'=>array('admin')),
);*/
?>

<h1>Create Subject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>