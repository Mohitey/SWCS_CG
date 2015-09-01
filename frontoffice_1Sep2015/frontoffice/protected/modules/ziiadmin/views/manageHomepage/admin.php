<?php
/* @var $this ManageHomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepages'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List ManageHomepage', 'url'=>array('index')),
	array('label'=>'Create ManageHomepage', 'url'=>array('create')),
);*/

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
		'block1_after_slider_heading',
		'block1_after_slider_desc',
		'block1_after_slider_read_more_link',
		'block2_after_slider_heading',
		'block2_after_slider_desc',
		/*
		'block2_after_slider_read_more_link',
		'block3_after_slider_heading',
		'block3_after_slider_desc',
		'block3_after_slider_read_more_link',
		'block_after_slider_main_heading',
		'homepage_minitster_image',
		'homepage_minister_name',
		'homepage_minister_name2',
		'homepage_minister_name3',
		'homepage_minister_name4',
		'homepage_minister_designation4',
		'homepage_minister_name5',
		'homepage_minister_designation',
		'homepage_minister_designation2',
		'homepage_minister_designation3',
		'homepage_minister_designation5',
		'homepage_minsiter_message',
		'homepage_minsiter_message2',
		'homepage_minsiter_message3',
		'homepage_minsiter_message4',
		'homepage_minsiter_message5',
		'homepage_minister_readmore_link',
		'home',
		'homepage_footer_aboutus',
		'contact_us_email',
		'contact_us_phone',
		'contact_us_address',
		'homepage_text',
		'homepage_text1',
		'homepage_text2',
		'homepage_text3',
		'homepage_text4',
		'last_updated_on',
		'updated_by',
		'is_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
