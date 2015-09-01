<?php
/* @var $this SmtpController */
/* @var $data Smpt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sid), array('view', 'id'=>$data->sid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smtp_host')); ?>:</b>
	<?php echo CHtml::encode($data->smtp_host); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smtp_post')); ?>:</b>
	<?php echo CHtml::encode($data->smtp_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smtp_user')); ?>:</b>
	<?php echo CHtml::encode($data->smtp_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smtp_pass')); ?>:</b>
	<?php echo CHtml::encode($data->smtp_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smtp_auth_needed')); ?>:</b>
	<?php echo CHtml::encode($data->smtp_auth_needed); ?>
	<br />


</div>