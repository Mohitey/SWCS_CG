<?php
/* @var $this FormController */
/* @var $model FormInfo */
/* @var $form CActiveForm */
$js = Yii::app()->getClientScript();
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/ckeditor.js');
$js->registerScriptFile(Yii::app()->baseUrl . '/ckeditor/adapters/jquery.js');
?>
<script type="text/javascript">
    function submitForm() {
        $("#form-info-form").submit();
    }
    var flag = 1;
    function editstub() {
        if (flag == 1) {
            $("#FormInfo_form_stub").attr("readonly", false);
            $("#FormInfo_form_stub").css("backgroundColor", "#fff");
            flag = 0;
        }
        else {
            $("#FormInfo_form_stub").attr("readonly", "readonly");
            $("#FormInfo_form_stub").css("backgroundColor", "#E4E4E4");
            flag = 1;
        }
    }

    function doesStubExist() {
        var stubName = $("#FormInfo_form_stub").val();
        stubName = $.trim(stubName);
        if(stubName.length>0){
            $.ajax({
                type: "get",
                url: "http://ziicms.zuyainfotech.com/api/checkstubexistsornot/",
                data: {stub: stubName}
            })
            .done(function(msg) {
                msg = parseInt(msg);
                if (msg > 0) {
                    $("#FormInfo_form_stub").val("");
                    $("#form_stub_error").removeClass("clear");
                    $("#form_stub_error").addClass("errorMessage");
                    $("#form_stub_error").html("Stub name already exist. <span style='color:red;pointer:cursor' onclick='resetStubInput()'>X</span>");
                }
                else{
                    $("#form_stub_error").html("");
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
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'form_name'); ?></label>
            <div class="formRight"><?php echo $form->textField($model,'form_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'form_name'); ?>
            </div>
            <div class="clear"></div>
	</div>

	

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'form_stub'); ?>
                <a href="javascript:editstub()" title="Click here to edit stub" class="smallButton" style="margin: 5px;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/color/pencil.png" alt="Edit Stub" /></a>
            </label>
            <div class="formRight"><?php echo $form->textField($model,'form_stub',array('readonly' => 'readonly','size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'form_stub'); ?>
            </div>
            <div class="clear"></div>
            <div id='form_stub_error' style='padding-left:190px'></div>
	</div>
        
        <div class="formRow">
            <label><?php echo $form->labelEx($model,'form_desc'); ?></label>
            <div class="formRight"><?php echo $form->textArea($model,'form_desc',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'form_desc'); ?>
             </div>
            <div class="clear"></div>
	</div>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'is_active'); ?></label>
            <div class="formRight"><?php 
                //echo $form->textField($model,'is_active',array('size'=>1,'maxlength'=>1)); 
                
                    echo "<label>Active:</label>" . $form->radioButton($model, 'is_active', array(
                        'value' => 1,
                        'uncheckValue' => null
                    ));

                    echo "<label>Inactive:</label>" . $form->radioButton($model, 'is_active', array(
                        'value' => 0,
                        'uncheckValue' => null
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