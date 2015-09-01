<?php
/* @var $this PageCategoryRelationController */
/* @var $model PageCategoryRelation */

$this->breadcrumbs=array(
	'Page Category Relations'=>array('index'),
	$model->relation_id=>array('view','id'=>$model->relation_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List PageCategoryRelation', 'url'=>array('index')),
	array('label'=>'Create PageCategoryRelation', 'url'=>array('create')),
	array('label'=>'View PageCategoryRelation', 'url'=>array('view', 'id'=>$model->relation_id)),
	array('label'=>'Manage PageCategoryRelation', 'url'=>array('admin')),
);*/
?>

<h1>Update PageCategoryRelation <?php echo $model->relation_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>