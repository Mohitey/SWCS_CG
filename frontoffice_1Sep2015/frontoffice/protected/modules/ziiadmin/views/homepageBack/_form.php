<?php
/* @var $this HomepageController */
/* @var $model ManageHomepage */
/* @var $form CActiveForm */

$js=Yii::app()->getClientScript();
$js->registerScriptFile(Yii::app()->baseUrl.'/ckeditor/ckeditor.js');
$js->registerScriptFile(Yii::app()->baseUrl.'/ckeditor/adapters/jquery.js');

?>
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/jqueryui/jquery-ui.css" rel="stylesheet">
<script type="text/javascript">
	var BACKENT_THEME_URL = '<?php echo BACKENT_THEME_URL; ?>';
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'manage-homepage-form',
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
				<?php echo $form->labelEx($model,'homepage_center_title'); ?>
				<div class="formRight"><?php echo $form->textField($model,'homepage_center_title',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'homepage_center_title'); ?>
							</div>
					<div class="clear"></div>
			</div>
			
    	</div>
    	
    	<?php
	          foreach($allLang as $i=>$v) { ?>
	                <div id="tabs-<?=$v['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'homepage_center_title'.$v['lang_id']); ?>
							<div class="formRight"><?php echo $form->textField($model,'homepage_center_title'.$v['lang_id'],array('size'=>60,'maxlength'=>255)); ?>
							<?php echo $form->error($model,'homepage_center_title'.$v['lang_id']); ?>
										</div> 
								<div class="clear"></div>
						</div>
						
	                </div>
	    <?php  } ?>
    </div>

	<div id="tabs2">
	    <ul>
		    <li><a href="#tabs-O">English</a></li>
		    <?php
	            $allLang = Utility::getAllLanguages();
	            foreach($allLang as $k=>$val) {
	                echo '<li><a href="#tabs-'.$val['lang_id'].'">'.$val['lang_name'].'</a></li>';
	            }
	        ?>
	    </ul>
	    <div id="tabs-O">
	       <div class="formRow">
			<?php echo $form->labelEx($model,'homepage_center_content'); ?>
			<div class="formRight"><?php echo $form->textArea($model,'homepage_center_content',array('cols'=>16,'rows'=>20)); ?>
			<?php echo $form->error($model,'homepage_center_content'); ?>
						</div>
				<div class="clear"></div>
		</div>
    	</div>
    	
    	
    	<?php
	          foreach($allLang as $y=>$c) { ?>
	                <div id="tabs-<?=$c['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'homepage_center_content'.$c['lang_id']); ?>
							<div class="formRight"><?php echo $form->textArea($model,'homepage_center_content'.$c['lang_id'],array('cols'=>16,'rows'=>20)); ?>
							<?php echo $form->error($model,'homepage_center_content'.$c['lang_id']); ?>
										</div>
								<div class="clear"></div>
						</div>
	                </div>
	                
	                <script type="text/javascript">
                        CKEDITOR.replace('ManageHomepage_homepage_center_content'+<?=$c['lang_id'];?>, {
                            fullPage: true,
                            allowedContent: true
                        }); 
                   </script>
	    <?php  } ?>
    </div>
    
    <div id="tabs3">
	    <ul>
		    <li><a href="#tabs-P">English</a></li>
		    <?php
	            $allLang = Utility::getAllLanguages();
	            foreach($allLang as $k=>$val) {
	                echo '<li><a href="#tabs-'.$val['lang_id'].'">'.$val['lang_name'].'</a></li>';
	            }
	        ?>
	    </ul>
	    <div id="tabs-P">
	       <div class="formRow">
			<?php echo $form->labelEx($model,'homepage_image_title'); ?>
			<div class="formRight"><?php echo $form->textField($model,'homepage_image_title',array('size'=>60,'maxlength'=>99)); ?>
			<?php echo $form->error($model,'homepage_image_title'); ?>
						</div>
				<div class="clear"></div>
		</div>
    	</div>
    	
    	
    	<?php
	          foreach($allLang as $y=>$c) { ?>
	                <div id="tabs-<?=$c['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'homepage_image_title'.$c['lang_id']); ?>
							<div class="formRight"><?php echo $form->textField($model,'homepage_image_title'.$c['lang_id'],array('size'=>60,'maxlength'=>99)); ?>
							<?php echo $form->error($model,'homepage_image_title'.$c['lang_id']); ?>
										</div>
								<div class="clear"></div>
						</div>
	                </div>
	                
	    <?php  } ?>
    </div>
	

	
	<div class="row">
		<div class="widget">
			<div class="title"><img src="<?php echo BACKENT_THEME_URL; ?>/images/icons/dark/files.png" alt="" class="titleIcon" /><h6>File Manager</h6></div>
			<div id="fm"></div>
		</div>
	</div>

	
	<div id="tabs4">
	    <ul>
		    <li><a href="#tabs-TT">English</a></li>
		    <?php
	            $allLang = Utility::getAllLanguages();
	            foreach($allLang as $k=>$val) {
	                echo '<li><a href="#tabs-'.$val['lang_id'].'">'.$val['lang_name'].'</a></li>';
	            }
	        ?>
	    </ul>
	    <div id="tabs-TT">
	       <div class="formRow">
				<?php echo $form->labelEx($model,'homepage_image'); ?>
				<div class="formRight"><?php echo $form->textField($model,'homepage_image',array('size'=>255,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'homepage_image'); ?>
				</div>
				<div class="clear"></div>
			</div>
    	</div>
    	<?php
	          foreach($allLang as $y=>$c) { ?>
	                <div id="tabs-<?=$c['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'homepage_image'.$c['lang_id']); ?>
							<div class="formRight"><?php echo $form->textField($model,'homepage_image'.$c['lang_id'],array('size'=>255,'maxlength'=>255)); ?>
							<?php echo $form->error($model,'homepage_image'.$c['lang_id']); ?>
										</div>
								<div class="clear"></div>
						</div>
	                </div>
	                
	    <?php  } ?>
    </div>	
	
	
	<div id="tabs4">
	    <ul>
		    <li><a href="#tabs-T">English</a></li>
		    <?php
	            $allLang = Utility::getAllLanguages();
	            foreach($allLang as $k=>$val) {
	                echo '<li><a href="#tabs-'.$val['lang_id'].'">'.$val['lang_name'].'</a></li>';
	            }
	        ?>
	    </ul>
	    <div id="tabs-T">
	       <div class="formRow">
			<?php echo $form->labelEx($model,'homepage_text'); ?>
			<div class="formRight"><?php echo $form->textField($model,'homepage_text',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'homepage_text'); ?>
						</div>
				<div class="clear"></div>
		</div>
    	</div>
    	
    	
    	<?php
	          foreach($allLang as $y=>$c) { ?>
	                <div id="tabs-<?=$c['lang_id'];?>">
	                    <div class="formRow">
							<?php echo $form->labelEx($model,'homepage_text'.$c['lang_id']); ?>
							<div class="formRight"><?php echo $form->textField($model,'homepage_text'.$c['lang_id'],array('size'=>255,'maxlength'=>255)); ?>
							<?php echo $form->error($model,'homepage_text'.$c['lang_id']); ?>
										</div>
								<div class="clear"></div>
						</div>
	                </div>
	                
	    <?php  } ?>
    </div>

	

	<!--<div class="formRow">
            <label><?php //echo $form->labelEx($model,'last_updated_on'); ?></label>
		<div class="formRight"><?php //echo $form->textField($model,'last_updated_on'); ?>
		<?php //echo $form->error($model,'last_updated_on'); ?>
                    </div>
            <div class="clear"></div>
	</div>

	<div class="formRow">
            <label><?php //echo $form->labelEx($model,'updated_by'); ?></label>
		<div class="formRight"><?php //echo $form->textField($model,'updated_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'updated_by'); ?>
                    </div>
            <div class="clear"></div>
	</div>-->

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


<script type="text/javascript">
    CKEDITOR.replace( 'ManageHomepage_homepage_center_content', {
            fullPage: true,
            allowedContent: true
    });
	
	$( "#tabs" ).tabs();
    $( "#tabs2" ).tabs();
    $( "#tabs3" ).tabs();
    $( "#tabs4" ).tabs();
</script>
