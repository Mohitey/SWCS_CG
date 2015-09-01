<?php
/* @var $this HomepagesliderController */
/* @var $model homepageslider */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
			var BACKENT_THEME_URL = '<?php echo BACKENT_THEME_URL; ?>';
		</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'homepageslider-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
		<?php echo $form->labelEx($model,'image_caption'); ?>
		<div class="formRight"><?php echo $form->textField($model,'image_caption',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image_caption'); ?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="row">
		<div class="widget">
			<div class="title"><img src="<?php echo BACKENT_THEME_URL; ?>/images/icons/dark/files.png" alt="" class="titleIcon" /><h6>File Manager</h6></div>
			<div id="fm"></div>
		</div>
	</div>
	<div class="formRow">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<div class="formRight"><?php echo $form->textField($model,'image_path',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'image_path'); ?></div>
		<div class="clear"></div>
	</div>

	<!--<div class="formRow">
		<?php //echo $form->labelEx($model,'added_date'); ?>
		<div class="formRight"><?php //echo $form->textField($model,'added_date'); ?>
		<?php //echo $form->error($model,'added_date'); ?></div>
		<div class="clear"></div>
	</div>-->
	
	<div class="formRow">
		<?php echo $form->labelEx($model,'order_number'); ?>
		<div class="formRight"><?php echo $form->textField($model,'order_number'); ?>
		<?php echo $form->error($model,'order_number'); ?></div>
		<div class="clear"></div>
	</div>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'is_active'); ?></label>
            <div class="formRight">
                <?php                     
                    echo "<label>Active:</label>".$form->radioButton($model, 'is_active', array(
                        'value'=>1,
                        'uncheckValue'=>null
                    ));
                    
                    echo "<label>Inactive:</label>".$form->radioButton($model, 'is_active', array(
                        'value'=>0,
                        'uncheckValue'=>null
                    ));
                ?>
		<?php echo $form->error($model,'is_active'); ?>
            </div>
            <div class="clear"></div>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->