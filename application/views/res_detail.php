<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <br>
                <form role="form" action="formres_controller/resdetail" method="POST">
                    <?php
                    if (count($resAll)) {
                        foreach ($resAll as $row) {
                            ?> 
                    <span class="glyphicon glyphicon-home" aria-hidden="true"> </span>
                    <span><h2><?php echo$row['res_name']; ?> </h2></span></br>
                            <?php
                        }
                    }
                    ?>
                    <div onload="initialize()">
                        <div class="row ">
                            <div class="col-sm-7">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                                <div class="home">
                                    <div class="demo-gallery">
                                        <ul id="lightgallery" class="list-unstyled col-lg-12">
                                            <?php
                                            if ($imgres == null) {
                                                echo "<img class='img-rounded img-responsive' src='" . base_url() . "front_page/images/restaurants/no-img.jpg' style='width: 100%; height: 300px;'> ";
                                            } else {
                                                foreach ($imgres as $img) {
                                                    echo "<li class='col-lg-2' data-responsive=' " . base_url() . "img_res/" . $img['imgres_name'] . "' data-src=' " . base_url() . "img_res/" . $img['imgres_name'] . "' data-sub-html='" . $img['imgres_detail'] . "'>                                           
                                                        <a href=' " . base_url() . " img_res/" . $img['imgres_name'] . "' title=''>
                                                            <img class='img-responsive' src='" . base_url() . "img_res/" . $img['imgres_name'] . "' style='width: 150px; height: 120px;'>
                                                        </a>
                                                    </li>";
                                                }
                                            }
                                            ?>                                           
                                        </ul>
                                    </div>
                                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#lightgallery').lightGallery();
                        });
                                    </script>

                                </div>
                                
                            </div>

                            <?php
                            foreach ($resAll as $row) {
                                ?> 
                                <div class="col-sm-5 ">
                                    <div class="img-rounded" float="none" id="map_canvas" align="center" style="width:100%;height:260px;" ></div></br>
                                </div>      
                            </div>
                        
                        <div class="col-xs-3offset-3">
                                        <a class="btn-sm btn-instagram" href='<?php echo base_url(); ?>#<?php echo $idres ?>'>เพิ่มรูป</a>
                                    </div> </br> 
                            <table class="table">
                                <theder>     
                                </theder>                                
                                <tbody>                                                                     

                                    <tr>
                                        <td>
                                            <table class="col-xs-10">
                                                <tr>
                                                    <td class="col-xs-3"> 
                                                        <?php // echo "<b>Res Name</b>" ." : " .$row['res_name'] ;   ?> </BR>
                                                        <?php echo "<b>ที่อยู่</b>" . " : " . $row['address']; ?></br>
                                                        <?php echo "<b>โทร</b>" . " : " . $row['phone']; ?>
                                                    </td>
                                                    <td class="col-xs-3"> 
                                                        <?php echo "<b>ราคาเริ่มต้น</b>" . " : " . $row['pricemin']; ?>
                                                        <?php echo "<b>ถึง</b>" ." " .$row['pricemax']." "."บาท";?></br>
                                                        <?php
                                                        if (!key_exists('parking', $row) == 0) {
                                                            echo "<b>ที่จอดรถ</b>" . " : " . "มี";
                                                        } else {
                                                            echo "<b>ที่จอดรถ</b>" . " : " . "ไม่มี";
                                                        };
                                                        ?>                                            
                                                    </td>  
                                                </tr>
                                            </table>
                                        </td>   
                                    </tr> 

                                </tbody>   
                            </table>
                            <input type="hidden" id="latbox" value="<?php echo $row['lat']; ?>" />                                                      
                            <input type="hidden" id="lngbox" value="<?php echo $row['lng']; ?>" />
                            <div class="col-xs-5">
                                <label>รายละเอียด</label></br>
                                <p class="wording"><?php echo $row['detail']; ?></p>
                            </div>


                            <div class="row">
                                <div class="col-xs-12"></br>
                                    <div class="col-xs-1">
                                        <?php echo "<a class='glyphicon glyphicon-pencil btn btn-reddit' role='button' href='" . base_url() . "index.phbtn-xsp/formres_controller/get_update/" . $row['res_id'] . "'>แก้ไข<br></a> "; ?>   
                                    </div>
                                    <div class="col-xs-2">
                                        <a class="glyphicon glyphicon-plus btn btn-link" href='<?php echo base_url(); ?>index.php/food_controller/get_addfood/<?php echo $idres ?>'>เพิ่มรายการอาหาร</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </br> 
                        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGB6CfHD2BcKTi0Uc31nsAm6xQ4Z7s3uQ"></script>                   
                        <script type="text/javascript">
                        var Lat = document.getElementById('latbox').value;
                        var Lng = document.getElementById('lngbox').value;
                        var myLatlng = new google.maps.LatLng(Lat, Lng);
                        function initialize()
                        {
                            var myOptions = {
                                center: myLatlng,
                                zoom: 16,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                            }
                            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                            });
                            marker.setMap(map);
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                        </script>
                    </div>
                </form>

                <div class="row">

                    <div class="col-xs-12 font-super">
                        <hr class="hr-margin-button">   
                        <!--<div class="col-xs-9">
                        <h3><b class="font-super">อาหาร</b></h3>
                        <!--<hr class="hr-margin-button">-->
                        <!--                        </div> -->
                    </div>
                    <!--                    <div class="col-xs-12">
                                            </br>
                                        </div>-->
                </div>
                <?php
                if (count($resid)) {
                    foreach ($resid as $resids) {
//                        print_r($resids);
//                        echo "</br>";
//                        print_r($idres);
                        if ($resids['res_id'] == $idres) {
                            ?>
                            <div class="row">
                                <div class="col-sm-6 media-margin">
                                    <div class="media">
                                        <div class="media-body">
                                            <a class="font-review" href="news/p12.php"><b><?php echo" " . "<a href='" . base_url() . "index.php/food_controller/showdetail/" . $resids['food_id'] . "'>" . $resids['food_name']; ?></b></a></br>
                                            <?php echo "<a class='btn btn-danger btn-xs col-lg-offset-10 ' role='button' href='" . base_url() . "index.php/food_controller/delfood/" . $resids['food_id'] . "' >ลบ<br></a>"?>              
                                        </div>
                                    </div>
                                </div> <!-- / col-sm-6 --> 
                            </div><!--/row-->           
                            <?php
                        }
                    }
                };
                ?>
                </br></br>
               <?php
//               echo $comment;
               ?>
            
              
           
              