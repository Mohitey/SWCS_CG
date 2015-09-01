<?php
/* @var $this PagecategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Page Categories',
);

//$this->menu=array(
//        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
//	array('label'=>'Create PageCategories', 'url'=>array('create')),
//	array('label'=>'Manage PageCategories', 'url'=>array('admin')),
//);
?>

<h1>Page Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
