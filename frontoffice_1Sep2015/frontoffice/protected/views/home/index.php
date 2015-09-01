<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" >
	<!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <title><?=APP_NAME?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css'>
        <!-- Library CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animations.css" media="screen">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/superfish.css" media="screen">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/revolution-slider/css/settings.css" media="screen">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/revolution-slider/css/extralayers.css" media="screen">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/prettyPhoto.css" media="screen">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
        <!-- Skin -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/colors/green.css" class="colors">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme-responsive.css">
        <!-- Switcher CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/switcher.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/spectrum.css" rel="stylesheet">
        <!-- Favicons -->
      
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		
		
		
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/jquery-lib.js"></script>                                
        <!-- Add required fancyBox files -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/jquery.fancybox.pack.js"></script>

        <!-- Optional, Add fancyBox for media, buttons, thumbs -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/helpers/jquery.fancybox-media.js"></script>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

        <!-- Optional, Add mousewheel effect -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>  

		
		
    </head>
    <body class="home">
        <div class="page-mask">
            <div class="page-loader">
                <div class="spinner"></div>
                Loading...
            </div>
        </div>
        <!-- Wrap -->
        <div class="wrap">
            <!-- Header -->
            <header id="header">
                <!-- Header Top Bar -->
                <div class="top-bar">
                    <div class="slidedown collapse">
                        <div class="container">
                            <div class="pull-left">
                                <ul class="social pull-left">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>                                   
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="phone-login pull-right">
                                <a><i class="fa fa-phone"></i> Call Us : +880 111-111-111</a>
                                <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Login</a>
                                <a href="#" data-toggle="modal" data-target="#registrationModal"><i class="fa fa-edit"></i> Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Header Top Bar -->
                <!-- Main Header -->
                <div class="main-header">
                    <div class="container">
                        <!-- TopNav -->
                        <div class="topnav navbar-header">
                            <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                            <i class="fa fa-angle-down icon-current"></i>
                            </a> 
                        </div>
                        <!-- /TopNav-->
                        <!-- Logo -->
                        <div class="logo pull-left">
                            <h3>
                                <a href="<?=$this->createUrl('/home')?>">
                                <img class="logo-color" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logos/logo_green.jpg" alt="gallaxy" width="100" height="85">
                                    Single Window Clearance System
                                </a>
                            </h3>
                        </div>
                        <!-- /Logo -->
                        <!-- Mobile Menu -->
                        <div class="mobile navbar-header">
                            <a class="navbar-toggle" data-toggle="collapse" href=".html">
                            <i class="fa fa-bars fa-2x"></i>
                            </a> 
                        </div>
                        <!-- /Mobile Menu -->
                        <!-- Menu Start -->
                        <nav class="collapse navbar-collapse menu">
                            <ul class="nav navbar-nav sf-menu">
                                <li>
                                    <a id="current" href="<?=$this->createUrl('/home')?>">
                                    Home
                                   
                                    </span>
                                    </a>
                                  
                                </li>
								
								<?php
                                                    
                                    
									$links = Utility::getPageTree(1);
									foreach ($links as $link) {
										$tstub=$link['page_stub'];
										$tstub_id=md5($tstub); 
										$tstub=str_replace("/", "", $tstub);
										$url = Yii::app()->createUrl($tstub);
										$children=$link['children'];
										$pageName = $link['page_name'.$langId];

										if(empty($pageName)) {
											$pageName = $link['page_name'];
										}
										$aclass="";
										if($REDIRECT_URL==$tstub){
											$aclass="class=''";
										}
										else{
											if(count($children)>0) {
												echo "<li  class='sf-with-ul'>";
												echo "<a href='$url' class='sf-with-ul'>$pageName";
												echo '<span class="sf-sub-indicator">
													<i class="fa fa-angle-down "></i>
													</span></a>';
												echo "<ul>";
												foreach ($children as $child) {
													$cstub=$child['page_stub']; 
													$cstub=str_replace("/", "", $cstub);
													$childLink = Yii::app()->createUrl($cstub);
													$childLabel = $child['page_name'.$langId];
													if(empty($childLabel)){
														$childLabel = $child['page_name'];
													}
                                                        
                                                       //echo "<li><a href='".Yii::app()->theme->baseUrl. "/pdf/Chhattisgarh - ESDM Sector Profile (2015)_07_05_5pm.pdf"."' class='sf-with-ul'>$childLabel</a></li>";
													if($child['is_direct_link']==='Y')
                                                        echo "<li><a href='".Yii::app()->theme->baseUrl. "/pdf/". $child['link_address']."' class='fancybox' data-fancybox-type='iframe'>$childLabel</a></li>";
                                                    else
                                                        echo "<li><a href='$childLink' class='sf-with-ul'>$childLabel</a></li>";
												}
												echo "</ul></li>";														
											}
											else{
                                                if($link['is_direct_link']==='Y')
                                                    echo "<li><a href='".Yii::app()->theme->baseUrl. "/pdf/". $link['link_address']."' class='fancybox' data-fancybox-type='iframe'>$pageName</a></li>";
                                                else
												    echo "<li $aclass><a href='$url'>$pageName</a></li>";
											}	
										}
									}
								?>  
								
                                <!--li>
                                    <a href="<?=$this->createUrl('/about')?>" class="sf-with-ul">
                                    About 
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down "></i>
                                    </span>
                                    </a>
                                    <ul>
                                        <li><a href="#" class="sf-with-ul">Chhattisgarh State Profile</a></li>
										<li><a class="fancybox" data-fancybox-type="iframe" href="<?php echo Yii::app()->theme->baseUrl; ?>/pdf/Chhattisgarh - ESDM Sector Profile (2015)_07_05_5pm.pdf">ESDM Sector Profile</a></li>
										<li><a class="fancybox" data-fancybox-type="iframe" href="<?php echo Yii::app()->theme->baseUrl; ?>/pdf/Chhattisgarh - IT & ITeS Sector Profile (2015)_07_05_5pm.pdf">IT & ITeS Sector Profile</a></li>
                                        <li><a href="#" class="sf-with-ul">About Single Window Clearance System</a></li>   
								
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?=$this->createUrl('/services')?>" class="sf-with-ul">
                                    Services 
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down "></i>
                                    </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sf-with-ul"> 
                                            Starting New Enterprise
                                            <span class="sf-sub-indicator pull-right">
                                            <i class="fa fa-angle-right "></i>
                                            </span>
                                            </a>
                                            <ul>
                                                <li><a href="#" class="sf-with-ul">Procedure</a></li>
                                                <li><a href="#" class="sf-with-ul">Comprehensive List of Approvals</a></li>                                                
                                            </ul>
                                        </li>
                                        <li><a href="#" class="sf-with-ul">Entrepreneur Registration</a></li>
                                        <li><a href="#" class="sf-with-ul">Entrepreneur Login</a></li>                                        
                                        <li>
                                            <a href="#" class="sf-with-ul"> 
                                            Approval Verifications
                                            <span class="sf-sub-indicator pull-right">
                                            <i class="fa fa-angle-right "></i>
                                            </span>
                                            </a>
                                            <ul>
                                                <li><a href="my-account.html" class="sf-with-ul">Entrepreneur Memorandum</a></li>
                                                <li><a href="my-account-information.html" class="sf-with-ul">Single Window Approvals</a></li>
                                                <li><a href="my-address.html" class="sf-with-ul">Incentive Approvals</a></li>                                                
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                    Resources
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down "></i>
                                    </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sf-with-ul">
                                            Policies & Acts
                                            <span class="sf-sub-indicator pull-right">
                                            <i class="fa fa-angle-right"></i>
                                            </span>
                                            </a>
                                            <ul>
											<li><a class="fancybox" data-fancybox-type="iframe" href="pdf/Chhattisgarh -Electronics & IT ITeS Policy 2014-19_07_05_5pm.pdf">Electronics, IT & ITeS Investment Policy 2014-19</a></li>
                                      
                                                <li><a href="about.html" class="sf-with-ul">MSME Act -2006</a></li>                                             
                                            </ul>
                                        </li>
										<li><a href="#" class="sf-with-ul">Nodal Agency/CHiPS</a></li>
                                        <li>
                                            <a href="#" class="sf-with-ul">
                                            MOU Details
                                            <span class="sf-sub-indicator pull-right">
                                            <i class="fa fa-angle-right"></i>
                                            </span>
                                            </a>
                                            <ul>
                                                <li><a href="services.html" class="sf-with-ul">MOU 1</a></li>
                                                <li><a href="services-2.html" class="sf-with-ul">MOU 2</a></li>
                                            </ul>
                                        </li>
										<li>
                                            <a href="#" class="sf-with-ul">
                                            Notifications 2014-19
                                            <span class="sf-sub-indicator pull-right">
                                            <i class="fa fa-angle-right"></i>
                                            </span>
                                            </a>
                                            <ul>
                                                <li><a href="services.html" class="sf-with-ul">Notification 1</a></li>
                                                <li><a href="services-2.html" class="sf-with-ul">Notification 2</a></li>
                                            </ul>
                                        </li>
										<li><a href="#" class="sf-with-ul">Important Links</a></li>
                                       
                                       
                                    </ul>
                                </li>
                                
                               
                                <li>
                                    <a href="<?=$this->createUrl('/contact')?>">
                                    Contact
                                    </a>
                                </li>
								<li>
                                    <a href="<?=$this->createUrl('/faq')?>">
                                    FAQ
                                    </a>
                                   
                                </li-->
                            </ul>
                        </nav>
                        <!-- /Menu --> 
                    </div>
                </div>
                <!-- /Main Header -->
            </header>
            <!-- /Header --> 
            <!-- Main Section -->
            <section id="main">

                <!-- Slider -->
                <div class="fullwidthbanner-container tp-banner-container">
                    <div class="fullwidthbanner rslider tp-banner">
                         <?php
                                    $slide_info = Utility::getSliderContent(1);
                                    echo "<ul>";
                                    foreach ($slide_info as $info) {
                                        
                                        if($info['Image_order']==1)
                                            echo "<li data-transition='fade' data-slotamount='7' data-masterspeed='200' data-thumb='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."slider". DIRECTORY_SEPARATOR ."homeslider_thumb2.jpg' data-delay='10000'  data-saveperformance='on'>";
                                        else
                                            echo "<li data-transition='fade' data-slotamount='1' data-masterspeed='300'>";
                                        echo "<img src='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."dummy.png'  alt='laptopmockup_sliderdy' data-lazyload='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."slider". DIRECTORY_SEPARATOR . $info['image_path']."' data-bgposition='right top' data-kenburns='on' data-duration='12000' data-ease='Power0.easeInOut' data-bgfit='105' data-bgfitend='100' data-bgpositionend='left bottom'>";
                                        echo "<div class='tp-caption customin fadeout rs-parallaxlevel-10'
                                              data-x='970'
                                              data-y='60' 
                                              data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                              data-speed='300'
                                              data-start='2700'
                                              data-easing='Power3.easeInOut'
                                              data-elementdelay='0.1'
                                              data-endelementdelay='0.1'
                                              data-endspeed='300'
                                              style='z-index: 2;'><img src='<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png' alt='' data-lazyload='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."redbg_big.png'>
                                             </div>";
                                        echo "<div class='tp-caption light_heavy_50 customin fadeout tp-resizeme rs-parallaxlevel-10'
                                              data-x='990'
                                              data-y='60' 
                                              data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                              data-speed='300'
                                              data-start='2850'
                                              data-easing='Power3.easeInOut'
                                              data-splitin='none'
                                              data-splitout='none'
                                              data-elementdelay='0.1'
                                              data-endelementdelay='0.1'
                                              data-endspeed='300'
                                              style='z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;'>".$info['medium_red_bg_heading']."
                                              </div>";
                                        echo "<div class='tp-caption black_heavy_70 skewfromleftshort fadeout tp-resizeme rs-parallaxlevel-10'
                                             data-x='380'
                                             data-y='3' 
                                             data-speed='500'
                                             data-start='2400'
                                             data-easing='Power3.easeInOut'
                                              data-splitin='chars'
                                              data-splitout='none'
                                              data-elementdelay='0.1'
                                              data-endelementdelay='0.1'
                                              data-endspeed='300'
                                              style='z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;'>".$info['larger_heading']."
                                            </div>";
                                        echo "<div class='tp-caption black_bold_40 skewfromrightshort fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='900'
                                    data-y='232' 
                                    data-speed='500'
                                    data-start='3200'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='chars'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;'>
                                </div>";
                                        echo " <div class='tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='933'
                                    data-y='300' 
                                    data-speed='300'
                                    data-start='4000'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='none'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;'>".$info['black_bg_h1']."
                                </div>";
                                        echo "<div class='tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='902'
                                    data-y='300' 
                                    data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                    data-speed='300'
                                    data-start='4000'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='none'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;'>&nbsp;
                                </div>";
                                        echo "<div class='tp-caption arrowicon customin fadeout rs-parallaxlevel-10'
                                    data-x='911'
                                    data-y='306' 
                                    data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                    data-speed='300'
                                    data-start='4200'
                                    data-easing='Power3.easeInOut'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 8;'><img src='<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png' alt='' data-ww='17' data-hh='17' data-lazyload='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."check.png'>
                                </div>";
                                echo "<div class='tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='933'
                                    data-y='340' 
                                    data-speed='300'
                                    data-start='4500'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='none'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;'>".$info['black_bg_h2']."
                                </div>";
                                echo "<div class='tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='902'
                                    data-y='340' 
                                    data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                    data-speed='300'
                                    data-start='4500'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='none'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;'>&nbsp;
                                </div>";
                                echo "<div class='tp-caption arrowicon customin fadeout rs-parallaxlevel-10'
                                    data-x='911'
                                    data-y='347' 
                                    data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                    data-speed='300'
                                    data-start='4700'
                                    data-easing='Power3.easeInOut'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 11;'><img src='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."dummy.png' alt='' data-ww='17' data-hh='17' data-lazyload='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."check.png'>
                                </div>";
                                echo "<div class='tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='933'
                                    data-y='380' 
                                    data-speed='300'
                                    data-start='5000'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='none'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;'>".$info['black_bg_h3']."
                                </div>";
                                echo "<div class='tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10'
                                    data-x='902'
                                    data-y='380' 
                                    data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                    data-speed='300'
                                    data-start='5000'
                                    data-easing='Power3.easeInOut'
                                    data-splitin='none'
                                    data-splitout='none'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;'>&nbsp;
                                </div>";
                                echo "<div class='tp-caption arrowicon customin fadeout rs-parallaxlevel-10'
                                    data-x='911'
                                    data-y='386' 
                                    data-customin='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                                    data-speed='300'
                                    data-start='5200'
                                    data-easing='Power3.easeInOut'
                                    data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    data-endspeed='300'
                                    style='z-index: 14;'><img src='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."dummy.png' alt='' data-ww='17' data-hh='17' data-lazyload='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."check.png'>
                                </div>";
                                echo "</li>";
                               
                                echo "";



                                    }
                                     echo "</ul>";

                        ?>
                    </div>
                </div>
                <!-- Slider --> 
                <!-- Main Content -->
                <div class="main-content">
                    <div class="container">
                        <?php
                            $content_info = Utility::getSerContentInfo();
                            echo "<marquee><h1>".$content_info['block_after_slider_main_heading']."</h1></marquee>";
					        echo "<div class='row'>";
                            for($count=1;$count<=3;$count++){
                                        $blhno='block'.$count.'_after_slider_heading]';
                                        $bldno='block'.$count.'_after_slider_desc';
                                        $blrmno='block'.$count.'_after_slider_read_more_link';
                                        echo "<div class='col-lg-4 col-md-4 col-sm-4 wow fadeIn'>
                                                 <div class='content-box big ch-item bottom-pad-small'>
                                                     <div class='ch-info-wrap'>
                                                         <div class='ch-info'>
                                                            <div class='ch-info-front ch-img-1'><i class='fa fa-rocket'></i></div>
                                                            <div class='ch-info-back'>
                                                             <i class='fa fa-rocket'></i>
                                                            </div>
                                                         </div>
                                                     </div>
                                                  <div class='content-box-info'>
                                        <h3>".$content_info[$blhno]."</h3>
                                        <p>
                                            ".$content_info[$bldno]."
                                        </p>
                                        <a href='".$content_info[$blrmno]."'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>
                                    </div>
                                    <div class='border-bottom margin-top30'>
                                    </div>
                                    <div class='border-bottom'>
                                    </div>
                                </div>
                            </div>";
                        }
                        ?> 
                        </div>
                    </div>
                </div>
                <!-- /Main Content -->
                <!-- Product Content -->
                <div class="pattern-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12 text-center wow fadeInLeft">
                                <?php
                                    $minister_info = Utility::getMinisterInfo();
                                    echo "<img class='app-img' src='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR . $minister_info['homepage_minitster_image']. "' alt='iPhone5c'>";
                                    echo "</div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 wow fadeInRight'>
                                                <div class='app-service padding-bottom50'>
                                                    <h2 class='light'>".$minister_info['homepage_minister_name']."</h2>
                                                    <h4>".$minister_info['homepage_minister_designation']."</h4>
                                                    <p>".$minister_info['homepage_minsiter_message']."
                                                    </p>
                                                    <div class='divider'></div>
                                                    <div class='learnmore'>
                                                        <a class='btn-special btn-grey' href='".$minister_info['homepage_minister_readmore_link']."'>Read More</a>
                                                    </div>
                                                </div>
                                           </div>";
                                    ?>                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Content --> 
				<!-- /Star --> 
                <!-- Choose-Us --> 
                <div class="choose-us container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">
                            <h2>Why Invest in Chhattisgarh</h2>
                            <!-- Accordin -->
                            <div class="accordionMod panel-group">
                                <?php
                                        $acc_info=Utility::getAccordionInfo();
                                            foreach ($acc_info as $acc) {
                                                echo "<div class='accordion-item'>
                                                        <h4 class='accordion-toggle'>".$acc['acc_title']."</h4>
                                                        <section class='accordion-inner panel-body'>
                                                            <p>  ".$acc['acc_descr']." </p>
                                                        </section>
                                                      </div>  ";
                                            }
                                    ?>
                                
								 
                            </div>
                            <!-- /Accordin -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">
                            <h2>Incentives</h2>
                            <!-- Progress Bars -->
                            <div class="skills-wrap">
							<div class="skills-wrap">
                               <?php   
                                $progres_bar = Utility::getProgressBarInfo();
                                foreach ($progres_bar as $progres_bar_info) 
                                    echo "<div class='skillbar clearfix ' data-percent='".$progres_bar_info['inv_val_percentage']."%'>
                                        <div class='skillbar-title' style='background: ".$progres_bar_info['inv_title_backgroud_color'].";'><span>".$progres_bar_info['inv_title']."</span></div>
                                        <div class='skillbar-bar' style='background: ".$progres_bar_info['inv_backgroud_color'].";'></div>
                                        <div class='skill-bar-percent'>".$progres_bar_info['inv_val_percentage']."%</div>
                                    </div>"; 
                               ?>

                            </div>
                               <!--<img class="app-img" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/chips-footer.jpg" alt="iPhone5c">
                                 /Skill Bar -->
                            </div>
                            <!-- /Progress Bars -->
                        </div>
                    </div>
                </div>
                <!-- #choose-us End --> 
				
                <!-- Star -->
				<!-- Random Facts -->
                <div id="random-facts" class=" margin-top70">
                    <div class="pattern-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="padding-top60 text-center">
                                        <h2 class="light wow fadeIn">Facts & Figures</h2>
                                        <h4 class="light wow fadeInRight">
                                            Find what is going around us. You can see some real stats here!
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                                    <div class="random-box padding-top30 padding-bottom40">
                                        <div class="random-box-icon">
                                            <i class="fa fa-coffee"></i>
                                        </div>
                                        <div class="random-box-info">
                                            <span class="facts" data-from="0" data-to="101" data-speed="5000" data-refresh-interval="50"></span>
                                            <p>
                                                Registration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                                    <div class="random-box padding-top30 padding-bottom40">
                                        <div class="random-box-icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="random-box-info">
                                            <span class="facts" data-from="0" data-to="299" data-speed="5000" data-refresh-interval="50"></span>
                                            <p>
                                                In-Principle
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                                    <div class="random-box padding-top30 padding-bottom40">
                                        <div class="random-box-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="random-box-info">
                                            <span class="facts" data-from="0" data-to="175" data-speed="5000" data-refresh-interval="50"></span>
                                            <p>
                                                Investors
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                                    <div class="random-box padding-top30 padding-bottom40">
                                        <div class="random-box-icon">
                                            <i class="fa fa-gift"></i>
                                        </div>
                                        <div class="random-box-info">
                                            <span class="facts" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50"></span>
                                            <p>
                                                Incentives
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Random Facts -->
               
                <!-- /Portfolio work -->
                <!-- Services -->
               
                <!-- /Services --> 
                <!-- Testimonials --> 
                
                <!-- /Testimonials -->
                
                <!-- Latest Posts --> 
               
                <!-- /Latest Posts -->
                <!-- Slogan -->
              
                <!-- /Slogan -->                                                          
                <!-- Our Clients -->
                <div class="our-clients">
                    <div class="container">
                        <div class="row">
                            <div class="client">
                                <div class="client-logo">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center">
                                            <h2 class="wow fadeIn">Other Departments</h2>
                                            <h4 class="wow fadeInRight">
                                                
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="clearfix"></div>
                                        <div class="row text-center padding-top40">
                                            <div id="client-carousel" class="client-carousel carousel slide">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <?php
                                                            $active_dept = Utility::getActiveDeptInfo();  
                                                            foreach ($active_dept as $dept)
                                                                 echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-6 item wow fadeIn'>
                                                                    <div class='item-inner'><a href='".$dept['department_link']."' target='_blank'><img alt='".$dept['department_name']."' src='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."clientslogo". DIRECTORY_SEPARATOR . $dept['department_img']."'></a></div>
                                                                     </div>";  
                                                            echo "</div>";
                                                            echo "<div class='item'>";
                                                            $non_active_dept = Utility::getNonActiveDeptInfo(); 
                                                            foreach ($non_active_dept as $nondept)
                                                                echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-6 item'>
                                                                     <div class='item-inner'><a href='".$nondept['department_link']."' target='_blank'><img alt='".$dept['department_name']."' src='".Yii::app()->theme->baseUrl . DIRECTORY_SEPARATOR ."img". DIRECTORY_SEPARATOR ."clientslogo". DIRECTORY_SEPARATOR .$nondept['department_img']."'></a></div>
                                                                    </div>";
                                                         ?>  

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                        <div class="clients-title">
                                            <h3 class="title">&nbsp;</h3>
                                            <div class="carousel-controls pull-right">
                                                <a class="prev" href="#client-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                                <a class="next" href="#client-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Our Clients -->  
            </section>
            <!-- /Main Section -->
            <!-- Footer -->
            <footer id="footer">
                <div class="pattern-overlay">
                    <!-- Footer Top -->
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one wow fadeIn">
                                    <h3 class="light">About</h3>
                                    <p> 
									<?php
                                            $contact_info = Utility::getContactInfo(); 
                                            echo $contact_info['homepage_footer_aboutus'];
                                   ?>
                                    </p>
                                </section>
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two wow fadeIn">
                                    <h3 class="light">Twitter Stream</h3>
                                    <ul id="tweets">
									
                                    </ul>
                                </section>
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three wow fadeIn">
                                    <h3 class="light">Contact Us</h3>
                                    <ul class="contact-us">
                                        <?php
                                            echo "<li>
                                            <i class='fa fa-map-marker'></i>
                                            <p> 
                                                <strong class='contact-pad'>".$contact_info['contact_us_address']."</strong>
                                        </li>
                                        <li>
                                            <i class='fa fa-phone'></i>
                                            <p><strong>Phone:</strong>".$contact_info['contact_us_phone']."</p>
                                        </li>
                                        <li>
                                            <i class='fa fa-envelope'></i>
                                            <p><strong>Email:</strong>".$contact_info['contact_us_email']."</a></p>
                                        </li>

                                            ";
                                        ?>

                                        
                                    </ul>
                                </section>
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four wow fadeIn">
                                    <h3 class="light">Subscribe</h3>
                                    <p>
                                        Subscribe to our email newsletter to receive our news, updates.
                                    </p>
                                    <form method="get" action="#">
                                        <div class="input-group">
                                            <input type="text" value="mail@example.com" onfocus="if(this.value=='mail@example.com')this.value='';" onblur="if(this.value=='')this.value='mail@example.com';" class="subscribe form-control">
                                            <span class="input-group-btn">
                                            <button class="btn subscribe-btn" type="button">Join</button>
                                            </span>
                                        </div>
                                        <!-- /input-group -->
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Top --> 
                    <!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                                    <p class="credits">&copy; Copyright 2014 by <a href="#">CHiPS</a>. All Rights Reserved. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                                    <ul class="social social-icons-footer-bottom">
                                        <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                     
                                        <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Bottom --> 
                    <!-- /Footer Bottom --> 
                </div>
            </footer>
            <!-- Modal -->
            <section id="modals">
                <!-- Login Modal -->
                <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="form-signin-heading modal-title" id="myModalLabel">Login</h2>
                            </div>
                            <form method="post" id="login">
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input class="form-control" id="username" name="username" type="text" placeholder="Username" value="" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Email" value="" required>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <a href="password-recovery.html" class="pull-left">(Lost Password?)</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-color">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Logan Modal -->
                <!-- Registration Modal -->
                <div class="modal register fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h2 class="form-signin-heading modal-title" id="registrationModalLabel">Create a new account</h2>
                        </div>
                        <form method="post" id="registration">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" value="" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" value="" class="form-control" placeholder="E-mail Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="password" value="" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" value="" class="form-control" placeholder="Re-enter Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-color">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Registration Modal -->
            </section>
            <!-- Scroll To Top --> 
            <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
        </div>

        
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-migrate-1.0.0.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script> 
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.parallax.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.wait.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/fappear.js"></script> 
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.bxslider.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/superfish.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tweetMachine.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tytabs.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.gmap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.sticky.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.countTo.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jflickrfeed.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/waypoints.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/wow.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.fitvids.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/spectrum.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/switcher.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>
    <script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>

<script type="text/javascript">
$(document).ready(function(){
                                
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        iframe : {
                        preload: false
        }
    });
    $(".various").fancybox({
        maxWidth           : 800,
        maxHeight          : 600,
        fitToView            : false,
        width                    : '70%',
        height                   : '70%',
        autoSize               : false,
        closeClick             : false,
        openEffect         : 'none',
        closeEffect          : 'none'
    });
    $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
            media : {}
        }
    });
});
</script>
 </body>
</html>

