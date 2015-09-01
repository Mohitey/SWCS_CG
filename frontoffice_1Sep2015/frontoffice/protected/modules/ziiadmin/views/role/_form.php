<?php
/* @var $this RoleController */
/* @var $model Roles */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
    function submitForm(){
        $("#roles-form").submit();
    }
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'role_name'); ?></label>
            <div class="formRight"><?php echo $form->textField($model,'role_name',array('size'=>32,'maxlength'=>32)); ?>
            <?php echo $form->error($model,'role_name'); ?>
            </div>
            <div class="clear"></div>
	</div>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'role_desc'); ?></label>
            <div class="formRight"><?php echo $form->textField($model,'role_desc',array('size'=>60,'maxlength'=>512)); ?>
            <?php echo $form->error($model,'role_desc'); ?>
            </div>
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
		<?php 
                    //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); 
                ?>
            <a href="javascript:submitForm();" title="" class="wButton purplewB ml15 m10"><span>Save</span></a>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->