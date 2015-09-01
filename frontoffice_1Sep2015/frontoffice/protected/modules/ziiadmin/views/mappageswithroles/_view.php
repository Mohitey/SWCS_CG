<?php
/* @var $this MappageswithrolesController */
/* @var $data MapRolesPages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('map_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->map_id), array('view', 'id'=>$data->map_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?>:</b>
	<?php echo CHtml::encode($data->role_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_page_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_page_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>