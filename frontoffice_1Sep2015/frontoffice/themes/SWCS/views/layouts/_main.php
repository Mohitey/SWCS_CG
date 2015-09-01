<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html> 
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?=APP_NAME?></title> <meta name="description" content="Gallaxy Responsive HTML5/CSS3 Template from FIFOTHEMES.COM">
        <meta name="author" content="FIFOTHEMES.COM">
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
        <link rel="stylesheet" href=<?php echo Yii::app()->theme->baseUrl; ?>/"css/prettyPhoto.css" media="screen">
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
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
        <![endif]-->
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
                            <h1>
                                <a href="<?=$this->createUrl('/home')?>">
                                    <img class="logo-color" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo_green_small.png" alt="gallaxy" width="64" height="64" >
                                </a>
                            </h1>
                            <p><br /></p>
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
                                    <a href="<?=$this->createUrl('/home')?>">
                                        Home
                                    </a>    
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                        Features 
                                        <span class="sf-sub-indicator">
                                            <i class="fa fa-angle-down "></i>
                                        </span>
                                    </a>
                                    <ul>
                                        <li><a href="shortcodes.html" class="sf-with-ul">Shortcodes</a></li>
                                        <li><a href="components.html" class="sf-with-ul">Components</a></li>
                                        <li><a href="icons.html" class="sf-with-ul">Icons</a></li>
                                        <li><a href="columns.html" class="sf-with-ul">Columns</a></li>
                                        <li><a href="pricing-table.html" class="sf-with-ul">Pricing Tables</a></li>
                                        <li>
                                            <a href="#" class="sf-with-ul"> 
                                                Third Level Menu 
                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="fa fa-angle-right "></i>
                                                </span>
                                            </a>
                                            <ul>
                                                <li><a href="#" class="sf-with-ul">Menu Item</a></li>
                                                <li><a href="#" class="sf-with-ul">Menu Item</a></li>
                                                <li><a href="#" class="sf-with-ul">Menu Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                        Shop 
                                        <span class="sf-sub-indicator">
                                            <i class="fa fa-angle-down "></i>
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sf-with-ul"> 
                                                Products
                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="fa fa-angle-right "></i>
                                                </span>
                                            </a>
                                            <ul>
                                                <li><a href="shop.html" class="sf-with-ul">Products</a></li>
                                                <li><a href="shop-left-sidebar.html" class="sf-with-ul">Left Sidebar Products</a></li>
                                                <li><a href="shop-right-sidebar.html" class="sf-with-ul">Right Sidebar Products</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-view.html" class="sf-with-ul">Product View</a></li>
                                        <li><a href="shoping-cart.html" class="sf-with-ul">Shoping Cart</a></li>
                                        <li><a href="checkout.html" class="sf-with-ul">Proceed to Checkout</a></li>
                                        <li>
                                            <a href="#" class="sf-with-ul"> 
                                                My Account
                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="fa fa-angle-right "></i>
                                                </span>
                                            </a>
                                            <ul>
                                                <li><a href="my-account.html" class="sf-with-ul">My Account</a></li>
                                                <li><a href="my-account-information.html" class="sf-with-ul">My Account Information</a></li>
                                                <li><a href="my-address.html" class="sf-with-ul">My Address</a></li>
                                                <li><a href="my-orders.html" class="sf-with-ul">My Orders</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="confirmation.html" class="sf-with-ul">Confirmation Page</a></li>
                                        <li><a href="password-recovery.html" class="sf-with-ul">Password Recovery</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a id="current" href="#" class="sf-with-ul">
                                        Pages
                                        <span class="sf-sub-indicator">
                                            <i class="fa fa-angle-down "></i>
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sf-with-ul">
                                                About
                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="fa fa-angle-right"></i>
                                                </span>
                                            </a>
                                            <ul>
                                                <li><a href="about-me.html" class="sf-with-ul">About Me</a></li>
                                                <li><a href="about.html" class="sf-with-ul">About Us</a></li>
                                                <li><a href="about-2.html" class="sf-with-ul">About Us Option</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sf-with-ul">
                                                Services
                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="fa fa-angle-right"></i>
                                                </span>
                                            </a>
                                            <ul>
                                                <li><a href="services.html" class="sf-with-ul">Services</a></li>
                                                <li><a href="services-2.html" class="sf-with-ul">Services Option</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="testimonials.html" class="sf-with-ul">Testimonials</a></li>
                                        <li><a href="full-width.html" class="sf-with-ul">Full Width Page</a></li>
                                        <li><a href="page-left-sidebar.html" class="sf-with-ul">Left Sidebar</a></li>
                                        <li><a href="page-right-sidebar.html" class="sf-with-ul">Right Sidebar</a></li>
                                        <li><a href="page-left-navigation.html" class="sf-with-ul">Left Navigation</a></li>
                                        <li><a href="page-right-navigation.html" class="sf-with-ul">Right Navigation</a></li>
                                        <li><a href="page-login.html" class="sf-with-ul">Login / Register</a></li>
                                        <li><a href="page-coming-soon.html" class="sf-with-ul">Coming Soon</a></li>
                                        <li>
                                            <a href="#" class="sf-with-ul">
                                             
                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="fa fa-angle-right "></i>
                                                </span>
                                            </a>
                                            <ul>
                                                <li><a href="faq.html" class="sf-with-ul">FAQ</a></li>
                                                <li><a href="faq-2.html" class="sf-with-ul">FAQ Option</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="page-404.html" class="sf-with-ul">404 Page</a></li>
                                        <li><a href="sitemap.html" class="sf-with-ul">Sitemap</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                        Portfolio
                                        <span class="sf-sub-indicator">
                                            <i class="fa fa-angle-down "></i>
                                        </span>
                                    </a>
                                    <ul>
                                        <li><a href="portfolio-two.html" class="sf-with-ul">2 Column</a></li>
                                        <li><a href="portfolio-three.html" class="sf-with-ul">3 Column</a></li>
                                        <li><a href="portfolio-four.html" class="sf-with-ul">4 Column</a></li>
                                        <li><a href="portfolio-full-width.html" class="sf-with-ul">Full Width</a></li>
                                        <li><a href="portfolio-single.html" class="sf-with-ul">Single Item Page</a></li>
                                        <li><a href="portfolio-single-big.html" class="sf-with-ul">Single Large Item Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                        Blog
                                        <span class="sf-sub-indicator">
                                            <i class="fa fa-angle-down "></i>
                                        </span>
                                    </a>
                                    <ul>
                                        <li><a href="blog-left-sidebar.html" class="sf-with-ul">Left Sidebar Blog</a></li>
                                        <li><a href="blog-right-sidebar.html" class="sf-with-ul">Right Sidebar Blog</a></li>
                                        <li><a href="blog-full-width.html" class="sf-with-ul">Blog Full Width</a></li>
                                        <li><a href="single-post.html" class="sf-with-ul">Single Post</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Contact
                                        <span class="sf-sub-indicator">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul>
                                        <li><a href="contact.html" class="sf-with-ul">Contact</a></li>
                                        <li><a href="contact-2.html" class="sf-with-ul">Contact Option</a></li>
                                        <li><a href="contact-3.html" class="sf-with-ul">Contact Option 2</a></li>
                                    </ul>
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
             <?=$content?>
           
            <!-- /Main Section -->
            <!-- Footer -->
            <footer id="footer">
                <div class="pattern-overlay">
                    <!-- Footer Top -->
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
                                            <p><strong>Email:</strong><a href="http://demo.fifothemes.com/cdn-cgi/l/email-protection#f784828787988583b7919e9198839f929a9284d994989a"><span class="__cf_email__" data-cfemail="7c0f090c0c130e083c1a151a1308141911190f521f1311">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
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
                    <!-- Footer Top --> 
                    <!-- Footer Bottom -->
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
                    <!-- /Footer Bottom --> 
                </div>
            </footer>
            <!-- /Footer --> 
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
            <!-- /Modal -->
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
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.knob.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/waypoints.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/wow.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.fitvids.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/spectrum.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/switcher.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>
        <script>
            $(function () {
                try {
                    var s, a, i, j, r, c, l = document.getElementsByTagName("a"), t = document.createElement("textarea");
                    for (i = 0; l.length - i; i++) {
                        try {
                            a = l[i].getAttribute("href");
                            if (a && a.indexOf("/cdn-cgi/l/email-protection") > -1 && (a.length > 28)) {
                                s = '';
                                j = 27 + 1 + a.indexOf("/cdn-cgi/l/email-protection");
                                if (a.length > j) {
                                    r = parseInt(a.substr(j, 2), 16);
                                    for (j += 2; a.length > j && a.substr(j, 1) != 'X'; j += 2) {
                                        c = parseInt(a.substr(j, 2), 16) ^ r;
                                        s += String.fromCharCode(c);
                                    }
                                    j += 1;
                                    s += a.substr(j, a.length - j);
                                }
                                t.innerHTML = s.replace(/</g, "&lt;").replace(/>/g, "&gt;");
                                l[i].setAttribute("href", "mailto:" + t.value);
                            }
                        } catch (e) {
                        }
                    }
                } catch (e) {
                }
            })();
        </script>
    </body>
</html>

