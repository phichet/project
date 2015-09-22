
<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-lg-9">
            <!-- Slide Show -->
            <!--            <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                            Indicators 
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
                                <li data-slide-to="1" data-target="#carousel-example-generic" class=""></li>
                                <li data-slide-to="2" data-target="#carousel-example-generic" class=""></li>
                            </ol>-->

            <!--Wrapper for slides -->
            <!--                <div role="listbox" class="carousel-inner">
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
            <!--                <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
                                <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
                                <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>-->
            <!-- Slide Show -->

            <!-- News Topic -->
            <div class="row">
                <div class="col-xs-12 font-super">
                    <div class="col-xs-9">
                        <h2><b class="glyphicon glyphicon-pushpin font-superglyphicon glyphicon-pushpin "> ร้านแนะนำ</b></h2>
                    </div>
                    <!--                    <div class="col-xs-3 txt-right extra-margin-top">
                                            <a href="news.php">เพิ่มเติม</a>
                                        </div>-->
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
            </div></br>
            <form role="form" action="food_controller/showrecom" method="POST">
                <?php

                foreach ($recom as $row) {
                    ?> 

                    <div class="col-sm-6">                            
                        <div class="listing p">                         
                            <div class="picture">                                  
                                <a href="<?php echo base_url(); ?>index.php/formres_controller/resdetail/<?php echo $row['res_id']; ?>"> 
                                    <?php
                                        if ($row['imgres_name'] != null) {
                                            ?>
                                            <i title="<?php echo $row['res_name']; ?>" style="background-image: url(<?php echo base_url(); ?>img_res/<?php echo $row['imgres_name']; ?>)">
                                                <img width="250px" height="200px" class="img-rounded" title="<?php echo $row['res_name']; ?>" alt="<?php echo $row['res_name']; ?>" src="<?php echo base_url(); ?>img_res/<?php echo $row['imgres_name']; ?>">
                                            </i>
                                        <?php

                                        
                                        }
//                                    }
//                                    }
                                    ?>  
                                </a>
                            </div>
                            <div class="title">
    <?php echo "<a href='" . base_url() . "index.php/formres_controller/resdetail/" . $row['res_id'] . "'>" . $row['res_name'] . " </a>"; ?>
                            </div>
                        </div>
                        </br> 
                    </div>

                    <?php
//                                print_r($row);
//                }
                }
                ?>
            </form>
            <!--            <div class="row">
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
                            </div>  / col-sm-6  
                        </div>/row-->
            <br>
            <br>
            <!-- News Topic -->

            <!-- Food Topic -->

            <div class="row">
                <div class="col-xs-12">
                    <hr>
                    <div class="col-xs-9">
                        <h2><b class="font-super glyphicon glyphicon-cutlery "> ร้านอาหาร</b></h2>
                    </div>
                    <div class="col-xs-4 col-xs-offset-9">
                        <a href="<?php echo base_url(); ?>index.php/formres_controller/showAllres">เพิ่มเติม</a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <hr >
                </div>
            </div></br>
            <!--/row-->
            <div class="row" role="group">
                <?php
                if (count($resAll)) {
                    foreach ($resAll as $row) {
                        ?>
                        <div class="media col-xs-12" id="resshow">
                            <div class="media-left media-top" >
                                <a href="#">
                                    <img class="media-object img-rounded" width="100" height="100" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <!--<a class="font-review media-heading" href="fooddetail.php?id=60"><b>Middle aligned media</b></a>-->
                                <article><b><?php echo "<a class'font-review media-heading' href='" . base_url() . "index.php/formres_controller/resdetail/" . $row['res_id'] . "'>" . $row['res_name'] ?></b></a></article>
                                <article><p class="font-gary"><?php echo $row['address'] ?></p></article>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?> 
            </div>

            <!-- Food Topic -->
            <br>
            <!-- รูปแบนเน้อด้านล่าง --> 
            <!--            <div class="col-sm-4">
                            <a href="bank.php"><img class="img-rounded img-responsive" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg"></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="emergencycalls.php"><img class="img-rounded img-responsive" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg"></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="seven-eleven.php"><img class="img-rounded img-responsive" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg"></a>
                        </div> 
                        <br>-->


        </div><!--/.col-xs-12.col-sm-9-->

        <!--<div id="sidebar" class=" sidebar-offcanvas">-->
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
        <div id="sidebar" class="col-lg-3 sidebar-offcanvas">
            <div class="col-xs-12 row header-topic padding-topic font-super">
                <span class="" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-bookmark"><b> รีวิว</b></span>
            </div>

            <div class="media col-xs-12">
                <div class="media-left">
                    <img width="50" height="50" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg" class="img-rounded media-object">
                </div>
                <div class="media-body">
                    <article><a class="font-review" href="review/p7.php"><b>[รีวิว] Ant-Man คนหรือมด !!</b></a></article>
                    <article><p>หลังจากที่หนัง Ant Man ได้เข้าโรงเป็นที่เรียบร้อยแล้ว ทางที่นี่นครสวรรค์ก็ได้ไปดูมาก็อยากจะรีวิวหนังเรื่องนี้เหลือเกิน เลยทำโพสนี้ออกมาครับ </p></article>  
                </div>
                </br>
                <div class="col-lg-12 col-lg-offset-0 col-sm-5 col-sm-offset-4">
                    <p><a href="review.php" class="btn btn-warning btn-xs btn-block font-super" type="button">เพิ่มเติม</a></p>
                </div>
            </div>
        </div>
        <!--</div>-->







