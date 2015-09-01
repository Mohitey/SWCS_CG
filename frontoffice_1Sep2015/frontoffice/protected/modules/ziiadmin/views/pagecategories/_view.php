<?php
/* @var $this PagecategoriesController */
/* @var $data PageCategories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pcat_id), array('view', 'id'=>$data->pcat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcat_name')); ?>:</b>
	<?php echo CHtml::encode($data->pcat_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcal_desc')); ?>:</b>
	<?php echo CHtml::encode($data->pcal_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>