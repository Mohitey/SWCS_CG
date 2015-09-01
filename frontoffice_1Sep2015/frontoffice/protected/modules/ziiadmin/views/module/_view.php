<?php
/* @var $this ModuleController */
/* @var $data Modules */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mod_id), array('view', 'id'=>$data->mod_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_name')); ?>:</b>
	<?php echo CHtml::encode($data->module_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_desc')); ?>:</b>
	<?php echo CHtml::encode($data->module_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>