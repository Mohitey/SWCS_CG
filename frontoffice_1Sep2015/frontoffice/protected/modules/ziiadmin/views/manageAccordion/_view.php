<?php
/* @var $this ManageAccordionController */
/* @var $data ManageAccordion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->acc_id), array('view', 'id'=>$data->acc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_title')); ?>:</b>
	<?php echo CHtml::encode($data->acc_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_descr')); ?>:</b>
	<?php echo CHtml::encode($data->acc_descr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_by')); ?>:</b>
	<?php echo CHtml::encode($data->added_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_order')); ?>:</b>
	<?php echo CHtml::encode($data->acc_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>