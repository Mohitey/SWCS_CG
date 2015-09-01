<?php
/* @var $this UserController */
/* @var $model Users */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
    var submitUserForm = "";
    function submitForm(){
        if(submitUserForm == 'YES') {
            $("#users-form").submit();
        }
    }
    function checkPasswordStrength(){
        strip_tags("Users_password");
        
        var inputVal = $("#Users_password").val();
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        var pwd = document.getElementById("Users_password");
        if (pwd.value.length==0) {
            strength.innerHTML = '<span style="padding-left:180px"></span>';
            $("#save_button").hide();
            submitUserForm = "NO";
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="padding-left:180px">More Characters</span>';
            $("#save_button").hide();
            submitUserForm = "NO";
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green;padding-left:180px">Strong!</span>';
            $("#save_button").show();   
            submitUserForm = "YES";         
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange;padding-left:180px">Medium!</span>';
            $("#save_button").show();
            submitUserForm = "YES";
        } else {
            strength.innerHTML = '<span style="color:red;padding-left:180px">Weak!</span>';
            $("#save_button").hide();
            submitUserForm = "NO";
        }
        
    }
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php
	    if(isset($error)) {
	        echo "<br />".$error;
	    }
	?>

	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'email'); ?></label>
            <div class="formRight"><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
            <div class="clear"></div> 
	</div>
        
    <div class="formRow">
            <label><?php echo $form->labelEx($model,'full_name'); ?></label>
            <div class="formRight"><?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'full_name'); ?>
            </div>
            <div class="clear"></div> 
	</div>
    
    <div class="formRow">
    	<label><?php echo $form->labelEx($model,'mobile'); ?></label>
        <div class="formRight"><?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'mobile'); ?>
        </div>
        <div class="clear"></div> 
	</div>
    
    <?php if(!isset($model->uid)) { ?>
	    <div class="formRow">
                <label><?php echo $form->labelEx($model,'password'); ?></label>
                <div class="formRight"><?php echo $form->passwordField($model,'password',array('value'=>'','size'=>60,'maxlength'=>128,'onkeyup'=>' checkPasswordStrength()')); ?>
		        <?php echo $form->error($model,'password'); ?>
                    </div>
                <div class="clear" id="strength"></div>    
	    </div>
    <?php } ?>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'role_id'); ?></label>
            <div class="formRight">
		<?php 
                    $pages = Utility::getAllRoles(true);
                    echo CHtml::dropDownList('Users[role_id]', $model->role_id, $pages);
                    
                    //echo $form->error($model,'role_id'); 
                ?>                
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

	<div class="row buttons" id='save_button'>
            <?php 
                //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); 
            ?>
            <a href="javascript:submitForm();" title="" class="wButton purplewB ml15 m10"><span>Save</span></a>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
