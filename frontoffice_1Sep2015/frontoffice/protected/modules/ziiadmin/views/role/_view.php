<?php
/* @var $this RoleController */
/* @var $data Roles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->role_id), array('view', 'id'=>$data->role_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_name')); ?>:</b>
	<?php echo CHtml::encode($data->role_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_desc')); ?>:</b>
	<?php echo CHtml::encode($data->role_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>