<?php
/* @var $this UserinteractionsController */
/* @var $model UserInteractions */

$this->breadcrumbs=array(
	'Shared Idea'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List UserInteractions', 'url'=>array('index')),
	array('label'=>'Create UserInteractions', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-interactions-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Shared Idea	</h1>

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
	'id'=>'user-interactions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'msg_id',
		array(
			'header'=>"ID",
			'name'=>'msg_id',
			'value'=>'$data->msg_id'
		),
		//'msg_to',
		//'user_id',
		array(
			'header'=>"Name",
			'name'=>'user_id',
			'value'=>'Users::model()->findByPk($data->user_id)->full_name'
		),
		
		array(
			'header'=>"Message To",
			'name'=>'msg_to',
			'value'=>'Users::model()->findByPk($data->user_id)->full_name'
		),
	
		array(
			'header'=>"Mobile",
			//'name'=>'msg_to',
			'value'=>'Users::model()->findByPk($data->user_id)->mobile'
		),
		array(
			'header'=>"Email",
			//'name'=>'msg_to',
			'value'=>'Users::model()->findByPk($data->user_id)->email'
		),
		
		'subject',
		'message',
		//'msg_type',
		array(
			'header'=>"Message Type",
			'name'=>'msg_type',
			'value'=>'ucwords($data->msg_type)'
		),
		'added_date',
		//'is_active',
		array(
			'header'=>"Status",
			'name'=>'is_active',
			'value'=>'($data->is_active)?"Unread":"Replied"'
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}',
		),
	),
)); ?>
