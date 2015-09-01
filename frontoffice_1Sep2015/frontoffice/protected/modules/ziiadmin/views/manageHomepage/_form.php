<?php
/* @var $this ManageHomepageController */
/* @var $model ManageHomepage */
/* @var $form CActiveForm */
$js = Yii::app()->getClientScript();
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/ckeditor.js');
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/adapters/jquery.js');
?>
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/jqueryui/jquery-ui.css" rel="stylesheet">

<style type="text/css">
    .stub{
        background-color: #F49F43;
        text-decoration: none;
        color: #fff;
        position: relative;
        top:-19px;
        left:50px;
    }
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'manage-homepage-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php
    if (isset($error)) {
        echo '<div class="errorSummary"><p>Please fix the following input errors:</p>
                <ul>
                <li>' . $error . '</li>
            </ul>
        </div>';
    }
    ?>

	
    <div class="formRow">
		<?php echo $form->labelEx($model,'block_after_slider_main_heading'); ?>
		<div class="formRight"><?php echo $form->textField($model,'block_after_slider_main_heading',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block_after_slider_main_heading'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>
	<div class="formRow">
		<?php echo $form->labelEx($model,'block1_after_slider_heading'); ?>
		 <div class="formRight">
		<?php echo $form->textField($model,'block1_after_slider_heading',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block1_after_slider_heading'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block1_after_slider_desc'); ?>
		 <div class="formRight">
		<?php echo $form->textArea($model,'block1_after_slider_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'block1_after_slider_desc'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block1_after_slider_read_more_link'); ?>
		 <div class="formRight">
		<?php echo $form->textField($model,'block1_after_slider_read_more_link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block1_after_slider_read_more_link'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block2_after_slider_heading'); ?>
		 <div class="formRight">
		<?php echo $form->textField($model,'block2_after_slider_heading',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block2_after_slider_heading'); ?>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block2_after_slider_desc'); ?>
		 <div class="formRight">
		<?php echo $form->textArea($model,'block2_after_slider_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'block2_after_slider_desc'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block2_after_slider_read_more_link'); ?>
		 <div class="formRight">
		<?php echo $form->textField($model,'block2_after_slider_read_more_link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block2_after_slider_read_more_link'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block3_after_slider_heading'); ?>
		<div class="formRight"><?php echo $form->textField($model,'block3_after_slider_heading',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block3_after_slider_heading'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block3_after_slider_desc'); ?>
		<div class="formRight"><?php echo $form->textArea($model,'block3_after_slider_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'block3_after_slider_desc'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'block3_after_slider_read_more_link'); ?>
		<div class="formRight"><?php echo $form->textField($model,'block3_after_slider_read_more_link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block3_after_slider_read_more_link'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	

	<div class="formRow">
		<?php echo $form->labelEx($model,'homepage_minitster_image'); ?>
        <?php echo "<input type='hidden' name='old_file_name' value='".$model->homepage_minitster_image."'>";?>
		<div class="formRight"><?php echo $form->fileField($model,'homepage_minitster_image'); ?>
		<?php echo $form->error($model,'homepage_minitster_image'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'homepage_minister_name'); ?>
		<div class="formRight"><?php echo $form->textField($model,'homepage_minister_name',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'homepage_minister_name'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	

	<div class="formRow">
		<?php echo $form->labelEx($model,'homepage_minister_designation'); ?>
		<div class="formRight"><?php echo $form->textField($model,'homepage_minister_designation',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'homepage_minister_designation'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>
	
	<div class="formRow">
		<?php echo $form->labelEx($model,'homepage_minsiter_message'); ?>
		<div class="formRight"><?php echo $form->textArea($model,'homepage_minsiter_message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'homepage_minsiter_message'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	
	<div class="formRow">
		<?php echo $form->labelEx($model,'homepage_minister_readmore_link'); ?>
		<div class="formRight"><?php echo $form->textField($model,'homepage_minister_readmore_link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'homepage_minister_readmore_link'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>


	<div class="formRow">
		<?php echo $form->labelEx($model,'homepage_footer_aboutus'); ?>
		<div class="formRight"><?php echo $form->textArea($model,'homepage_footer_aboutus',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'homepage_footer_aboutus'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'contact_us_email'); ?>
		<div class="formRight"><?php echo $form->textField($model,'contact_us_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contact_us_email'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'contact_us_phone'); ?>
		<div class="formRight"><?php echo $form->textField($model,'contact_us_phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contact_us_phone'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'contact_us_address'); ?>
		<div class="formRight"><?php echo $form->textArea($model,'contact_us_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'contact_us_address'); ?>
		</div>
        <div class="clear"></div>
        <div id='image_caption_error' style='padding-left:190px'></div>
	</div>
	<div class="formRow">
        <label><?php echo $form->labelEx($model, 'is_active'); ?></label>
        <div class="formRight">
            <?php
            echo "<label>Active:</label>" . $form->radioButton($model, 'is_active', array(
                'value' => 1,
                'uncheckValue' => null
            ));

            echo "<label>Inactive:</label>" . $form->radioButton($model, 'is_active', array(
                'value' => 0,
                'uncheckValue' => null
            ));
            ?>
<?php echo $form->error($model, 'is_active'); ?>
        </div>
        <div class="clear"></div>
    </div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"wButton purplewB ml15 m10")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->