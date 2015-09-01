<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>Login :: Zii CMS - Admin</title>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.png" type="image/png" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>


<style type="text/css">
    .dredB{
        width: 100%;
    }
    .error{
        color:#FF0000;
    }
    input[type="text"],input[type="password"]{
        height:22px;
    }
    .loginLogo{
        margin-top: -10%;
    }   
    .errordiv{
        color:#ff0000;
    }
    #widgetdiv{
        height:290px;
    }
</style>

<script type="text/javascript">
    var secret="<?=INPUT_ENCRIPTION_KEY;?>";
    <?php
        $obj=new Phpencodeformcontents(INPUT_ENCRIPTION_KEY);
        echo $obj->getAesJavascriptFunctions();
        //echo Phpencodeformcontents::getBase64encodeJavascriptFunctions();
    ?>   
    function encLoginForm(){
        ob('email');
        //ob('recaptcha_response_field');
        $$$('login-form').submit();
    }
    function $$$(i){
        return document.getElementById(i);
    }
    function ob(i){
        var val=$$$(i).value;
        val=secret+val+secret;
        //var encrypted = Base64.encode(val);
        var encrypted = Aes.Ctr.encrypt(val, secret, 256);       
        $$$(i).value=encrypted;  
    } 
    
</script>
</head>

<body class="nobg loginPage">

<!-- Top fixed navigation -->
<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li><a href="<?php echo Yii::app()->createUrl('home'); ?>" target="_blank" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/topnav/mainWebsite.png" alt="" /><span>Main website</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="loginLogo">
        <center>
            <a href="<?php echo Yii::app()->createUrl('//site/login'); ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="Logo" /></a>
        </center>            
    </div>
          
    <div class="widget" id="widgetdiv" style="height:290px;">
        <div class="title"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/dark/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
            <div>
                <?php
                    if(!empty($error)){
                        echo '<center>
                                    <div class="errordiv"><ul>'.$error.'</ul></div>
                              </enter>';
                    }
                ?>
            </div> 
            <fieldset>                 
                <div class="formRow">
                    <label for="login">Email:</label>
                    <div class="loginInput"><input type="text" autocomplete="off" name="forgotPassword[email]" value="<?php echo $email; ?>"  class="validate[required]" id="email" /></div>
                    <br />
                </div>  
               <div id="captcha"><center><?php echo $captcha; ?></center></div>

                <input type='hidden' name='YII_CSRF_TOKEN' value="<?=Yii::app()->request->csrfToken;?>" />
                
                <div class="loginControl">
                    <input type="button" value="Forgot Password" class="dredB logMeIn" onclick="encLoginForm()" />
                    <div class="clear"></div>
                </div>
            </fieldset>
    </div>
</div>    

<?php $this->endWidget(); ?>
<!-- Footer line -->
<div id="footer">
    <div class="wrapper">&copy; <?=date("Y")?> Haryana Government</div>
</div>

</body>
</html>
