<style type="text/css">
    .description{
        padding: 2px;
        margin: 2px;
        font-size:0.85em;
        padding-bottom:20px;
    }
    #enquiry-form input{
        margin:0 0 0.2rem;
    }
    label{font-weight:bold;}
   

    .recaptcha_input_area {
        background: none repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        height: 20px !important;
        margin-left: 7px !important;
        margin-right: 7px !important;
        position: relative !important;
        width: 153px !important;
    }
    #recaptcha_response_field{
        height: 1.3rem !important;
    }  
    
    table thead tr th, table tfoot tr th, table tbody tr td, table tr td, table tfoot tr td {
        line-height: 0rem !important;
    } 
    
</style>
<script src="/js/customvalidation.js" type="text/javascript"></script>
<script type="text/javascript">
    var secret="<?=INPUT_ENCRIPTION_KEY;?>";
    <?php
        $obj=new Phpencodeformcontents(INPUT_ENCRIPTION_KEY);
        echo $obj->getAesJavascriptFunctions();
        //echo Phpencodeformcontents::getBase64encodeJavascriptFunctions();
    ?>   
    function encEnquiryForm(){
        var email = $("#edit-submitted-e-mail").val();
        email     = $.trim(email);
        
        if(email.length == 0) {
            validation('E-mail is required.');
            return false;
        } else {
            ob('edit-submitted-e-mail');
            $$$('enquiry-form').submit();
       }
    }
    
    function $$$(i){
        return document.getElementById(i);
    }
    
    function ob(i){
        var val=$$$(i).value;
        val=secret+val+secret;
        var encrypted = Aes.Ctr.encrypt(val, secret, 256);                
        $$$(i).value=encrypted; 
    } 
    
    
</script>
<style>
    .panel {
        background-color: #fafafa;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }
</style>
<section id="main">
    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Forgot Password</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="/SWCS/frontoffice/home">Home</a></li>
                                <li>Forgot Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content margin-top60 margin-bottom60 ">
 <div data-wow-duration="1s" class="welcome wow fadeInDown animated" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
	<div class="row">
          <div class="col-lg-12">
              <div class="mainbox col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2" style="margin-top:20px;" id="loginbox">
                <div class="panel panel-info">
						  <div class="panel-body border_radius_0 " style="padding-top:30px">
						    <div align="left">Please fill in your registered email below.</div>
							<div class="alert alert-danger col-sm-12 " id="login-alert" style="display:none"></div>
						<form action="<?php echo $this->createUrl("/forgotpassword/index"); ?>" id='enquiry-form' method="post">
							<div id='error_block'>
								<span id='error' style='color:red'>
									<?php if(isset($error)) { 
											if(count($error)>0) {
												foreach($error as $v){
													echo "<br />".$v;
												}
											}
										} ?>
								</span>
							</div>
							<?php
								if(isset($success)) {
									echo "<span style='color:green'>".$success.'</span>';
								}
							?>
							<br />
							<div>
										
								<div class="form-item webform-component webform-component-email" id="webform-component-e-mail">
									<label for="edit-submitted-e-mail">E-Mail <span class="form-required" title="This field is required.">*</span></label>
									<input value="<?=$email?>" class="email form-text required" type="text" id="edit-submitted-e-mail" onblur="isValidEmail('edit-submitted-e-mail')" name="email" value="" size="60" maxlength="128" autocomplete="off" />
								</div><br />
							  
								<input type='hidden' name='YII_CSRF_TOKEN' value="<?=Yii::app()->request->csrfToken;?>" />
								<div class="form-item webform-component webform-component-email" id="webform-component-e-mail">
									<label for="edit-submitted-e-mail">&nbsp;</label>
								    <span id="captcha" align="left"><?php echo $captcha; ?></span>
								    <p><br /></p>
								    <input type="button" style="width:300px;" name="submitenquiry" class="dredB btn btn-success" onclick="encEnquiryForm()" value="Reset Password" />
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
</section>
