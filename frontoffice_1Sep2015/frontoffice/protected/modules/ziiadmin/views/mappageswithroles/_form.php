<?php
/* @var $this MappageswithrolesController */
/* @var $model MapRolesPages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'map-roles-pages-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php echo $errorMessage; ?>
	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
		<?php echo $form->labelEx($model,'role_id'); ?>
		<div class="formRight">
		<?php  echo $form->dropDownList($model, 'role_id', CHtml::listData(Roles::model()->findAll(), 'role_id', 'role_name')); ?>
		<?php //echo $form->textField($model,'role_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'role_id'); ?>
	</div>
            <div class="clear"></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'parent_page_id'); ?>
		<div class="formRight">
		<?php  echo $form->dropDownList($model, 'parent_page_id', CHtml::listData(PageInfo::model()->findAll(), 'page_id', 'page_name')); ?>
		<?php //echo $form->textField($model,'parent_page_id'); ?>
		<?php echo $form->error($model,'parent_page_id'); ?>
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
