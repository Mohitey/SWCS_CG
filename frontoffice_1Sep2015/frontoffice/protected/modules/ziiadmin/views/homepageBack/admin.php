<?php
/* @var $this HomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepage'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Manage Homepage', 'url'=>array('index')),
//	array('label'=>'Edit Homepage', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#manage-homepage-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Homepage</h1>

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
	'id'=>'manage-homepage-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'content_id',
		'homepage_center_title',
		'homepage_image',
		'homepage_image_title',
		'last_updated_on',
		'updated_by',
		array(                   
           'name'=>'is_active',
           'value'=>'($data->is_active)?"Active":"Inactive"',
           'htmlOptions'=>array('style'=>'width:70px;')
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
