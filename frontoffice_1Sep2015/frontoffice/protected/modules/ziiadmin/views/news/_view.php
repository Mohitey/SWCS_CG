<?php
/* @var $this NewsController */
/* @var $data ManageNews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->news_id), array('view', 'id'=>$data->news_id)); ?>
	<br />

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('added_by')); ?>:</b>
	<?php //echo CHtml::encode($data->added_by); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_heading')); ?>:</b>
	<?php echo CHtml::encode($data->news_heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_desc')); ?>:</b>
	<?php echo CHtml::encode($data->news_desc); ?>
	<br />

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php //echo CHtml::encode($data->image); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_date')); ?>:</b>
	<?php echo CHtml::encode($data->added_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>