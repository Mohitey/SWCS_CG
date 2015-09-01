<?php
/* @var $this PageCategoryRelationController */
/* @var $model PageCategoryRelation */

$this->breadcrumbs=array(
	'Page Category Relations'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List PageCategoryRelation', 'url'=>array('index')),
	array('label'=>'Manage PageCategoryRelation', 'url'=>array('admin')),
);*/
?>

<h1>Create PageCategoryRelation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>