<?php
/* @var $this PageCategoryRelationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Page Category Relations',
);

$this->menu=array(
	array('label'=>'Create PageCategoryRelation', 'url'=>array('create')),
	array('label'=>'Manage PageCategoryRelation', 'url'=>array('admin')),
);
?>

<h1>Page Category Relations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
