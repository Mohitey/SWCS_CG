<?php
/* @var $this PageController */
/* @var $model PageInfo */

$this->breadcrumbs=array(
	'Page'=>array('index'),
	$model->page_id,
);
/*
$this->menu=array(
        array('label'=>'cPanel', 'url'=>array('/ziiadmin')),
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Update Page', 'url'=>array('update', 'id'=>$model->page_id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->page_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
*/
?>
<h1>View Page #<?php echo $model->page_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'page_id',
		'page_stub',
		'page_name',
		'page_keywords',
		'page_desc',
		//'page_content',
		array(
                    'header'=>'Page Content',
                    'name'=>'page_content',
                    'type'=>"html",
                    'value'=>  htmlspecialchars_decode(htmlspecialchars_decode($model->page_content))
                ),
		'parent_id',
		'pcat_id',
		'is_active',
	),
));
?>
