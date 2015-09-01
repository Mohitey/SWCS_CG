<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html> 
<!--<![endif]-->
<head>
        <meta charset="utf-8">
        <title><?=APP_NAME?></title>
        <!-- Mobile Metas -->
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
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png">
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css">
        <![endif]-->
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
                                <li>
                                    <a href="<?=$this->createUrl('/about')?>" class="sf-with-ul">
                                    About 
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down "></i>
                                    </span>
                                    </a>
                                    <ul>
                                        <li><a href="<?=$this->createUrl('/about/chhattisgarhstateprofile')?>" class="sf-with-ul">Chhattisgarh State Profile</a></li>
                                        <li><a href="<?=$this->createUrl('/about/esdmsectorprofile')?>" class="sf-with-ul">ESDM Sector Profile</a></li>
                                        <li><a href="#" class="sf-with-ul">IT & ITeS Sector Profile</a></li>
                                        <li><a href="#" class="sf-with-ul">About Single Window Clearance System</a></li>                                     
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
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
                                                <li><a href="about-me.html" class="sf-with-ul">Electronics, IT & ITeS Investment Policy 2014-19</a></li>
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
                                    <a href="contact.html">
                                    Contact
                                    </a>
                                </li>
								<li>
                                    <a href="faq.html">
                                    FAQ
                                    </a>
                                   
                                </li>
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
                        <ul>
                            <!-- THE FIRST SLIDE -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="0" data-thumb="homeslider_thumb2.jpg" data-delay="10000"  data-saveperformance="on">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png"  alt="laptopmockup_sliderdy" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/slider-bg-1.jpg" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="105" data-bgfitend="100" data-bgpositionend="left bottom">
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption customin fadeout rs-parallaxlevel-10"
                                    data-x="970"
                                    data-y="60" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2700"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 2;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/redbg_big.png">
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption light_heavy_50 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="990"
                                    data-y="60" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2850"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Chhattisgarh
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption black_heavy_70 skewfromleftshort fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="350"
                                    data-y="3" 
                                    data-speed="500"
                                    data-start="2400"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Single Window Clearance System
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption black_bold_40 skewfromrightshort fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="900"
                                    data-y="232" 
                                    data-speed="500"
                                    data-start="3200"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="933"
                                    data-y="300" 
                                    data-speed="300"
                                    data-start="4000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Ease of doing business
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="902"
                                    data-y="300" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="4000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="911"
                                    data-y="306" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="4200"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 8;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="933"
                                    data-y="340" 
                                    data-speed="300"
                                    data-start="4500"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">First mover advantage
                                </div>
                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="902"
                                    data-y="340" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="4500"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="911"
                                    data-y="347" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="4700"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 11;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="933"
                                    data-y="380" 
                                    data-speed="300"
                                    data-start="5000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">Attractive fiscal/ non fiscal benefits
                                </div>
                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="902"
                                    data-y="380" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="5000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="911"
                                    data-y="386" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="5200"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 14;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
								
                            </li>
                            <!-- /THE FIRST SLIDE -->
                            <!-- THE RESPONSIVE SLIDE 
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">-->
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/cm2.jpg" data-fullwidthcentering="on" alt="">
                                <div class="caption large_text sft"
                                    data-x="660"
                                    data-y="54"
                                    data-speed="300"
                                    data-start="800"
                                    data-easing="easeOutExpo"  >CREDIBLE CHHATTISGARH</div>
                                <div class="caption medium_text sfl"
                                    data-x="689"
                                    data-y="92"
                                    data-speed="300"
                                    data-start="1100"
                                    data-easing="easeOutExpo"  >AND</div>
                                <div class="caption large_text sfr"
                                    data-x="738"
                                    data-y="88"
                                    data-speed="300"
                                    data-start="1100"
                                    data-easing="easeOutExpo"  ><span class="dblue">RESPONSIVE</span></div>
                                <!-- LAYER NR. 5 1 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="691"
                                    data-y="220" 
                                    data-speed="300"
                                    data-start="1000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Ease of doing business

                                </div>
                                <!-- LAYER NR. 6 1 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="660"
                                    data-y="220" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="1200"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 7 1 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="669"
                                    data-y="232" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="1500"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 8;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <!-- LAYER NR. 5 1 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="691"
                                    data-y="260" 
                                    data-speed="300"
                                    data-start="1500"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">First mover advantage
                                </div>
                                <!-- LAYER NR. 6 1 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="660"
                                    data-y="260" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="1700"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 7 1 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="669"
                                    data-y="272" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2000"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 8;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="691"
                                    data-y="300" 
                                    data-speed="300"
                                    data-start="2000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Land, Water and Power- Readily available
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="660"
                                    data-y="300" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="669"
                                    data-y="306" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2200"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 8;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="691"
                                    data-y="340" 
                                    data-speed="300"
                                    data-start="2500"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Attractive fiscal/ non fiscal benefits
                                </div>
                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="660"
                                    data-y="340" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2500"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="669"
                                    data-y="347" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="2700"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 11;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="691"
                                    data-y="380" 
                                    data-speed="300"
                                    data-start="3000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">Naya Raipur beckons

                                </div>
                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                                    data-x="660"
                                    data-y="380" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="3000"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                </div>
                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                                    data-x="669"
                                    data-y="386" 
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="300"
                                    data-start="3200"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 14;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy.png" alt="" data-ww="17" data-hh="17" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/img/check.png">
                                </div>
                                <div class="caption lfl"
                                    data-x="53"
                                    data-y="30"
                                    data-speed="300"
                                    data-start="1400"
                                    data-easing="easeOutExpo">
                                    
                                </div>
                                <div class="caption lfl"
                                    data-x="323"
                                    data-y="145"
                                    data-speed="300"
                                    data-start="1500"
                                    data-easing="easeOutExpo">
                                    
                                </div>
                                <div class="caption lfl"
                                    data-x="472"
                                    data-y="253"
                                    data-speed="300"
                                    data-start="1600"
                                    data-easing="easeOutExpo">
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Slider --> 
                <!-- Main Content -->
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                                <div class="content-box big ch-item bottom-pad-small">
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-1"><i class="fa fa-rocket"></i></div>
                                            <div class="ch-info-back">
                                                <i class="fa fa-rocket"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-info">
                                        <h3>Start a Business</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
                                        </p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="border-bottom margin-top30">
                                    </div>
                                    <div class="border-bottom">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                                <div class="content-box big ch-item bottom-pad-small">
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-1"><i class="fa fa-check"></i></div>
                                            <div class="ch-info-back">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-info">
                                        <h3>When to Apply</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
                                        </p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="border-bottom margin-top30">
                                    </div>
                                    <div class="border-bottom">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                                <div class="content-box big ch-item">
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-1"><i class="fa fa-tags"></i></div>
                                            <div class="ch-info-back">
                                                <i class="fa fa-tags"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-info">
                                        <h3>What Incentives</h3>
                                        <p>
                                            Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
                                        </p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="border-bottom margin-top30">
                                    </div>
                                    <div class="border-bottom">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Main Content -->
                <!-- Product Content -->
                <div class="product-lead bottom-pad margin-top100">
                    <div class="pattern-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12 text-center wow fadeInLeft">
                                    <img class="app-img" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/cm3.jpg" alt="iPhone5c">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                                    <div class="app-service padding-bottom50">
                                        <h2 class="light">Dr. Raman Singh.</h2>
                                        <h4>Honorable Chief Minister </h4>
                                        <p>The State of Chhattisgarh is fast emerging as the next big story of India. State has maintained a robust State GDP growth rate averaging more then 11% in the last three years. The State has been consistently ranked first amongst new states and second overall on Investment Intent in the country. This Electronics, IT and ITeS Policy is designed  to make Chhattisgarh an attractive destination for investment by Electronics, IT and ITeS investors.  
                                        </p>
                                        <div class="divider"></div>
                                        <div class="learnmore">
                                            <a class="btn-special btn-grey" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="accordion-item">
                                    <h4 class="accordion-toggle">Naya Raipur–1 Smart City of the country & upcoming I.T Hub</h4>
                                    <section class="accordion-inner panel-body">
                                        <p>
                                            Naya Raipur is the 1st
 Smart City of India with an area of 237 sq. k.m in which an 
investment of  Rs.5 thousand crores is already done and a further investment of 
Rs. 10 thousand crores is in the pipeline.
                                        </p>
                                    </section>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-toggle">High Return on Investment</h4>
                                    <section class="accordion-inner panel-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </section>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-toggle">Human Resource</h4>
                                    <section class="accordion-inner panel-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </section>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-toggle">Electricity</h4>
                                    <section class="accordion-inner panel-body">
                                        <p>
                                             Chhattisgarh  State  is  a  power  surplus  state  with  current  generating  capacity  of 
21000 MW which is targeted to increase to 41000 MW by the end of 12th Five 
Year  Plan.  The  State's  electrical  tariff  is  35%  cheaper  than  all  India  average. 
Availability of uninterrupted quality power supply at a very competitive rate will 
reduce  the  operational  cost  for  Electronics  Manufacturing  Clusters  and  IT/ITeS 
industries thereby leading to cost effective production.
                                        </p>
                                    </section>
                                </div>
								 <div class="accordion-item">
                                    <h4 class="accordion-toggle">Central Location & Excellent Connectivity</h4>
                                    <section class="accordion-inner panel-body">
                                        <p>
                                             
                                        </p>
                                    </section>
                                </div>
                            </div>
                            <!-- /Accordin -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">
                            <h2>Incentives</h2>
                            <!-- Progress Bars -->
                            <div class="skills-wrap">
							<div class="skills-wrap">
                                <div class="skillbar clearfix " data-percent="80%">
                                    <div class="skillbar-title" style="background: #d35400;"><span>Land Premium</span></div>
                                    <div class="skillbar-bar" style="background: #e67e22;"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- /Skill Bar -->
                                <div class="skillbar clearfix " data-percent="50%">
                                    <div class="skillbar-title" style="background: #2980b9;"><span>Fixed Capital Investment</span></div>
                                    <div class="skillbar-bar" style="background: #3498db;"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                                <!-- /Skill Bar -->
                                <div class="skillbar clearfix " data-percent="75%">
                                    <div class="skillbar-title" style="background: #2c3e50;"><span>Interest Subsidy</span></div>
                                    <div class="skillbar-bar" style="background: #2c3e50;"></div>
                                    <div class="skill-bar-percent">75%</div>
                                </div>
                                <!-- /Skill Bar -->
                                <div class="skillbar clearfix " data-percent="50%">
                                    <div class="skillbar-title" style="background: #46465e;"><span>Lease/Rental Space</span></div>
                                    <div class="skillbar-bar" style="background: #5a68a5;"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                                <!-- /Skill Bar -->
                                <div class="skillbar clearfix " data-percent="100%">
                                    <div class="skillbar-title" style="background: #333333;"><span>Stamp Duty </span></div>
                                    <div class="skillbar-bar" style="background: #525245;"></div>
                                    <div class="skill-bar-percent">100%</div>
                                </div>
                                <!-- /Skill Bar -->
                                <div class="skillbar clearfix " data-percent="100%">
                                    <div class="skillbar-title" style="background: #27ae60;"><span>CST  and  Entry  Tax</span></div>
                                    <div class="skillbar-bar" style="background: #2ecc71;"></div>
                                    <div class="skill-bar-percent">100%</div>
                                </div>
                                <!-- /Skill Bar -->
								<!-- /Skill Bar -->
                                <div class="skillbar clearfix " data-percent="100%">
                                    <div class="skillbar-title" style="background: #FFBF00;"><span>Electricity  Duty</span></div>
                                    <div class="skillbar-bar" style="background: #F7FE2E;"></div>
                                    <div class="skill-bar-percent">100%</div>
                                </div>
                                <!-- /Skill Bar -->
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
                                        <h2 class="light wow fadeIn">Some Random Facts</h2>
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
                                                Investment
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
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item wow fadeIn">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/01.png"></a></div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item wow fadeIn">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/2.jpg"></a></div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item wow fadeIn">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/6.png"></a></div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item wow fadeIn">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/03.png"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/04.png"></a></div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/5.png"></a></div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/02.png"></a></div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/clientslogo/01.png"></a></div>
                                                        </div>
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
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
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
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <p> 
                                                <strong class="contact-pad">Chhattisgarh Infotech & Biotech Promotion Society (CHiPS),
3rd Floor, State Data Centre Building,
Opp. New Circuit House,
Civil Lines, Raipur-492001
Chhattisgarh</strong>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <p><strong>Phone:</strong>(0771) 4014158 /4023123(0771) 4066205 </p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <p><strong>Email:</strong>support@SWCS.com</a></p>
                                        </li>
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
 
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
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
        (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
    </script>
</body>
</html>