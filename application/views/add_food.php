<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>รายละเอียดร้านอาหาร | Corlate</title>
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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
<!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                            </ul>
                            <div class="search">
                                <form role="form" action="food_controller/addfood" method="POST" enctype="multipart/form-data">
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
                        <li><a href="<?php echo base_url();?>index.php/formres_controller/showAllres">ร้านอาหาร</a></li>
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
            <span class="glyphicon-class"><h3>เพิ่มอาหาร</h3></span>
            <div class="row">
                <div class="col-xs-4">
            <?php
            echo "<label>ร้าน</label>"."<select class='form-control input-sm' name='Restaurant' id='Restaurant' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'>";   
            echo "<option value='' selected>กรุณาเลือก</option>";
              if(count($resid)){ 
                foreach ($resid as $resids){
                   
                    echo"<option value='".$resids['res_id']."'>".$resids['res_name']."</option>";
                }
              }
               echo "</select>"   
                ?> 
              
                
            </br>                     
            <P><label>ชื่ออาหาร</label> <input class="form-control" type="text" name="Food"  value="" /> </p>                                       
                <label>ประเภทอาหาร</label>
                
            <?php
            echo "<select class='form-control input-sm' name='Category' id='Category' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'>";                               
            echo "<option value='' selected>กรุณาเลือก</option>";
              if(count($cateid)){ 
                foreach ($cateid as $cateids){
                   
                    echo"<option value='".$cateids['cate_id']."'>".$cateids['cate_name']."</option>";
                }
              }
               echo "</select>"   
                ?> 
                </div>
                
                </div>
                </div>                                           
        
            <div class="col-sm-7 col-sm-offset"></br>
                <P><label> รายละเอียด</label> </p><textarea class="form-control" name="Detail" rows="10" cols="50"></textarea></br> 
            </div>
            </div>    
            <hr>
            <div class="">
            <div class="col-sm-10" id="t">
            <h4>อัพโหลดรูปใหม่</h4>            
            <div  id="photo">            
            <div class="col-xs-10">
            </br>
            <table>
    <tr>
	<td> 
            <?php
            $id=1;       
            echo "<img id='uploadPreview".$id."' src='".base_url()."photo/no_image.jpg' class='img-thumbnail'/></br></br>";
            echo "<input id='uploadImage".$id."' type='file' name='userfile[]' onchange='PreviewImage(".$id.");'/>";	          
            ?>
        </td>
        <td>
        <?php
           echo "<p> คำบรรยายรูป  </p><input align='' id='detail".$id."' class='form-control' name='detail_photo[]' value=''  rows='3' cols='5'/>";
        ?>
        </td>         
            </tr>
            </table> </br> </div>   
        </br>
        </br>
        <script type="text/javascript">
            function PreviewImage(no) {
                var oFReader = new FileReader();
               oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);
                oFReader.onload = function(oFREvent) {
                   document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
                };
            }
        </script>
            
            </div>
                </div>
                    <!--</div>-->
        <br/>
        <br/>
        <div class="col-xs-8 col-md-offset-3">
            <div>
            </br></br>
            </div>
       </div></div>
            
        <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-9">
                        <input type="button" class="btn btn-warning" value="เพิ่มรูป..." id="Clone" />
                    </div>
                    <div class="col-xs-3 col-xs-offset-3">
                        <input type="submit" name="Post" class="btn btn-success"/>
                    </div>
                </div>
        </div></br>
            
        
          
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
<script>
                            $(document).ready(function(){
                                var max_fields      = 4;
                                var x = 0;
                                $id =1;
                            $("#Clone").click(function(){
                                $id++;
                                 x++;
                                 if(x < max_fields){ //max input box allowed

                            ($("#photo").clone()
                                .find("input:text").val("").end()
                                .find("input:text").attr('id','detail'+$id).end()
                                .find("img").attr('id','uploadPreview'+$id).end()
                                .find("img").attr('src',"../photo/no_image.jpg").end()
                                .find("input:file").attr('id','uploadImage'+$id).end()
                                .find("input:file").attr('onchange','PreviewImage('+$id+")").end()
                                .appendTo("#t")); 
                                }
                            });
                            });
                        </script>
