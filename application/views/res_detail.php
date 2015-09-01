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
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                            <span><h2><?php echo$row['res_name']; ?> </h2></span></br>
                            <?php
                        }
                    }
                    ?>
                    <div onload="initialize()">
                        <div class="row ">
                            <div class="col-sm-8">
                                
                                <div class="">
                                    <div class="container">
                                        <form class="form-inline">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-success btn-xs">
                                                    <p id="borderless-checkbox" type="hidden"> Borderless</p>
                                                </label>
                                            </div>
                                        </form>
                                        <br>
                                        <!-- The container for the list of example images -->
                                        <div id="links">
                                            <?php
                                foreach ($imgres as $img) {
//                                    echo $img;                         
                                ?>
                                            <a href="<?php echo base_url() ?>img_res/<?php echo $img['imgres_name'] ?>" title="<?php echo $img['imgres_detail'] ?>" data-gallery>
                                                <img src="<?php echo base_url() ?>img_res/<?php echo $img['imgres_name'] ?>" style="width: 60px; height: 60px">
                                            </a>
                                              <?php
                                            }
//                                        }
                                ?>
                                        </div>
                                        <br>
                                    </div>
                                    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                                    <div id="blueimp-gallery" class="blueimp-gallery">
                                         <!--The container for the modal slides--> 
                                        <div class="slides"></div>
                                         <!--Controls for the borderless lightbox--> 
                                        <h3 class="title"></h3>
                                        <a class="prev">‹</a>
                                        <a class="next">›</a>
                                        <a class="close">×</a>
                                        <a class="play-pause"></a>
                                        <ol class="indicator">
                                            <li style="background-image: url('<?php echo base_url() ?>img_res/<?php echo $img['imgres_name'] ?>');" title="<?php echo $img['imgres_detail'] ?>" data-index="0"></li>
                                        </ol>
                                         <!--The modal dialog, which will be used to wrap the lightbox content--> 
                                        <div class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title"></h4>
                                                    </div>
                                                    <div class="modal-body next"></div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left prev">
                                                            <i class="glyphicon glyphicon-chevron-left"></i>
                                                            Previous
                                                        </button>
                                                        <button type="button" class="btn btn-primary next">
                                                            Next
                                                            <i class="glyphicon glyphicon-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
//                                            }
//                                        }
                                ?>

                            </div>

                            <?php
                            foreach ($resAll as $row) {
                                ?> 
                                <div class="col-sm-4 ">
                                    <div class="img-rounded" float="none" id="map_canvas" align="center" style="width:100%;height:200px;" ></div></br>
                                </div>      
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
                                                        <?php // echo "<b>Res Name</b>" ." : " .$row['res_name'] ;  ?> </BR>
                                                        <?php echo "<b>ที่อยู่</b>" . " : " . $row['address']; ?></br>
                                                        <?php echo "<b>โทร</b>" . " : " . $row['phone']; ?>
                                                    </td>
                                                    <td class="col-xs-3"> 
                                                        <?php echo "<b>ราคา</b>" . " : " . $row['price']; ?></br>
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
                            <?php
                        }
                        ?>

                        <div class="row">
                            <div class="col-xs-12"></br>
                                <div class="col-xs-8">
                                    <?php echo "<a class='glyphicon glyphicon-pencil btn btn-warning' role='button' href='" . base_url() . "index.php/formres_controller/get_update/" . $row['res_id'] . "'>แก้ไข<br></a> "; ?>   
                                </div>
                                <div class="col-xs-3offset-3">
                                    <a class="btn btn-success" href='<?php echo base_url(); ?>index.php/food_controller/get_addfood/<?php echo $idres ?>'>เพิ่มอาหาร</a>
                                </div>
                            </div>
                        </div></br> 
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
                        <!--<div class="col-xs-9">-->
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
                        if ($resids['res_id'] == $idres) {
                            ?>
                            <div class="row">
                                <div class="col-sm-6 media-margin">
                                    <div class="media">
                                        <div class="media-body">
                                            <a class="font-review" href="news/p12.php"><b><?php echo"<a href='" . base_url() . "index.php/food_controller/showdetail/" . $resids['food_id'] . "'>" . $resids['food_name']; ?></b></a><br>
                                            <?php echo $resids['address']; ?> &nbsp; <?php echo $resids['phone']; ?>              
                                        </div>
                                    </div>
                                </div> <!-- / col-sm-6 --> 
                            </div><!--/row-->           
                            <?php
                        }
                    }
                };
                ?>
                <br>