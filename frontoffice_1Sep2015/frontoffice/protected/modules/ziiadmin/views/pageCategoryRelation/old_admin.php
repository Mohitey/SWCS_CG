<?php
/* @var $this PageCategoryRelationController */
/* @var $model PageCategoryRelation */

$this->breadcrumbs=array(
	'Page Category Relations'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List PageCategoryRelation', 'url'=>array('index')),
	array('label'=>'Create PageCategoryRelation', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-category-relation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Page Category Relations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-category-relation-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'relation_id',
		array(
			'header'=>'Page',
			'type'=>'raw',
			'value'=>'Utility::getPageName($data->page_id)',
		   
		),
		array(
			'header'=>'Category',
			'type'=>'raw',
			'value'=>'Utility::getCategoryName($data->cat_id)',
		   
		),
            'page_order',
                array(                   
                   'name'=>'is_active',
                   'value'=>'($data->is_active)?"Active":"Inactive"',
                   'htmlOptions'=>array('style'=>'width:70px;')
                ),

		//'page_id',
		//'cat_id',
		//'is_active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
