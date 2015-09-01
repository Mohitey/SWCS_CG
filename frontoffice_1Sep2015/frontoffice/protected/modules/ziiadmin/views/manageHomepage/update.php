<?php
/* @var $this ManageHomepageController */
/* @var $model ManageHomepage */

$this->breadcrumbs=array(
	'Manage Homepages'=>array('index'),
	$model->content_id=>array('view','id'=>$model->content_id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List ManageHomepage', 'url'=>array('index')),
	array('label'=>'Create ManageHomepage', 'url'=>array('create')),
	array('label'=>'View ManageHomepage', 'url'=>array('view', 'id'=>$model->content_id)),
	array('label'=>'Manage ManageHomepage', 'url'=>array('admin')),
);*/
?>

<h1>Update Homepage <?php echo $model->content_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>