<?php
/* @var $this PagecategoriesController */
/* @var $model PageCategories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-categories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pcat_name'); ?>
		<?php echo $form->textField($model,'pcat_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pcat_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pcal_desc'); ?>
		<?php echo $form->textField($model,'pcal_desc',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'pcal_desc'); ?>
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