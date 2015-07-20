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
                            Category Table
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
        <div>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGB6CfHD2BcKTi0Uc31nsAm6xQ4Z7s3uQ"> </script>   
    </head>
    <body onload="initialize()">
       <div class="row" align="center">
                     <div class="col-lg-12">
                         <div  float="none" id="map_canvas" align="center" style="width:420px;height:420px;" >
                         </div></br>
                     </div>                                
       </div>
                        <div class="row">
                                <div class="col-lg-9">
           
            <?php
                echo form_open('index.php/formres_controller/update'); //update ต้องใช้ echo form_open          
            ?>
                                    
            <input type="text" name="id"  value="<?php echo $up['res_id'];?>" hidden=""/>
            <P class="col-lg-5"> Restaurants_Name <input class="form-control" type="text" name="Restaurant"  value="<?php echo $up['res_name'];?>" /> </p>
<!--****-->         <input class="form-control" type="hidden" name="lat"  id="latbox" value="<?php echo $up['lat'];?>" /> 
<!--****-->         <input class="form-control" type="hidden" name="lng"  id="lngbox" value="<?php echo $up['lng'];?>" /> 
            <P class="col-lg-7"> Address <input class="form-control" type="text" name="address"  value="<?php echo $up['address'];?>" /> </p>
            <P class="col-lg-4"> Phone <input class="form-control" type="text" name="phone"  value="<?php echo $up['phone'];?>" /> </p>
            <P class="col-lg-3"> Price <input class="form-control" type="text" name="price"  value="<?php echo $up['price'];?>" /> </p>
            <div class="col-lg-8"> 
                Parking : <input type="radio" value="1" class="radio-inline" name="parking"<?php if($up['parking']==1) echo "checked";?>> Yes
                          <input type="radio" value="0" class="radio-inline" name="parking"<?php if($up['parking']==0) echo "checked";?>> No 
            </div>           
            <div class="col-lg-8">
            <P> Detail <textarea class="form-control" name='Detail' rows="10" cols="10"><?php echo $up['detail'];?></textarea> </p>
            <input class="btn btn-success" type="submit" name="submit"/>
            </div>  
                                </div>
                        </div>       
        <script type="text/javascript">
var Lat =document.getElementById('latbox').value;
var Lng =document.getElementById('lngbox').value;
var myLatlng=new google.maps.LatLng(Lat,Lng);
function initialize() {
           {
          var myOptions = {
           zoom: 16,
           center: myLatlng,
           mapTypeId: google.maps.MapTypeId.ROADMAP,
           }
          var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
          var marker = new google.maps.Marker({
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
    marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
}
        </script>
            <?php echo form_close(); ?>            
        </div>
                                </div>  
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
