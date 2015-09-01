<?php
/* @var $this NewsController */
/* @var $model ManageNews */

$this->breadcrumbs=array(
	'Manage News'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List ManageNews', 'url'=>array('index')),
	array('label'=>'Create ManageNews', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#manage-news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News (N), Speech (S), Initiative (I) and Message (M)</h1>

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
	'id'=>'manage-news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'news_id',
		//'added_by',
		//'news_heading',
		//'news_desc',
		array(
			'header'=>"News ID",
			'value'=>'$data->news_id',
			'name'=>'news_id',
			'htmlOptions' => array( 'style' => 'width:10px' ),
		),
		array(
			'header'=>"Heading",
			'value'=>'$data->news_heading',
			'name'=>'news_heading',
			'htmlOptions' => array( 'style' => 'width:200px' ),
		),
		/*array(
			'header'=>"Description",
			'value'=>'$data->news_desc',
			'name'=>'news_desc',
			'htmlOptions' => array( 'style' => 'width:500px' ),
		),*/
		'data_type',
		//'image',
		'added_date',
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
