<?php
/* @var $this ManageAccordionController */
/* @var $model ManageAccordion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'acc_id'); ?>
		<?php echo $form->textField($model,'acc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acc_title'); ?>
		<?php echo $form->textField($model,'acc_title',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acc_descr'); ?>
		<?php echo $form->textArea($model,'acc_descr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_by'); ?>
		<?php echo $form->textField($model,'added_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acc_order'); ?>
		<?php echo $form->textField($model,'acc_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_date'); ?>
		<?php echo $form->textField($model,'updated_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->