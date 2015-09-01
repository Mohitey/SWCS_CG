<?php
/* @var $this FormfieldsController */
/* @var $model FormFieldName */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'field_id'); ?>
		<?php echo $form->textField($model,'field_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field_name'); ?>
		<?php echo $form->textField($model,'field_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field_label'); ?>
		<?php echo $form->textField($model,'field_label',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field_type'); ?>
		<?php echo $form->textArea($model,'field_type',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'field_size'); ?>
		<?php echo $form->textField($model,'field_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_value'); ?>
		<?php echo $form->textField($model,'default_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_required'); ?>
		<?php echo $form->textField($model,'is_required',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->