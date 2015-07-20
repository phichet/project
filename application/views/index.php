<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>หน้าแรก | Corlate</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url();?>front_page/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_page/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>front_page/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage" style="">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <!-- <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div> -->
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                            </ul>
                            <div class="search">
                                <form role="form">
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
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
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
        <div class="col-xs-12 col-sm-9">
        	<!-- Slide Show -->
<!--	            <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
				   Indicators 
				  <ol class="carousel-indicators">
				    <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
				    <li data-slide-to="1" data-target="#carousel-example-generic" class=""></li>
                                    <li data-slide-to="2" data-target="#carousel-example-generic" class=""></li>
				  </ol>-->

                                <!--Wrapper for slides -->
<!--			<div role="listbox" class="carousel-inner">
                                        <div class="item active">
                                            <a target="_blank" href="http://www.thisisnakhonsawan.com/festival/p2.php">
                                               <img src="images/slider/bg2.jpg">
                                            </a>
                                                <div class="carousel-caption">
                                                </div>
                                        </div>
				    	<div class="item">
                                            <a target="_blank" href="http://nakhonsawangames44.com/webnwgames/">
				      		<img src="images/slider/bg1.jpg">
                                            </a>
				      		<div class="carousel-caption">
                                                </div>
				    	</div>
				    	<div class="item">
				      		<img src="images/slider/bg3.jpg">
				      		<div class="carousel-caption">
				      		</div>
				    	</div>
			</div>  -->
                                <!--Wrapper for slides -->

				  <!-- Controls -->
<!--				  <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
				    <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
				    <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>-->
			<!-- Slide Show -->
		
		</br>
      <!-- News Topic -->
        <div class="row">
          <div class="col-xs-12 font-super">
            <div class="col-xs-9">
              <h2><b class="font-super">ใหม่</b></h2>
            </div>
            <div class="col-xs-3 col-xs-offset-9  txt-right extra-margin-top">
              <a href="news.php">เพิ่มเติม</a>
            </div>
          </div>
          <div class="col-xs-12">
            <hr class="hr-margin-button">
          </div>
        </div>

        <div class="row">
             <div class="col-sm-6 media-margin">
              <div class="media">
                <div class="media-left">
                  <img width="100" height="100" src="news/p12/1.jpg" class="media-object">
                </div>
                <div class="media-body">
                  <a class="font-review" href="news/p12.php"><b>พ่อวอนช่วยด่วน !! สาวหน้าตาดี ถูกลักพาตัว และเธอแอ</b></a><br>
                  วันที่ 10 ก.ค. นายฉลาด กองสำลี อยู่หมู่ 9 บ้านหนองแสน ต.หนองแสน อ.วาปีปทุม จ.มหาสารคาม ร้อ                
                </div>
              </div>
             </div> <!-- / col-sm-6 --> 
        </div><!--/row-->
        <br>
        <br>
        <!-- News Topic -->

        <!-- Food Topic -->

        <div class="row">
          <div class="col-xs-12 font-super">
            <div class="col-xs-9">
              <h2><b class="font-super">ร้านอาหาร</b></h2>
            </div>
            <div class="col-xs-3 col-xs-offset-9 txt-right extra-margin-top">
              <a href="food.php">เพิ่มเติม</a>
            </div>
          </div>
          <div class="col-xs-12">
            <hr class="hr-margin-button">
          </div>
        </div>

        <div class="row">
            <div class="col-sm-6 media-margin">
              <div class="media">
                <div class="media-left">
                    <img width="100" height="100" src="image/food/60.jpg" class="media-object">
                </div>
                <div class="media-body">
                  <a class="font-review" href="fooddetail.php?id=60"><b>แพเจ้นงค์</b></a><br>
                  ริมเขื่อนแม่น้ำเจ้าพระยา หน้าศาลแขวง ถ.โกสีย์ใต้ ต.นครสวรรค์ตก เมืองนครสวรรค์, นครสวรรค์ 6                </div>
              </div> 
            </div> <!-- / col-sm-6 -->
                        <br>
        </div><!--/row-->

        <!-- Food Topic -->
        <br>

         <!-- <div class="col-sm-4">--><!-- รูปแบนเน้อด้านล่าง --> 
        <!--  <a href="bank.php"><img class="img-responsive" src="image/bank-bar.png"></a>
        </div>
        <div class="col-sm-4">
          <a href="emergencycalls.php"><img class="img-responsive" src="image/tel-bar.png"></a>
        </div>
        <div class="col-sm-4">
          <a href="seven-eleven.php"><img class="img-responsive" src="image/711-bar.png"></a>
        </div> -->



        </div><!--/.col-xs-12.col-sm-9-->

      <div id="sidebar" class="col-xs-12 col-sm-3 sidebar-offcanvas">
<!--  <center class="font-super">
    <form id="cse-search-box" action="http://www.google.co.th">
      <div>
        <input type="hidden" value="partner-pub-3141519297299394:3524133263" name="cx">
        <input type="hidden" value="UTF-8" name="ie">
        <input type="text" size="26" name="q" style="border: 1px solid rgb(126, 157, 185); padding: 2px; background: rgb(255, 255, 255) url(&quot;//cse.google.co.th/cse/intl/th/images/google_custom_search_watermark.gif&quot;) no-repeat scroll left center;">
        <input type="submit" value="Search" name="sa">
      </div>
    <input type="hidden" name="siteurl" value="www.thisisnakhonsawan.com/"><input type="hidden" name="ref" value="www.thisisnakhonsawan.com/review/p6.php"><input type="hidden" name="ss"></form>
  </center>-->
<script src="http://www.google.co.th/coop/cse/brand?form=cse-search-box&amp;lang=th" type="text/javascript"></script>
<!-- Recommend Tab -->
  <br>
  <div class="row header-topic padding-topic font-super">
    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
    <span class="glyphicon-class"><b>รีวิว</b></span>
  </div>

    <div class="media">
    <div class="media-left">
        <img width="50" height="50" src="review/p7/1.jpg" class="media-object">
    </div>
  <div class="media-body">
    <a class="font-review" href="review/p7.php"><b>[รีวิว] Ant-Man คนหรือมด !!</b></a><br>
    หลังจากที่หนัง Ant Man ได้เข้าโรงเป็นที่เรียบร้อยแล้ว ทางที่นี่นครสวรรค์ก็ได้ไปดูมาก็อยากจะรีวิวหนังเรื่องนี้เหลือเกิน เลยทำโพสนี้ออกมาครับ    </div>
  </div>
    
    
    
  
  <p></p>
  <a href="review.php" class="btn btn-warning btn-xs btn-block font-super" type="button">เพิ่มเติม</a>
  <br>
  
        </div><!--/.sidebar-offcanvas-->      
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