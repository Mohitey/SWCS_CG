<?php
/* @var $this HomepagesliderController */
/* @var $model homepageslider */

$this->breadcrumbs=array(
	'Homepagesliders'=>array('index'),
	$model->image_id=>array('view','id'=>$model->image_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List homepageslider', 'url'=>array('index')),
	array('label'=>'Create homepageslider', 'url'=>array('create')),
	array('label'=>'View homepageslider', 'url'=>array('view', 'id'=>$model->image_id)),
	array('label'=>'Manage homepageslider', 'url'=>array('admin')),
);*/
?>

<h1>Update homepageslider <?php echo $model->image_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>