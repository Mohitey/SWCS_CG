<?php
/* @var $this HomepagesliderController */
/* @var $model homepageslider */

$this->breadcrumbs=array(
	'Homepagesliders'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List homepageslider', 'url'=>array('index')),
	array('label'=>'Manage homepageslider', 'url'=>array('admin')),
);*/
?>

<h1>Create homepageslider</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>