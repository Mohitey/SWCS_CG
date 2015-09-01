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
        strip_tags("submitted-new-password");
        
        var inputVal = $("#submitted-new-password").val();
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        var pwd = document.getElementById("submitted-new-password");
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

<form action="<?php echo $this->createUrl("/ziiadmin/changepassword"); ?>" id='users-form' method="post">

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php
	    if(count($error)>0) {
            foreach($error as $v){
                echo "<br />".$v;
            }  
	    }
	?>

	 <div class="formRow">
            <label for="edit-submitted-e-mail">Old Password <span class="form-required" title="This field is required.">*</span></label>
            <div class="formRight">
                <input value="" class="email form-text required" type="text" id="edit-submitted-old-password"  name="Users[oldpassword]" value="" size="60" maxlength="128" autocomplete="off" onblur="strip_tags('edit-submitted-old-password')" />
        </div>
            <div class="clear"></div> 
	</div>
	
	<div class="formRow">
            <label for="edit-submitted-e-mail">New Password <span class="form-required" title="This field is required.">*</span></label>
            <div class="formRight">
                <input value="" class="email form-text required" type="text" id="submitted-new-password" name="Users[newpassword]" value="" size="60" maxlength="128" autocomplete="off" onkeyup="checkPasswordStrength()" />
        </div>
        <div class="clear" id="strength"></div>  
            <div class="clear"></div> 
	</div>
	
	<div class="formRow">
            <label for="edit-submitted-e-mail">Confirm Password <span class="form-required" title="This field is required.">*</span></label>
            <div class="formRight">
                <input value="" class="email form-text required" type="password" id="submitted-new-confirm-password" name="Users[confirmpassword]" value="" size="60" maxlength="128" autocomplete="off" onblur="strip_tags('submitted-new-confirm-password')" />
        </div>
            <div class="clear"></div> 
	</div>
	
      
        <input type='hidden' name='YII_CSRF_TOKEN' value="<?=Yii::app()->request->csrfToken;?>" />
        
        <div id="captcha"><center><?php echo $captcha; ?></center></div>
        
	<div class="row buttons" id='save_button'>
            <?php 
                //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); 
            ?>
            <a href="javascript:submitForm();" title="" class="wButton purplewB ml15 m10"><span>Save</span></a>
	</div>

</form>

</div><!-- form -->
