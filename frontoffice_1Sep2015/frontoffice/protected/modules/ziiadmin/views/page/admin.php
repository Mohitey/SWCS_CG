<?php
/* @var $this PageController */
/* @var $model PageInfo */

$this->breadcrumbs=array(
	'Page'=>array('index'),
	'Manage',
);

/*
$this->menu=array(
        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-info-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pages</h1>

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
	'id'=>'page-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                   'header'=>'Page ID',
                   'name'=>'page_id',
                   'value'=>'$data->page_id',
                   'htmlOptions'=>array('style'=>'width:60px;')
                ),               
		array(
                   'header'=>'Label',
                   'name'=>'page_name',
                   'value'=>'$data->page_name',
                   'htmlOptions'=>array('style'=>'width:150px;')
                ),
                array(
                   'header'=>'Stub',
                   'name'=>'page_stub',
                   'value'=>'$data->page_stub',
                   'htmlOptions'=>array('style'=>'width:100px;')
                ),
                array(
                   'name'=>'page_keywords',
                   'value'=>'$data->page_keywords',
                   'htmlOptions'=>array('style'=>'width:150px;')
                ),
                array(                   
                   'name'=>'page_desc',
                   'value'=>'$data->page_desc',
                   'htmlOptions'=>array('style'=>'width:200px;')
                ),
		//'page_content',
		    array(                   
                   'name'=>'pcat_id',
                   'value'=>'PageCategories::model()->findByPk($data->pcat_id)->pcat_name',
                   'htmlOptions'=>array('style'=>'width:100px;')
                ),
                
                array(                   
                   'name'=>'parent_id',
                   'value'=>'Utility::getStubNameFromId($data->parent_id)',
                   'htmlOptions'=>array('style'=>'width:100px;')
                ),
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
