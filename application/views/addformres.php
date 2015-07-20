<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>เพิ่มร้าน | Corlate</title>
	
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
            <span class="glyphicon-class"><h3>เพิ่มร้าน</h3></span>        
<?php
if ($this->session->flashdata('msg_error'))
{
    echo '<p><font color=red>';
    echo $this->session->flashdata('msg_error');
    echo '</font></p>';
}
               $personl=$this->session->userdata('email');               
//               $profile_pic =  "http://graph.facebook.com/".$personl['id']."/picture?type=small";
//      
//                echo "<img src=\"" . $profile_pic . "\" />"."&nbsp";
//                echo "  ".$personl['name']."<br/>";
//               // persoonel 
//               //echo "ยินดีต้อนรับคุณ : ".$personl->name." ".$personl->personnel_lastname."  ";
//                echo "<a href='".base_url()."index.php/usersingin/logout'class='btn btn-primary btn-xs' role='button'>Logout</a>";
//                ?>
        
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGB6CfHD2BcKTi0Uc31nsAm6xQ4Z7s3uQ"> </script>
    <body onload="initialize()"><!--*********-->
       <div class="row" align="center">
            <div class="col-xs-12">
                <div  float="none" id="map_canvas" align="center" style="width:420px;height:420px;" >
                </div></br>
            </div>
       </div>
    
          
                <div class="row" >
                    <div class="col-xs-9"> 
                        <P class="col-xs-5"><b> ชื่อร้าน </b><input class="form-control" type="text" name="Restaurant"  value="" /> </p>                                 
                            <input type="hidden" name="lat" id="latbox" value=""/>          
                            <input type="hidden" name="lng" id="lngbox" value=""/>                                     
                            <P class="col-xs-7"><b> ที่อยู่ </b><input class="form-control" type="text" name="address"  value=""/> </p>                       
                            <P class="col-xs-4"><b> เบอร์โทร </b><input class="form-control" type="text" name="phone"  value=""/> </p>                        
                            <P class="col-xs-3"><b> ราคา </b><input class="form-control" type="text" name="price"  value=""/> </p>
                 <div class="col-xs-12"> 
                             <div class="col-xs-2">
                                 <b> ที่จอดรถ : </b>
                             </div>
                             <div class="col-xs-4">
                                 <input type="radio" value="1" class="radio-inline" name="parking"><b> มี </b>
                                 <input type="radio" value="0" class="radio-inline" name="parking"><b> ไม่มี </b>
                             </div>
                </div>    
                <div class="col-xs-8">
                    <p><b> รายละเอียด </b><textarea class="form-control" name="Detail" rows="10" cols="10"></textarea></p></br> 
                            <input class="btn btn-success" type="submit" name="submit"/>
                </div>
                    </div>                           
                </div><br/>
    
                                
    
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

        <script type="text/javascript">
           function initialize() {
           var myLatlng = new google.maps.LatLng(17.628087,100.097616);
           var myOptions = {
             zoom: 15,
             center: myLatlng,
             mapTypeId: google.maps.MapTypeId.ROADMAP,
           }
           var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
           marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title: 'Default Marker',
                   draggable:true
           });               
                 google.maps.event.addListener(marker,'drag',function(event) {
                 document.getElementById('latbox').value = this.position.lat();
                 document.getElementById('lngbox').value = this.position.lng();
                 //alert('drag');
             });
             google.maps.event.addListener(marker,'dragend',function(event) {
                 document.getElementById('latbox').value = this.position.lat();
                 document.getElementById('lngbox').value = this.position.lng();
                 alert('OK ?');
             });
           } 
        </script>
