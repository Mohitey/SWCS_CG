<?php
/* @var $this HomepagesliderController */
/* @var $model homepageslider */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'image_id'); ?>
		<?php echo $form->textField($model,'image_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_caption'); ?>
		<?php echo $form->textField($model,'image_caption',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_path'); ?>
		<?php echo $form->textField($model,'image_path',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_date'); ?>
		<?php echo $form->textField($model,'added_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_date'); ?>
		<?php echo $form->textField($model,'updated_date'); ?>
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