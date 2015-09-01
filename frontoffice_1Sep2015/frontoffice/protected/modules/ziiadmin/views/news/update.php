<?php
/* @var $this NewsController */
/* @var $model ManageNews */

$this->breadcrumbs=array(
	'Manage News'=>array('index'),
	$model->news_id=>array('view','id'=>$model->news_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List ManageNews', 'url'=>array('index')),
	array('label'=>'Create ManageNews', 'url'=>array('create')),
	array('label'=>'View ManageNews', 'url'=>array('view', 'id'=>$model->news_id)),
	array('label'=>'Manage ManageNews', 'url'=>array('admin')),
);*/
?>

<h1>Update News <?php echo $model->news_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>