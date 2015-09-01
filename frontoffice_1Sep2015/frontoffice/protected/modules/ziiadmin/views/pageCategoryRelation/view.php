<?php
/* @var $this PageCategoryRelationController */
/* @var $model PageCategoryRelation */

$this->breadcrumbs=array(
	'Page Category Relations'=>array('index'),
	$model->relation_id,
);

/*$this->menu=array(
	array('label'=>'List PageCategoryRelation', 'url'=>array('index')),
	array('label'=>'Create PageCategoryRelation', 'url'=>array('create')),
	array('label'=>'Update PageCategoryRelation', 'url'=>array('update', 'id'=>$model->relation_id)),
	array('label'=>'Delete PageCategoryRelation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->relation_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PageCategoryRelation', 'url'=>array('admin')),
);*/
?>

<h1>View PageCategoryRelation #<?php echo $model->relation_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'relation_id',
		//'page_id',
		array(
			'label'=>'Page',
			'type'=>'raw',
			'value'=>Utility::getPageName($model->page_id),
		   
		),
		array(
			'label'=>'Category',
			'type'=>'raw',
			'value'=>Utility::getCategoryName($model->cat_id),
		   
		),

		'page_order',
		'is_active',
	),
)); ?>
