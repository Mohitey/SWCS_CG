<?php
/* @var $this SmtpController */
/* @var $model Smpt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sid'); ?>
		<?php echo $form->textField($model,'sid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smtp_host'); ?>
		<?php echo $form->textField($model,'smtp_host',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smtp_post'); ?>
		<?php echo $form->textField($model,'smtp_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smtp_user'); ?>
		<?php echo $form->textField($model,'smtp_user',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smtp_pass'); ?>
		<?php echo $form->textField($model,'smtp_pass',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smtp_auth_needed'); ?>
		<?php echo $form->textField($model,'smtp_auth_needed',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->