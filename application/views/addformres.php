<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
                <br>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span class="glyphicon-class"><h2>เพิ่มร้าน</h2></span> 
                </br>
                <form class=""role="form" action="formres_controller/addres" method="POST" enctype="multipart/form-data">
                    <?php
                    if ($this->session->flashdata('msg_error')) {
                        echo '<p><font color=red>';
                        echo $this->session->flashdata('msg_error');
                        echo '</font></p>';
                    }
                    $personl = $this->session->userdata('email');
//               $profile_pic =  "http://graph.facebook.com/".$personl['id']."/picture?type=small";
//      
//                echo "<img src=\"" . $profile_pic . "\" />"."&nbsp";
//                echo "  ".$personl['name']."<br/>";
//               // persoonel 
//               //echo "ยินดีต้อนรับคุณ : ".$personl->name." ".$personl->personnel_lastname."  ";
//                echo "<a href='".base_url()."index.php/usersingin/logout'class='btn btn-primary btn-xs' role='button'>Logout</a>";
//                
                    ?>

                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGB6CfHD2BcKTi0Uc31nsAm6xQ4Z7s3uQ"></script>
                    <body onload="initialize()"><!--*********-->
                        <div class="row" align="center">
                            <div class="col-xs-12">
                                <div class="img-thumbnail" float="none" id="map_canvas" align="center" style="width:600px;height:400px;" >
                                </div></br>
                            </div>
                        </div>


                        <div class="row" >
                            <div class="col-lg-9 col-xs-12"> 
                                <P class="col-lg-5 col-xs-12"><b> ชื่อร้าน </b><input class="form-control" type="text" name="Restaurant"  value="" /> </p>                                 
                                <input type="hidden" name="lat" id="latbox" value=""/>          
                                <input type="hidden" name="lng" id="lngbox" value=""/>                                     
                                <P class="col-lg-7 col-xs-12"><b> ที่อยู่ </b><input class="form-control" type="text" name="address"  value=""/> </p>                       
                                <P class="col-lg-4 col-xs-12"><b> เบอร์โทร </b><input class="form-control" type="text" name="phone"  value=""/> </p>                        
                                <P class="col-lg-3 col-xs-12"><b> ราคาเริ่มต้น </b><input class="form-control" type="text" name="pricemin"  value="" placeholder="xxx บาท"/> </p>
                                <P class="col-lg-3 col-xs-12"><b>ถึง</b><input class="form-control" type="text" name="pricemax"  value="" placeholder="xxx บาท"/> </p>
                                <div class="col-lg-12 col-xs-12"> 
                                    <div class="col-lg-2 col-xs-6">
                                        <b> ที่จอดรถ : </b>
                                    </div>
                                    <div class="col-lg-4 col-xs-6">
                                        <input type="radio" value="1" class="radio-inline" name="parking"><b> มี </b>
                                        <input type="radio" value="0" class="radio-inline" name="parking"><b> ไม่มี </b>
                                    </div>
                                </div>  
                                <div class="col-lg-12">
                                    <p><b> รายละเอียด </b></br><textarea class="form-control" name="Detail" rows="10" cols="10"></textarea></p></br> 
<!--                                    <input class="btn btn-success" type="submit" name="submit"/>-->
                                </div>
                            </div>                           
                        </div>
                        <div>
                            <div class="col-sm-9" id="t">
                                <h4>เพิ่มรูปร้าน</h4>            
                                <div  id="photo">            
                                    <div class="col-lg-10 col-xs-12">
                                        </br>
                                        <table>
                                            <tr>
                                                <td> 
                                                    <?php
                                                    $id = 1;
                                                    echo "<img id='uploadPreview" . $id . "' src='" . base_url() . "photo/no_image.jpg' class='img-thumbnail' width='100' height='100'/></br></br>";
                                                    echo "<input id='uploadImage" . $id . "' type='file' name='userfile[]' onchange='PreviewImage(" . $id . ");'/>";
                                                    ?>
                                                </td>
                                                <td >
                                                    <?php
//                                                    echo "<p> คำบรรยายรูป  </p><input align='' id='detail" . $id . "' class='form-control' name='detail_photores[]' value=''  rows='3' cols='5'/>";
                                                    ?>
                                                </td>         
                                            </tr>
                                        </table> </br> </div>                                
                                    </br>
                                    <script type="text/javascript">
                                        function PreviewImage(no) {
                                            var oFReader = new FileReader();
                                            oFReader.readAsDataURL(document.getElementById("uploadImage" + no).files[0]);
                                            oFReader.onload = function (oFREvent) {
                                                document.getElementById("uploadPreview" + no).src = oFREvent.target.result;
                                            };
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                            <br/>
                            <br/>                     
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-xs-9">
                                    <input type="button" class="btn btn-warning" value="เพิ่มรูป..." id="Clone" />
                                </div>
                                <div class="col-lg-3 col-lg-offset-7 col-xs-3 col-xs-offset-9">
                                    <input value="ตกลง" type="submit" name="Post" class="btn btn-success"/>
                                </div>
                            </div>
                        </div></br>
                </form> 
                <script src="<?php echo base_url(); ?>front_page/js/jquery.min.js"></script>

                <script type="text/javascript" >
                                    $(document).ready(function () {
                                        var max_fields = 4;
                                        var x = 0;
                                        var id = 1;
                                        var base_url = window.location.origin;
                                        $("#Clone").click(function () {
                                            id++;
                                            x++;
                                            if (x < max_fields) { //max input box allowed
                                                ($("#photo").clone()
                                                        .find("input:text").val("").end()
                                                        .find("input:text").attr('id', 'detail' + id).end()
                                                        .find("img").attr('id', 'uploadPreview' + id).end()
                                                        .find("img").attr('src', base_url + "/webci/photo/no_image.jpg").end()
                                                        .find("input:file").attr('id', 'uploadImage' + id).end()
                                                        .find("input:file").attr('onchange', 'PreviewImage(' + id + ")").end()
                                                        .appendTo("#t"));
                                            }
                                        });
                                    });
                </script>

                <script type="text/javascript">
                    function initialize() {
                        var myLatlng = new google.maps.LatLng(17.628087, 100.097616);
                        var myOptions = {
                            zoom: 15,
                            center: myLatlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                        }
                        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
//                            title: 'Default Marker',
                            draggable: true
                        });
                        google.maps.event.addListener(marker, 'drag', function (event) {
                            document.getElementById('latbox').value = this.position.lat();
                            document.getElementById('lngbox').value = this.position.lng();
                            //alert('drag');
                        });
                        google.maps.event.addListener(marker, 'dragend', function (event) {
                            document.getElementById('latbox').value = this.position.lat();
                            document.getElementById('lngbox').value = this.position.lng();
                            alert('นี่คือตำแหน่งร้าน ?');
                        });
                    }
                </script>
