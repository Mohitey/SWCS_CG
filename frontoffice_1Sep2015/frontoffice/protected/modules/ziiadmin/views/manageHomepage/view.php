<?php
/* @var $this ManageHomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepages'=>array('index'),
	$model->content_id,
);

/*$this->menu=array(
	array('label'=>'List ManageHomepage', 'url'=>array('index')),
	array('label'=>'Create ManageHomepage', 'url'=>array('create')),
	array('label'=>'Update ManageHomepage', 'url'=>array('update', 'id'=>$model->content_id)),
	array('label'=>'Delete ManageHomepage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->content_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ManageHomepage', 'url'=>array('admin')),
);*/
?>

<h1>View ManageHomepage #<?php echo $model->content_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'content_id',
		'block1_after_slider_heading',
		'block1_after_slider_desc',
		'block1_after_slider_read_more_link',
		'block2_after_slider_heading',
		'block2_after_slider_desc',
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
	),
)); ?>
