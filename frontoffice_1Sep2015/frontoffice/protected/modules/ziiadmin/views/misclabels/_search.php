<?php
/* @var $this MiscLabelsController */
/* @var $model MiscLabels */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label1'); ?>
		<?php echo $form->textField($model,'label1',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label2'); ?>
		<?php echo $form->textField($model,'label2',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label3'); ?>
		<?php echo $form->textField($model,'label3',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label4'); ?>
		<?php echo $form->textField($model,'label4',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->