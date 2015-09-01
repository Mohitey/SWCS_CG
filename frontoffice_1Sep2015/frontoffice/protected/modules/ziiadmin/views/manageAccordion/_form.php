<?php
/* @var $this ManageAccordionController */
/* @var $model ManageAccordion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'manage-accordion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'acc_title'); ?>
		<?php echo $form->textField($model,'acc_title',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'acc_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acc_descr'); ?>
		<?php echo $form->textArea($model,'acc_descr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'acc_descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_by'); ?>
		<?php echo $form->textField($model,'added_by'); ?>
		<?php echo $form->error($model,'added_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acc_order'); ?>
		<?php echo $form->textField($model,'acc_order'); ?>
		<?php echo $form->error($model,'acc_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_date'); ?>
		<?php echo $form->textField($model,'updated_date'); ?>
		<?php echo $form->error($model,'updated_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->