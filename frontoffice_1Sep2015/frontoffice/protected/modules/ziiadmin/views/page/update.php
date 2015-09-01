<?php
/* @var $this PageController */
/* @var $model PageInfo */

$this->breadcrumbs=array(
	'Page'=>array('index'),
	$model->page_id=>array('view','id'=>$model->page_id),
	'Update',
);
/*
$this->menu=array(
        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->page_id)),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
*/
?>

<h1>Update Page <?php echo $model->page_id; ?></h1>

<?php //$this->renderPartial('_form', array('model'=>$model)); ?>
<?php 

if(isset($error)){
	$this->renderPartial('_form', array('error'=>$error,'model'=>$model)); 
} else { 
	$this->renderPartial('_form', array('model'=>$model)); 
}?>