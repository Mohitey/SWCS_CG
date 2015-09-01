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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css'>
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
                                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="phone-login pull-right">
                                <a><i class="fa fa-phone"></i> Call Us : +880 -111-111</a>
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
                            <h1>
                               <a href="<?=$this->createUrl('/home')?>">
                                    <img class="logo-color" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo_green_small.png" alt="gallaxy" width="64" height="64" >
                                </a>
                            </h1>
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
                               
								
								<?php
									$REDIRECT_URL=$_SERVER['REDIRECT_URL'];
									$REDIRECT_URL=trim($REDIRECT_URL);
									$REDIRECT_URL=str_replace("/","",$REDIRECT_URL);
									if(empty($REDIRECT_URL)){
										echo '<li id="current"><a href="./">Home</a></li>';                                            
									}
									else{
										echo '<li><a href="./">HOME</a></li>';
									}  
									
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
										$aid = "";
										if($REDIRECT_URL==$tstub){
											$aclass="class=''";
											$aid="id='current'";
										}
										else{
											if(count($children)>0) {
												echo "<li  class='sf-with-ul'>";
												echo "<a $aid href='$url' class='sf-with-ul'>$pageName";
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
                                
                            </ul>
                        </nav>
                        <!-- /Menu --> 
                    </div>
                </div>
                <!-- /Main Header -->
            </header>
            <!-- /Header --> 
            <?=$content?>
            <!-- Footer Start -->
            <footer id="footer">
                <div class="pattern-overlay">
                    <!-- Footer Top Start -->
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                                    <h3 class="light">About</h3>
                                    <p> 
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                                    </p>
                                </section>
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                                    <h3 class="light">Twitter Stream</h3>
                                    <ul id="tweets">
                                    </ul>
                                </section>
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                                    <h3 class="light">Contact Us</h3>
                                    <ul class="contact-us">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <p> 
                                                <strong class="contact-pad">Address:</strong> House: 325, Road: 2,<br> Mirpur DOHS <br>
                                                Dhaka, Bangladesh 
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <p><strong>Phone:</strong> +880 111-111-111</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <p><strong>Email:</strong><a href="-protection#b6c5c3c6c6d9c4c2f6d0dfd0d9c2ded3dbd3c598d5d9db"><span class="__cf_email__" data-cfemail="cab9bfbabaa5b8be8aaca3aca5bea2afa7afb9e4a9a5a7">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
                                                /* <![CDATA[ */!function () {
                                                    try {
                                                        var t = "currentScript"in document ? document.currentScript : function () {
                                                            for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                                                                if (t[e].getAttribute("cf-hash"))
                                                                    return t[e]
                                                        }();
                                                        if (t && t.previousSibling) {
                                                            var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                                                            if (a) {
                                                                for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                                                                    i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                                                                e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                                                            }
                                                        }
                                                    } catch (u) {
                                                    }
                                                }();/* ]]> */</script></a></p>
                                        </li>
                                    </ul>
                                </section>
                                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                                    <h3 class="light">Subscribe</h3>
                                    <p>
                                        Subscribe to our email newsletter to receive our news, updates and awesome free files.
                                    </p>
                                    <form method="get" action="#">
                                        <div class="input-group">
                                            <input type="text" value="mail@example.com" onfocus="if (this.value == 'mail@example.com')
                                                        this.value = '';" onblur="if (this.value == '')
                                                                    this.value = 'mail@example.com';" class="subscribe form-control">
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
                    <!-- Footer Top End --> 
                    <!-- Footer Bottom Start -->
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                                    <p class="credits">&copy; Copyright 2014 by <a href="#">FIFOLAB</a>. All Rights Reserved. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                                    <ul class="social social-icons-footer-bottom">
                                        <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li class="dribbble"><a href="#" data-toggle="tooltip" title="Dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="rss"><a href="#" data-toggle="tooltip" title="Rss"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Bottom End --> 
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
                <!-- /Login Modal -->
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

