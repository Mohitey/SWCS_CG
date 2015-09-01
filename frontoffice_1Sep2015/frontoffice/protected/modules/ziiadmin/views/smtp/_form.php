<?php
/* @var $this SmtpController */
/* @var $model Smpt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'smpt-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'smtp_host'); ?>
		<?php echo $form->textField($model,'smtp_host',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'smtp_host'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'smtp_post'); ?>
		<?php echo $form->textField($model,'smtp_post'); ?>
		<?php echo $form->error($model,'smtp_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'smtp_user'); ?>
		<?php echo $form->textField($model,'smtp_user',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'smtp_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'smtp_pass'); ?>
		<?php echo $form->textField($model,'smtp_pass',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'smtp_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'smtp_auth_needed'); ?>
		<?php echo $form->textField($model,'smtp_auth_needed',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'smtp_auth_needed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->