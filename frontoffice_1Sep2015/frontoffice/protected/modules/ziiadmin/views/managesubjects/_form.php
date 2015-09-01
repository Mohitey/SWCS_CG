<?php
/* @var $this ManagesubjectsController */
/* @var $model ManageSubjects */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/jqueryui/jquery-ui.css" rel="stylesheet">
<script type="text/javascript">
	var BACKENT_THEME_URL = '<?php echo BACKENT_THEME_URL; ?>';
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'manage-subjects-form',
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
				<?php echo $form->labelEx($model,'subject'); ?>
				<div class="formRight"><?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>99)); ?>
				<?php echo $form->error($model,'subject'); ?>
							</div>
					<div class="clear"></div>
			</div>
			
    	</div>
    	
    	<?php
	          foreach($allLang as $i=>$v) { ?>
	                <div id="tabs-<?=$v['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'subject'.$v['lang_id']); ?>
							<div class="formRight"><?php echo $form->textField($model,'subject'.$v['lang_id'],array('size'=>60,'maxlength'=>99)); ?>
							<?php echo $form->error($model,'subject'.$v['lang_id']); ?>
										</div> 
								<div class="clear"></div>
						</div>
						
	                </div>
	    <?php  } ?>
    </div>
	
	
	<div class="formRow">
            <label><?php echo $form->labelEx($model,'is_active'); ?></label>
            <div class="formRight">
                <?php                     
                    echo "<label style='margin-right:6px'>Active:</label>".$form->radioButton($model, 'is_active', array(
                        'value'=>1,
                        'uncheckValue'=>null
                    ));
                    
                    echo "<label style='margin-left:10px;margin-rigt:10px'>Inactive:</label>".$form->radioButton($model, 'is_active', array(
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
<script type="text/javascript">
	$( "#tabs" ).tabs();
    $( "#tabs2" ).tabs();
</script>