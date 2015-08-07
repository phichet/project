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
                <form role="form" action="formres_controller/addres" method="POST">
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
                                <div class="img-thumbnail" float="none" id="map_canvas" align="center" style="width:420px;height:420px;" >
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
                </form> 

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
                            title: 'Default Marker',
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
                            alert('OK ?');
                        });
                    }
                </script>
