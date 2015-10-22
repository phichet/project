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
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="formres_controller/showdetail" method="POST">
                                        <div class="form-group col-lg-12">
    </head>
    <body  onload="initialize()">
       <div class="row" align="center">
                     <div class="col-lg-12">
        <div  float="none" id="map_canvas" align="center" style="width:420px;height:420px;" ></div></br>
                                </div></div>
                        <div class="row" >
                                <div class="col-lg-8">
            <table class="table">
        <theder>     
        </theder>                                
                <tbody>                                                                     
       <?php
                if(count($resAll)){
                    foreach ($resAll as $row){?>
                         <tr>
                             <td>
                                 <table class="">
                                     <tr>
                                       <td class="col-lg-7"> 
                                            <?php echo "<b>Res Name</b>" ." : " .$row['res_name'] ;?> </BR>
                                            <?php echo "<b>Address</b>" ." : " .$row['address'] ;?></br>
                                            <?php echo "<b>Pone</b>" ." : " .$row['phone'] ;?>
                                       </td>
                                       <td class="col-lg-5"> 
                                             <?php echo "<b>Price</b>" ." : " .$row['price'];?></br>
                                             <?php  if(!key_exists('parking',$row)==0){
                                            echo "<b>Parking</b>" ." : "."Yes","<br/>";
                                                    }
                                                    else {
                                            echo "<b>Parking</b>" ." : " ."No","<br/>";
                                                    } ;                                                    
        ?>                                            
                                        </td>  
                                     </tr>
                                 </table>
                             </td>   
                         </tr> 
                        <?php 
                    }
                }
                ?>
                </tbody>   
            </table>
                    <hr>
                 <table>
                    <tr>
                        <td>
                         <input type="hidden" id="latbox" value="<?php echo $row['lat'];?>" />                                                      
                         <input type="hidden" id="lngbox" value="<?php echo $row['lng'];?>" />  
                        </td>
                    </tr>
                 </table>      
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGB6CfHD2BcKTi0Uc31nsAm6xQ4Z7s3uQ"> </script>                   
    <script type="text/javascript">
var Lat =document.getElementById('latbox').value;
var Lng =document.getElementById('lngbox').value;
var myLatlng=new google.maps.LatLng(Lat,Lng);
    function initialize()
    {
    var myOptions = {
      center:myLatlng,
      zoom:16,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      }
    var map=new google.maps.Map(document.getElementById("map_canvas"),myOptions);
    var marker=new google.maps.Marker({
      position:myLatlng,
      
      });
    marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
        </script>
                                    </div>
                                 </form>
                             <br/>
                            <!-- /.row (nested) -->
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