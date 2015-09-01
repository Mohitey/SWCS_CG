<?php
/* @var $this FormController */
/* @var $data FormInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->form_id), array('view', 'id'=>$data->form_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_name')); ?>:</b>
	<?php echo CHtml::encode($data->form_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_desc')); ?>:</b>
	<?php echo CHtml::encode($data->form_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_stub')); ?>:</b>
	<?php echo CHtml::encode($data->form_stub); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_on')); ?>:</b>
	<?php echo CHtml::encode($data->modified_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>