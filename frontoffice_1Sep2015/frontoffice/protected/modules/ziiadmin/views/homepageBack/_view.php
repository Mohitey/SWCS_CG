<?php
/* @var $this HomepageController */
/* @var $data ManageHomepage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->content_id), array('view', 'id'=>$data->content_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_image')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_image_title')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_image_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated_on')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>