<?php
/* @var $this PagecategoriesController */
/* @var $model PageCategories */

$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	$model->pcat_id=>array('view','id'=>$model->pcat_id),
	'Update',
);

//$this->menu=array(
//        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
//	array('label'=>'List PageCategories', 'url'=>array('index')),
//	array('label'=>'Create PageCategories', 'url'=>array('create')),
//	array('label'=>'View PageCategories', 'url'=>array('view', 'id'=>$model->pcat_id)),
//	array('label'=>'Manage PageCategories', 'url'=>array('admin')),
//);
?>

<h1>Update PageCategories <?php echo $model->pcat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>