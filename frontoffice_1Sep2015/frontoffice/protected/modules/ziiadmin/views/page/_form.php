<?php
/* @var $this PageController */
/* @var $model PageInfo */
/* @var $form CActiveForm */

$js = Yii::app()->getClientScript();
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/ckeditor.js');
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/adapters/jquery.js');
?>
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/jqueryui/jquery-ui.css" rel="stylesheet">
<script type="text/javascript">
    var PAGE_ID = '<?php echo $model->page_id;?>';
    var BACKENT_THEME_URL = '<?php echo BACKENT_THEME_URL; ?>';
</script>
<script type="text/javascript">
    function generateStub() {
        var pname = $("#PageInfo_page_name").val();
        pname = pname.replace(/<\/?[^>]+(>|$)/g, "");
        pname = pname.replace(/^\s+|\s+$/g, '');
        $("#PageInfo_page_name").val(pname);
        pname = pname.toLowerCase();
        //pname=pname.replace(/\s/g,"-");
        pname = pname.split('     ').join(' ');
        pname = pname.split('    ').join(' ');
        pname = pname.split('   ').join(' ');
        pname = pname.split('  ').join(' ');
        pname = pname.split(' ').join('-');
        $("#PageInfo_page_stub").val(pname);
    }
    var flag = 1;
    function editstub() {
        if (flag == 1) {
            $("#PageInfo_page_stub").attr("readonly", false);
            $("#PageInfo_page_stub").css("backgroundColor", "#fff");
            flag = 0;
        }
        else {
            $("#PageInfo_page_stub").attr("readonly", "readonly");
            $("#PageInfo_page_stub").css("backgroundColor", "#E4E4E4");
            flag = 1;
        }
    }
    function submitForm() {
        $("#page-info-form").submit();
    }
    function doesStubExist() {
        var stubName = $("#PageInfo_page_stub").val();
        var URL = "<?php echo Yii::app()->baseUrl;?>";
        stubName = $.trim(stubName);
        if(stubName.length>0){
            $.ajax({
                type: "get",
                url: URL+"/api/checkstubexistsornot/",
                data: {stub: stubName,pageId: PAGE_ID}
            })
            .done(function(msg) {
                msg = parseInt(msg);
                if (msg > 0) {
                    $("#PageInfo_page_stub").val("");
                    $("#page_stub_error").removeClass("clear");
                    $("#page_stub_error").addClass("errorMessage");
                    $("#page_stub_error").html("Stub name already exist. <span style='color:red;pointer:cursor' onclick='resetStubInput()'>X</span>");
                }
                else{
                    $("#page_stub_error").html("");
                }
            });
        }
    }
    function resetStubInput() {
        $("#page_stub_error").removeClass("errorMessage");
        $("#page_stub_error").addClass("clear");
        $("#PageInfo_page_stub").val("");
        $("#page_stub_error").html("");
    }
</script>
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

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'page-info-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

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
                <label><?php echo $form->labelEx($model, 'page_name'); ?> </label>
                <div class="formRight">
                    <?php echo $form->textField($model, 'page_name', array('size' => 60, 'maxlength' => 64, 'onkeyup' => 'generateStub()')); ?>
                    <?php echo $form->error($model, 'page_name'); ?>
                </div>
                <div class="clear"></div>
            </div>
    	</div>
    	
    	<?php
	          foreach($allLang as $i=>$v) { ?>
	                <div id="tabs-<?=$v['lang_id'];?>">
	                    <div class="formRow">
                            <label><?php echo $form->labelEx($model, 'page_name'.$v['lang_id']); ?> </label>
                            <div class="formRight">
                                <?php echo $form->textField($model, 'page_name'.$v['lang_id'], array('size' => 60, 'maxlength' => 64)); ?>
                                <?php echo $form->error($model, 'page_name'.$v['lang_id']); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
	                </div>
	    <?php  } ?>
    </div>


    <div class="formRow">
        <label>
            <?php echo $form->labelEx($model, 'page_stub'); ?>
            <a href="javascript:editstub()" title="Click here to edit stub" class="smallButton" style="margin: 5px;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/color/pencil.png" alt="Edit Stub" /></a>
        </label>
        <div class="formRight">
            <?php echo $form->textField($model, 'page_stub', array('readonly' => 'readonly', 'onBlur' => 'doesStubExist()', 'style' => 'background-color:#E4E4E4;', 'size' => 32, 'maxlength' => 32)); ?>
            <?php echo $form->error($model, 'page_stub'); ?>
        </div>
        <div class="clear"></div>
        <div id='page_stub_error' style='padding-left:190px'></div>
    </div>

    <div class="formRow">
        <label><?php echo $form->labelEx($model, 'page_keywords'); ?></label>
        <div class="formRight">
            <?php echo $form->textField($model, 'page_keywords', array('size' => 60, 'maxlength' => 128)); ?>
            <?php echo $form->error($model, 'page_keywords'); ?>
        </div>
        <div class="clear"></div>
    </div>


    <div class="formRow">
        <label><?php echo $form->labelEx($model, 'page_desc'); ?></label>
        <div class="formRight"><?php echo $form->textField($model, 'page_desc', array('size' => 60, 'maxlength' => 512)); ?>
            <?php echo $form->error($model, 'page_desc'); ?>
        </div>
        <div class="clear"></div>
    </div>

    <div class="formRow">
        <label><?php echo $form->labelEx($model, 'parent_id'); ?></label>
        <div class="formRight"><?php
            $pages = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('bo_page_info')
                    ->queryAll();
            // ->where('First_name like :name', array(':name'=>$_GET['name']))
            echo "<select id='PageInfo_parent_id' name='PageInfo[parent_id]'>";
            echo "<option value='0'>--No Parent--</option>";
            foreach ($pages as $k => $v) {
                if ($v['page_id'] == $model->parent_id) {
                    $sel = "selected='selected'";
                } else {
                    $sel = "";
                }
                echo "<option " . $sel . " value='" . $v['page_id'] . "'>" . $v['page_name'] . "</option>";
            }
            echo "</select>";
            //echo CHtml::dropDownList('PageInfo[parent_id]', $model->parent_id, $pages);
            ?>
            <?php echo $form->error($model, 'parent_id'); ?>
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
        <label><?php echo $form->labelEx($model, 'is_direct_link'); ?></label>
        <div class="formRight">
            <?php
            echo "<label>Yes:</label>" . $form->radioButton($model, 'is_direct_link', array(
                'value' => 'Y',
                'uncheckValue' => null
            ));

            echo "<label>No:</label>" . $form->radioButton($model, 'is_direct_link', array(
                'value' => 'N',
                'uncheckValue' => null
            ));
            ?>
<?php echo $form->error($model, 'is_direct_link'); ?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="formRow">
        <label><?php echo $form->labelEx($model, 'link_address'); ?></label>
        <div class="formRight">
            <?php echo $form->textField($model, 'link_address', array('size' => 60, 'maxlength' => 128)); ?>
            <?php echo $form->error($model, 'link_address'); ?>
        </div>
        <div class="clear"></div>
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
                <label><?php echo $form->labelEx($model, 'page_content'); ?></label>
                <div class="formRight"><?php echo $form->textArea($model, 'page_content', array('rows' => 6, 'cols' => 50)); ?>
                    <?php echo $form->error($model, 'page_content'); ?>
                </div>
                <div class="clear"></div>
            </div>
    	</div>
    	
    	
    	<?php
	          foreach($allLang as $y=>$c) { ?>
	                <div id="tabs-<?=$c['lang_id'];?>">
	                    <div class="formRow">
                            <label><?php echo $form->labelEx($model, 'page_content'.$c['lang_id']); ?></label>
                            <div class="formRight"><?php echo $form->textArea($model, 'page_content'.$c['lang_id'], array('rows' => 6, 'cols' => 50)); ?>
                                <?php echo $form->error($model, 'page_content'.$c['lang_id']); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
	                </div>
	                
	                <script type="text/javascript">
                        CKEDITOR.replace('PageInfo_page_content'+<?=$c['lang_id'];?>, {
                            fullPage: true,
                            allowedContent: true
                        }); 
                   </script>
	    <?php  } ?>
    </div>
    
    
    

    <div class="formRow">
        <label><?php echo $form->labelEx($model, 'pcat_id'); ?></label>
        <div class="formRight"><?php
            $categories = Utility::getAllCategories();
            if (isset($model->pcat_id)) {
                echo CHtml::dropDownList('PageInfo[pcat_id]', $model->pcat_id, $categories);
            } else {
                echo CHtml::listBox('PageInfo[pcat_id]', $model->pcat_id, $categories, array('multiple' => 'multiple'));
            }
            ?>
            <?php echo $form->error($model, 'pcat_id'); ?>
        </div>
        <div class="clear"></div>
    </div>

    <!--<div class="formRow">
        <label><?php //echo $form->labelEx($model,'page_order'); ?></label>
        <div class="formRight"><?php
    //$orderArray=Utility::getPageOrder($model->parent_id);
    //echo CHtml::dropDownList('PageInfo[page_order]', $model->page_order, $orderArray);
    ?>
    <?php //echo $form->error($model,'page_order');  ?>
        </div>
        <div class="clear"></div>
    </div>-->

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
        <?php
        //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"wButton purplewB ml15 m10")); 
        ?>            
        <a href="javascript:submitForm();" title="" class="wButton purplewB ml15 m10"><span>Save</span></a>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    CKEDITOR.replace('PageInfo_page_content', {
        fullPage: true,
        allowedContent: true
    });

    $( "#tabs" ).tabs();
    $( "#tabs2" ).tabs();
</script>
