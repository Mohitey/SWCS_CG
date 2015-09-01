
<script type="text/javascript">
    var secret="<?=INPUT_ENCRIPTION_KEY;?>";
    <?php
        $obj=new Phpencodeformcontents(INPUT_ENCRIPTION_KEY);
        echo $obj->getAesJavascriptFunctions();
  		$langId = $_COOKIE['langId'];
		if($langId == 0) {
			$langId = "";
			$langCode="en";
		}
		elseif($langId==1){
			$langCode="hi";
		}
		elseif($langId==2){
			$langCode="pa";
		}
	?>   
	function strip_tags(i) {
		if (i) {
			var input = $("#" + i).val();
			input = input.replace(/(<\?[a-z]*(\s[^>]*)?\?(>|$)|<!\[[a-z]*\[|\]\]>|<!DOCTYPE[^>]*?(>|$)|<!--[\s\S]*?(-->|$)|<[a-z?!\/]([a-z0-9_:.])*(\s[^>]*)?(>|$))/gi, '');
			$("#" + i).val(input);
		}
	}
    function encLoginForm(){
        ob('login-username');
        ob('login-password');
        //ob('recaptcha_response_field');
        $$$('loginform').submit();
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


<div class="col-lg-12 col-sm-8">
      <div data-wow-duration="1s" class="welcome wow fadeInDown animated" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
         <h1><?=Yii::t('labels','cm_register_heading')?></h1>
        <h2><?=Yii::t('labels','cm_register_text')?></h2>
        <div class="row">
          <div class="col-lg-12">
              <div class="mainbox col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2" style="margin-top:20px;" id="loginbox">
                <div class="panel panel-info">
                <div class="panel-heading border_radius_0 login_header_bg">
                    <div class="col-md-6 panel-title"><a onclick="$('#loginbox').hide(); $('#signupbox').show()" href="<?php echo Yii::app()->createUrl('//registration'); ?>"><?=Yii::t('labels','register')?></a></div>
                    <div class="col-md-6 panel-title" style="color: rgb(157, 26, 5); background: none repeat scroll 0% 0% rgb(255, 255, 255);"><a onclick="$('#loginbox').hide(); $('#signupbox').show()" href="<?php echo Yii::app()->createUrl('//registration'); ?>"><?=Yii::t('labels','login')?></a></div>
                  <div class="clearfix"></div>
                  </div>
                  <div class="panel-body border_radius_0 " style="padding-top:30px">
                    <div class="alert alert-danger col-sm-12 " id="login-alert" style="display:none"></div>
					
                    <form class="form-horizontal" id="loginform" action="<?php echo Yii::app()->createUrl('//site/login'); ?>" method='post' />
						<div>
							<?php
								if(isset($error)) {
									if(!empty($error)){
										echo '<center>
													<div class="errordiv"><ul>'.$error.'</ul></div>
											  </cnter>';
									}
								}
							?>
						</div> 						
                      <div class="input-group" style="margin-bottom: 25px"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <!--<input type="" placeholder="username or email" value="" name="username" class="form-control" id="login-username">-->
						<input class="keyboardInput validate[required] form-control" lang="<?=$langCode?>" type="text" placeholder="<?=Yii::t('labels','email')?>" autocomplete="off" name="LoginForm[username]" value="<?php echo $user; ?>"  id="login-username" />
                      </div>
                      <div class="input-group" style="margin-bottom: 25px"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <!--<input type="password" placeholder="password" name="password" class="form-control" id="login-password">-->
						<input class="keyboardInput validate[required] form-control" type="password" autocomplete="off" placeholder="<?=Yii::t('labels','password')?>" name="LoginForm[password]" id="login-password" onblur='strip_tags("pass")' />
                      </div>
					  <div id="captcha"><center><?php echo $captcha; ?></center></div>
					  
					  <input type='hidden' name='YII_CSRF_TOKEN' value="<?=Yii::app()->request->csrfToken;?>" />
					  <input type="hidden" name="redirect" value="<?php echo Yii::app()->createUrl('//ziiadmin'); ?>" />
				
                      <div class="input-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="1" name="remember" id="login-remember">
                            Remember me </label>
                        </div>
                      </div>
                      <div class="form-group" style="margin-top:10px"> 
                        <!-- Button -->
                        
                        <div class="col-sm-12 controls"> 
							<center>
								<input type="button" value="<?=Yii::t('labels','login')?>" class="btn btn-success" id="btn-login" onclick="encLoginForm()" />
							</center>
						</div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12 control">
                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%"><a href="<?php echo $this->createUrl('/forgotpassword');?>"><?=Yii::t('labels','forget_password')?></a></div>
                        </div> 
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div data-wow-duration="1s" class="news padding_top_bottom_10 wow fadeInDown animated" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
        <div class="row"></div>
      </div>
    </div>
	
	
