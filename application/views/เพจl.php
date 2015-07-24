<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ร้านอาหาร | Corlate</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url();?>front_page/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>front_page/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>front_page/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <!--<div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>-->
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="<?php echo base_url();?>index.php/usersingin"><i class="fa fa-facebook"></i></a></li>
<!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                            </ul>
                            <div class="search">
                                <form role="form" action="formres_controller/showAllres" method="POST">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>front_page/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">หน้าแรก</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ร้านอาหาร <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu ">
                                <li><a href="<?php echo base_url();?>index.php/formres_controller/showAllres">ร้านทั้งหมด</a></li>
                                <li><a href="<?php echo base_url();?>index.php/formres_controller">เพิ่มร้านอาหาร</a></li>
                            </ul>
                        </li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/Diseplay">สมาชิก</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->
        </br>
<div class="container" style="background-color:rgba(200,240,240,0.1)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
          <div class="col-xs-12 moblie-mode">
            <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
          <br>
            <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
            <span class="glyphicon-class"><h3>........</h3></span>
            
            
            
            
            
          </div><!--col-xs-12 moblie-mode-->
        </div><!--col-xs-12 col-sm-12-->
    </div><!--/.row-offcanvas row-offcanvas-right-->
</div><!--/.container-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        </div>
    </section><!--/#bottom-->

       <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
<!--                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<script src="<?php echo base_url();?>front_page/js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="<?php echo base_url();?>front_page/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>front_page/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>front_page/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>front_page/js/main.js"></script>
    <script src="<?php echo base_url();?>front_page/js/wow.min.js"></script>
</body>
</html>