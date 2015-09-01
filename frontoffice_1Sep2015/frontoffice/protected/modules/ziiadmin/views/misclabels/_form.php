<?php
/* @var $this MiscLabelsController */
/* @var $model MiscLabels */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/jqueryui/jquery-ui.css" rel="stylesheet">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'misc-labels-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	
	<div id="tabs">
	    <ul>
		    <li><a href="#tabs-0">English</a></li>
		    <?php
	            $allLang = Utility::getAllLanguages();
	            foreach($allLang as $k=>$val) {
	                echo '<li><a href="#tabs-'.$val['lang_id'].'">'.$val['lang_name'].'</a></li>';
	            }
	        ?>
	    </ul>
	    <div id="tabs-0">
	       <div class="formRow">
				<?php echo $form->labelEx($model,'label'); ?>
				<div class="formRight"><?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>99)); ?>
				<?php echo $form->error($model,'label'); ?>
							</div>
					<div class="clear"></div>
			</div>
			
    	</div>
    	
    	<?php
	          foreach($allLang as $i=>$v) { ?>
	                <div id="tabs-<?=$v['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'label'.$v['lang_id']); ?>
							<div class="formRight"><?php echo $form->textField($model,'label'.$v['lang_id'],array('size'=>60,'maxlength'=>99)); ?>
							<?php echo $form->error($model,'label'.$v['lang_id']); ?>
										</div> 
								<div class="clear"></div>
						</div>
						
	                </div>
	    <?php  } ?>
    </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
	$( "#tabs" ).tabs();
</script>
