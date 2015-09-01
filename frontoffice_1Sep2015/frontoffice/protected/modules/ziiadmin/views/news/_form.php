<?php
/* @var $this NewsController */
/* @var $model ManageNews */
/* @var $form CActiveForm */

$js = Yii::app()->getClientScript();
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/ckeditor.js');
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/adapters/jquery.js');
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/adapters/jqueryui.js');
?>
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/jqueryui/jquery-ui.css" rel="stylesheet">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'manage-news-form',
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
		        <?php echo $form->labelEx($model,'news_heading'); ?>
		        <div class="formRight">
		        <?php echo $form->textArea($model,'news_heading',array('rows'=>6, 'cols'=>50)); ?>
		        <?php echo $form->error($model,'news_heading'); ?>
	            </div>
                    <div class="clear"></div>
	        </div>

	        <div class="formRow">
		        <?php echo $form->labelEx($model,'news_desc'); ?>
		        <div class="formRight">
		            <?php echo $form->textArea($model,'news_desc',array('rows'=>6, 'cols'=>50)); ?>
		            <?php echo $form->error($model,'news_desc'); ?>
		             </div>
                        <div class="clear"></div>
	            </div>
				<script type="text/javascript">
                        CKEDITOR.replace('ManageNews_news_desc', {
                            fullPage: true,
                            allowedContent: true
                        }); 
                   </script>
    	</div>
			
    	<?php
            foreach($allLang as $i=>$v) { ?>           
	            <div id="tabs-<?=$v['lang_id'];?>">
	                <div class="formRow">
		                <?php echo $form->labelEx($model,'news_heading'.$v['lang_id']); ?>
		                <div class="formRight">
		                <?php echo $form->textArea($model,'news_heading'.$v['lang_id'],array('rows'=>6, 'cols'=>50)); ?>
		                <?php echo $form->error($model,'news_heading'.$v['lang_id']); ?>
	                                    </div>
                            <div class="clear"></div>
	                </div>

	                <div class="formRow">
		                <?php echo $form->labelEx($model,'news_desc'.$v['lang_id']); ?>
		                <div class="formRight">
		                    <?php echo $form->textArea($model,'news_desc'.$v['lang_id'],array('rows'=>6, 'cols'=>50)); ?>
		                    <?php echo $form->error($model,'news_desc'.$v['lang_id']); ?>
		                     </div>
                                <div class="clear"></div>
	                    </div>
						<script type="text/javascript">
                        CKEDITOR.replace('ManageNews_news_desc'+<?=$v['lang_id'];?>, {
                            fullPage: true,
                            allowedContent: true
                        }); 
                   </script>
	            </div>
	    <?php  } ?>
    </div>
    
	<div class="row">
        <div class="widget">
            <div class="title"><img src="<?php echo BACKENT_THEME_URL; ?>/images/icons/dark/files.png" alt="" class="titleIcon" /><h6>File Manager</h6></div>
            <div id="fm"></div>
        </div>
    </div>

    <div class="formRow">
		<label>Image Path: </label>
        <div class="formRow">
            <input type="text" value="<?php echo $model->image; ?>" name="ManageNews[image]" />
            <div id="clear"></div>
        </div>
    </div>


	<div class="formRow">
		<label>Data Type: </label>
        <div class="formRow">
            <?php echo CHtml::dropDownList('ManageNews[data_type]', $model, 
              array('N' => 'News', 'I' => 'Intitiative','S'=>'Speech','M'=>'Message'));
              ?>
            <div id="clear"></div>
        </div>
    </div>
    
    <div class="formRow">
	<label>News Date</label>
        <div class="formRight">
	<input size="6" readonly="readonly" value="<?php echo $model->added_date; ?>" name="ManageNews[added_date]" style="width:200px;" type="text" id="datepicker">
	<?php echo $form->error($model,'added_date'); ?>
	 </div>
            <div class="clear"></div>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add News' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    $( "#tabs" ).tabs();
    $( "#datepicker" ).datepicker();    
    $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    $( "#datepicker" ).val("<?php echo $model->added_date; ?>")
    
</script>
</script>
