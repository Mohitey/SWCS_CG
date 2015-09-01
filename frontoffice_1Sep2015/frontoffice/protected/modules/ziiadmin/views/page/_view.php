<?php
/* @var $this PageController */
/* @var $data PageInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->page_id), array('view', 'id'=>$data->page_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_stub')); ?>:</b>
	<?php echo CHtml::encode($data->page_stub); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_name')); ?>:</b>
	<?php echo CHtml::encode($data->page_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->page_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_desc')); ?>:</b>
	<?php echo CHtml::encode($data->page_desc); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('page_content')); ?>:</b>
	<?php echo CHtml::encode($data->page_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcat_id')); ?>:</b>
	<?php echo CHtml::encode($data->pcat_id); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

</div>