<?php
/* @var $this NewsController */
/* @var $model ManageNews */

$this->breadcrumbs=array(
	'Manage News'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List ManageNews', 'url'=>array('index')),
	array('label'=>'Manage ManageNews', 'url'=>array('admin')),
);*/
?>

<h1>Add News (N), Speech (S),  Initiative (I) or Message (M)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>