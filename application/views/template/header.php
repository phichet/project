<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ที่นี่...อุตรดิตถ์</title>
        <link href="<?php echo base_url(); ?>front_page/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>front_page/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>front_page/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>front_page/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>front_page/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>front_page/css/bootstrap-social.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>front_page/css/uploadfile.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>front_page/css/lightgallery.css" rel="stylesheet">


        <!--    [if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
            <![endif]       -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>front_page/images/ico/HereUTT.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>front_page/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>front_page/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>front_page/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>front_page/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
    <body>

        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-8">
                            <!-- <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div> -->
                        </div>
                        <div class="col-sm-4 col-sm-offset-7 col-xs-3 col-xs-offset-7 ">
                            <div class="social">
                                <!--                                <ul class="social-share">
                                                                    <li><a href="<?php // echo base_url('index.php/usersingin/home');       ?>"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="<?php echo base_url(); ?>index.php/usersingin/home"><i class="btn-sm btn-info" style="width: 100%">login</i></a></li> 
                                                                    <li></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                </ul>-->
                                <div>

                                    <?php

                                    if ($this->session->userdata('username') != '') {
                                        echo "คุณ " . $this->session->userdata('user');
                                       
                                        ?>
                                        <a href="<?php echo base_url(); ?>index.php/usersingin/logout">
                                            <i class="btn btn-sm-google-plus fa" >ออกจากระบบ</i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo base_url(); ?>index.php/usersingin/home">
                                            <i class="btn btn-sm-google-plus fa" >เข้าสู่ระบบ</i></a>


                                    <?php } ?>


                                </div>
                                <!--                                <div class="search">
                                                                    <form role="form">
                                                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                                                    <i class="fa fa-search"></i>
                                                                    </form>
                                                                </div>-->
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
                        <a class="navbar-brand"  href="<?php echo base_url(); ?>index.php/usersingin">
                            <!--<img class="img-responsive" src="<?php // echo base_url();       ?>front_page/images/logo.png" alt="logo" >-->
                            <div class="logo-xs visible-xs"></div>
                            <div class="logo-sm visible-sm"></div>
                            <div class="logo-md visible-md"></div>
                            <div class="logo-lg visible-lg"></div>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/usersingin">หน้าแรก</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ร้านอาหาร <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu ">
                                    <li><a href="<?php echo base_url(); ?>index.php/formres_controller/showAllres">ร้านทั้งหมด</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/formres_controller">เพิ่มร้านอาหาร</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/category_controller/showcate">ประเภทอาหาร</a></li>
                                </ul>
                            </li>
                            <!--                            <li><a href="services.html">Services</a></li>
                                                        <li><a href="portfolio.html">Portfolio</a></li>-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">หน้า <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>index.php/formres_controller/recommend">เพิ่มร้านแนะนำ</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/formres_controller/show_recom">ร้านแนะนำ</a></li>
                                    <!--                                    <li><a href="404.html">404</a></li>
                                                                        <li><a href="shortcodes.html">Shortcodes</a></li>-->
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>index.php/welcome/Diseplay">สมาชิก</a></li> 
                            <li><a href="#">เกี่ยวกับ</a></li>                        
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
            <div id="bottom">
                <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                </div>
            </div>
        </header><!--/header-->
        </br>



