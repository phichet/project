<html>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Restaurants Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="formres_controller/addres" method="POST">
                                        <div class="form-group">
          
<?php
if ($this->session->flashdata('msg_error'))
{
    echo '<p><font color=red>';
    echo $this->session->flashdata('msg_error');
    echo '</font></p>';
}


                // name
               $personl=$this->session->userdata('email');
               
//               $profile_pic =  "http://graph.facebook.com/".$personl['id']."/picture?type=small";
//      
//                echo "<img src=\"" . $profile_pic . "\" />"."&nbsp";
//                echo "  ".$personl['name']."<br/>";
//               // persoonel 
//               //echo "ยินดีต้อนรับคุณ : ".$personl->name." ".$personl->personnel_lastname."  ";
//                echo "<a href='".base_url()."index.php/usersingin/logout'class='btn btn-primary btn-xs' role='button'>Logout</a>";
// 
//                ?>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGB6CfHD2BcKTi0Uc31nsAm6xQ4Z7s3uQ"> </script>
        <script type="text/javascript">
           function initialize() {
           var myLatlng = new google.maps.LatLng(17.628087,100.097616);
           var myOptions = {
             zoom: 14,
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
        
    </head>
    <body  onload="initialize()">
       <div class="row" align="center">
                     <div class="col-lg-12">
        <div  float="none" id="map_canvas" align="center" style="width:500px;height:500px;" ></div></br>
                                </div></div>
                        <div class="row" >
                                <div class="col-lg-4">
            <?php
//            if(isset($detail)){
//                    echo $detail;
//                }
//            echo form_open('index.php/formes_controller/addres'); ?>
            <P> Restaurants Name <input class="form-control" type="text" name="Restaurant"  value="" /> </p>
            <P> Lat <input class="form-control" type="text" name="lat" id="latbox" value=""/> </p>
            <P> Lng <input class="form-control" type="text" name="lng"  id="lngbox" value=""/> </p>
            <P> Address <input class="form-control" type="text" name="address"  value="" /> </p>
            <P> Phone <input class="form-control" type="text" name="phone"  value="" /> </p>
            <P> Price <input class="form-control" type="text" name="price"  value="" /> </p>
            <div><P> Parking <select class="form-control" name="parking">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                       </select> </p>
            </div>
                       </div>
                                </div>
                        <div class="row" >
                           <div class="col-lg-10">
            <P align=""> Detail <textarea class="form-control" name="Detail" rows="10" cols="10"></textarea></p></br> 
            <input type="submit" name="submit"/><br/>
            <?php // echo form_close(); ?>
                           </div>
                            </div>
                            
                                        </div>

                                    </form>
                                </div>
                                
                                <!--/.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>         
</html>            
        


