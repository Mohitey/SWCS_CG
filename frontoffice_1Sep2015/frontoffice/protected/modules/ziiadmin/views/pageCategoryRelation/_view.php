<?php
/* @var $this PageCategoryRelationController */
/* @var $data PageCategoryRelation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('relation_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->relation_id), array('view', 'id'=>$data->relation_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::encode($data->page_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>