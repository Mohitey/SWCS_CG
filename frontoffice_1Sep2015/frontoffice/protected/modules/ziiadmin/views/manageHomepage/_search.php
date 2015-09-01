<?php
/* @var $this ManageHomepageController */
/* @var $model ManageHomepage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'content_id'); ?>
		<?php echo $form->textField($model,'content_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block1_after_slider_heading'); ?>
		<?php echo $form->textField($model,'block1_after_slider_heading',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block1_after_slider_desc'); ?>
		<?php echo $form->textArea($model,'block1_after_slider_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block1_after_slider_read_more_link'); ?>
		<?php echo $form->textField($model,'block1_after_slider_read_more_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block2_after_slider_heading'); ?>
		<?php echo $form->textField($model,'block2_after_slider_heading',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block2_after_slider_desc'); ?>
		<?php echo $form->textArea($model,'block2_after_slider_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block2_after_slider_read_more_link'); ?>
		<?php echo $form->textField($model,'block2_after_slider_read_more_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block3_after_slider_heading'); ?>
		<?php echo $form->textField($model,'block3_after_slider_heading',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block3_after_slider_desc'); ?>
		<?php echo $form->textArea($model,'block3_after_slider_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block3_after_slider_read_more_link'); ?>
		<?php echo $form->textField($model,'block3_after_slider_read_more_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block_after_slider_main_heading'); ?>
		<?php echo $form->textField($model,'block_after_slider_main_heading',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minitster_image'); ?>
		<?php echo $form->textField($model,'homepage_minitster_image',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_name'); ?>
		<?php echo $form->textField($model,'homepage_minister_name',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_name2'); ?>
		<?php echo $form->textField($model,'homepage_minister_name2',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_name3'); ?>
		<?php echo $form->textField($model,'homepage_minister_name3',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_name4'); ?>
		<?php echo $form->textField($model,'homepage_minister_name4',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_designation4'); ?>
		<?php echo $form->textField($model,'homepage_minister_designation4',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_name5'); ?>
		<?php echo $form->textField($model,'homepage_minister_name5',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_designation'); ?>
		<?php echo $form->textField($model,'homepage_minister_designation',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_designation2'); ?>
		<?php echo $form->textField($model,'homepage_minister_designation2',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_designation3'); ?>
		<?php echo $form->textField($model,'homepage_minister_designation3',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_designation5'); ?>
		<?php echo $form->textField($model,'homepage_minister_designation5',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minsiter_message'); ?>
		<?php echo $form->textArea($model,'homepage_minsiter_message',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minsiter_message2'); ?>
		<?php echo $form->textArea($model,'homepage_minsiter_message2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minsiter_message3'); ?>
		<?php echo $form->textArea($model,'homepage_minsiter_message3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minsiter_message4'); ?>
		<?php echo $form->textArea($model,'homepage_minsiter_message4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minsiter_message5'); ?>
		<?php echo $form->textArea($model,'homepage_minsiter_message5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_minister_readmore_link'); ?>
		<?php echo $form->textField($model,'homepage_minister_readmore_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home'); ?>
		<?php echo $form->textField($model,'home',array('size'=>60,'maxlength'=>99)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_footer_aboutus'); ?>
		<?php echo $form->textArea($model,'homepage_footer_aboutus',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_us_email'); ?>
		<?php echo $form->textField($model,'contact_us_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_us_phone'); ?>
		<?php echo $form->textField($model,'contact_us_phone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_us_address'); ?>
		<?php echo $form->textArea($model,'contact_us_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_text'); ?>
		<?php echo $form->textField($model,'homepage_text',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_text1'); ?>
		<?php echo $form->textField($model,'homepage_text1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_text2'); ?>
		<?php echo $form->textField($model,'homepage_text2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_text3'); ?>
		<?php echo $form->textField($model,'homepage_text3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_text4'); ?>
		<?php echo $form->textField($model,'homepage_text4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_updated_on'); ?>
		<?php echo $form->textField($model,'last_updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by',array('size'=>10,'maxlength'=>10)); ?>
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