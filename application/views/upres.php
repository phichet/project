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
                
            if(isset($detail)){
                    echo $detail;
                }
                echo form_open('index.php/formres_controller/update'); //update ต้องใช้ echo form_open
           
            ?>
            <input type="text" name="id"  value="<?=$up['res_id'];?>" hidden=""/>
            <P> Restaurants_Name <input class="form-control" type="text" name="Restaurant"  value="<?=$up['res_name'];?>" /> </p>
            <P> Lat <input class="form-control" type="text" name="lat"  id="latbox" value="<?=$up['lat'];?>" /> </p>
            <P> Lng <input class="form-control" type="text" name="lng"  id="lngbox" value="<?=$up['lat'];?>" /> </p>
            <P> Address <input class="form-control" type="text" name="address"  value="<?=$up['address'];?>" /> </p>
            <P> Phone <input class="form-control" type="text" name="phone"  value="<?=$up['phone'];?>" /> </p>
            <P> Price <input class="form-control" type="text" name="price"  value="<?=$up['price'];?>" /> </p>
            
            <div><P> Parking <select class="form-control" name="parking">
                <option value="1" <?php if($up['parking']==1) echo "selected='selected'";?> >Yes</option>
                <option value="0" <?php if($up['parking']==0) echo "selected='selected'";?> >No</option>
                </select> </p>
            </div>
                                </div>
                                </div>
                       <div class="col-md-6 col-md-offset-1">
            <P align=""> Detail <textarea class="form-control" name='Detail' rows="10" cols="10"><?=$up['detail'];?></textarea> </p>
            <input class="btn btn-success" type="submit" name="submit"/>
                       </div>
            
            
            <?php
            echo form_close();
            ?>
            
           
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
