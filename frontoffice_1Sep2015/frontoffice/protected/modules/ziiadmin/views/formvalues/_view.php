<?php
/* @var $this FormvaluesController */
/* @var $data FormFieldValue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_value_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->form_value_id), array('view', 'id'=>$data->form_value_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
	<?php echo CHtml::encode($data->form_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_value')); ?>:</b>
	<?php echo CHtml::encode($data->field_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>