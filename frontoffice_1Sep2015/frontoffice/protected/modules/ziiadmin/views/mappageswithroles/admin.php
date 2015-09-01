<?php
/* @var $this MappageswithrolesController */
/* @var $model MapRolesPages */

$this->breadcrumbs=array(
	'Map Roles Pages'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List MapRolesPages', 'url'=>array('index')),
	array('label'=>'Create MapRolesPages', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#map-roles-pages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Map Roles Pages</h1>

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
	'id'=>'map-roles-pages-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'map_id',
		//'role_id',
		array(                   
           'name'=>'role_id',
           'value'=>'Roles::model()->findByPk($data->role_id)->role_name',
           'filter'=>CHtml::listData(Roles::model()->findAll(), 'role_id', 'role_name'),
        ),
		 array(                   
           'name'=>'parent_page_id',
           'value'=>'PageInfo::model()->findByPk($data->parent_page_id)->page_name',
           'filter'=>CHtml::listData(PageInfo::model()->findAll(), 'page_id', 'page_name'),
        ),
        array(                   
           'name'=>'is_active',
           'value'=>'($data->is_active)?"Active":"Inactive"'
        ),
		//'parent_page_id',
		//'is_active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
