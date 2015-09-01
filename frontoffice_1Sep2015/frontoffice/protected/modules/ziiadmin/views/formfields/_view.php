<?php
/* @var $this FormfieldsController */
/* @var $data FormFieldName */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->field_id), array('view', 'id'=>$data->field_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_name')); ?>:</b>
	<?php echo CHtml::encode($data->field_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_label')); ?>:</b>
	<?php echo CHtml::encode($data->field_label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_type')); ?>:</b>
	<?php echo CHtml::encode($data->field_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_size')); ?>:</b>
	<?php echo CHtml::encode($data->field_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_value')); ?>:</b>
	<?php echo CHtml::encode($data->default_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_required')); ?>:</b>
	<?php echo CHtml::encode($data->is_required); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	*/ ?>

</div>