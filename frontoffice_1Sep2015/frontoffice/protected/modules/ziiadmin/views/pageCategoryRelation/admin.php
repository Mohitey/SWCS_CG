<?php
/* @var $this PageCategoryRelationController */
/* @var $model PageCategoryRelation */

$this->breadcrumbs=array(
	'Page Category Relations'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List PageCategoryRelation', 'url'=>array('index')),
	array('label'=>'Create PageCategoryRelation', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-category-relation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Page Category Relations</h1>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
	    'dataProvider' => $dataProvider,
	    'columns' => array(
	        array(
	            'header' => 'ID',
                'name' => 'relation_id',
	            'type' => 'raw',
	            'value' => 'CHtml::encode($data["relation_id"])'
	        ),
	        array(
	            'header' => 'Page',
                'name' => 'page_name',
	            'type' => 'raw',
	            'value' => 'CHtml::encode($data["page_name"])'
	        ),
                array(
	            'header' => 'Category',
                'name' => 'pcat_name',
	            'type' => 'raw',
	            'value' => 'CHtml::encode($data["pcat_name"])'
	        ),
	       array(
                'header' => 'Page Order',
	            'name' => 'page_order',
	            'type' => 'raw',
	            'value' => 'CHtml::encode($data["page_order"])'
	        ),
	        array(
                'class' => 'CButtonColumn',
                'template' => '{view}{update}',
                'buttons' => array
                    (
                    'view' => array
                        (
                        'label' => 'View',
                        'url' => 'Yii::app()->createUrl("ziiadmin/pageCategoryRelation/view", array("id"=>$data[relation_id]))',
                    ),
                    'update' => array
                        (
                        'label' => 'Edit',
                        'url' => 'Yii::app()->createUrl("ziiadmin/pageCategoryRelation/update", array("id"=>$data[relation_id]))',
                    )
                )
            ),
	    ),
        'filter'=>$filtersForm,
	));

?>

