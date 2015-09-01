<?php
/* @var $this HomepagesliderController */
/* @var $model homepageslider */

$this->breadcrumbs=array(
	'Homepagesliders'=>array('index'),
	$model->image_id,
);

/*$this->menu=array(
	array('label'=>'List homepageslider', 'url'=>array('index')),
	array('label'=>'Create homepageslider', 'url'=>array('create')),
	array('label'=>'Update homepageslider', 'url'=>array('update', 'id'=>$model->image_id)),
	array('label'=>'Delete homepageslider', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->image_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage homepageslider', 'url'=>array('admin')),
);*/
?>

<h1>View homepageslider #<?php echo $model->image_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'image_id',
		'image_caption',
		'image_path',
		'added_date',
		'updated_date',
		'is_active',
	),
)); ?>
