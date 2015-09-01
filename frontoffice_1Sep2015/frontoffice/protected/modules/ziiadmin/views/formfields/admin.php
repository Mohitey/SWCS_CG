<?php
/* @var $this FormfieldsController */
/* @var $model FormFieldName */

$this->breadcrumbs=array(
	'Form Field Names'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List FormFieldName', 'url'=>array('index')),
	array('label'=>'Create FormFieldName', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#form-field-name-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Form Fields</h1>

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
	'id'=>'form-field-name-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'field_id',
		'field_name',
		'field_label',
		'field_type',
		'field_size',
		'default_value',
		/*
		'is_required',
		'is_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
