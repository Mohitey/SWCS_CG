<?php
/* @var $this FormfieldsController */
/* @var $model FormFieldName */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-field-name-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="formRow">
		<?php echo $form->labelEx($model,'form_id'); ?>
		<div class="formRight">
		<?php //echo $form->textField($model,'form_id',array('size'=>32,'maxlength'=>32)); ?>
		<?php  echo $form->dropDownList($model, 'form_id', CHtml::listData(FormInfo::model()->findAll(), 'form_id', 'form_name')); ?>
		<?php echo $form->error($model,'form_id'); ?>
	 </div>
            <div class="clear"></div>
	</div>
	
	<div class="formRow">
		<?php echo $form->labelEx($model,'field_label'); ?>
		<div class="formRight">
		<?php echo $form->textField($model,'field_label',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'field_label'); ?>
	 </div>
            <div class="clear"></div>
	</div>

	
	<div class="formRow">
		<?php echo $form->labelEx($model,'field_name'); ?>
		<div class="formRight">
		<?php echo $form->textField($model,'field_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'field_name'); ?>
	 </div>
            <div class="clear"></div>
	</div>

	
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'field_type'); ?>
		<?php //echo $form->textArea($model,'field_type',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'field_type'); ?>
	</div>-->
	
	<div class="formRow">
		<?php echo $form->labelEx($model,'field_type'); ?>
		<div class="formRight">
		<?php 
            echo CHtml::dropDownList('FormFieldName[field_type]', $model, 
                 array('Text'=>'Text (eg Desc)','Float'=>'Float (eg Price)','Varchar'=>'Varchar (Eg Name)','Date'=>'Date (eg Date of Birth)','Integer'=>'Integer (eg Mobile)','Boolean'=>'Boolean (eg Yes/No)'));
            //echo $form->textField($model,'pml_field_type',array('size'=>60, 'maxlength'=>128)); 
        ?>
		<?php echo $form->error($model,'field_type'); ?>
	</div>
            <div class="clear"></div>
	</div>


	<div class="formRow">
		<?php echo $form->labelEx($model,'field_size'); ?>
		<div class="formRight">
		<?php echo $form->textField($model,'field_size'); ?>
		<?php echo $form->error($model,'field_size'); ?>
	</div>
            <div class="clear"></div>
	</div>
	


	<div class="formRow">
		<?php echo $form->labelEx($model,'default_value'); ?>
		<div class="formRight">
		<?php echo $form->textField($model,'default_value'); ?>
		<?php echo $form->error($model,'default_value'); ?>
	</div>
            <div class="clear"></div>
	</div>

	
	
	<div class="formRow">
		<?php echo $form->labelEx($model,'is_required'); ?>
		<div class="formRight">
		<?php 
            echo CHtml::dropDownList('FormFieldName[is_required]', $model, 
                 array('0'=>'No','1'=>'Yes'));
            //echo $form->textField($model,'is_required',array('size'=>1,'maxlength'=>1)); 
        ?>
		<?php echo $form->error($model,'is_required'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->