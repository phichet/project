          <br>
          <form role="form" action="" method="POST">
          <?php
                if(count($resAll)){
                    foreach ($resAll as $row){?> 
            <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
            <span class="glyphicon-class"><h3>ร้าน : <?php echo$row['res_name'];?> </h3></span>
           
            <div onload="initialize()">
       <div class="row ">
           <div class="col-sm-8">
               <img width="100%" height="300" src="<?php echo base_url();?>front_page/images/restaurants/no-img.png">
           </div>
           <div class="col-sm-4 ">
              <div class="img-thumbnail" float="none" id="map_canvas" align="center" style="width:100%;height:200px;" ></div></br>
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
                                            <?php // echo "<b>Res Name</b>" ." : " .$row['res_name'] ;?> </BR>
                                            <?php echo "<b>Address</b>" ." : " .$row['address'] ;?></br>
                                            <?php echo "<b>Pone</b>" ." : " .$row['phone'] ;?>
                                       </td>
                                       <td class="col-xs-3"> 
                                             <?php echo "<b>Price</b>" ." : " .$row['price'];?></br>
                                             <?php  if(!key_exists('parking',$row)==0){
                                            echo "<b>Parking</b>" ." : "."Yes";
                                                    }
                                                    else {
                                            echo "<b>Parking</b>" ." : " ."No";
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
                
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-9">
                    <?php echo "<a class='glyphicon glyphicon-pencil btn btn-warning' role='button' href='".base_url()."index.php/formres_controller/get_update/".$row['res_id']."'>แก้ไข<br></a> ";?>   
                    </div>
                    <div class="col-xs-3offset-3">
                        <a class="btn btn-success" href='<?php echo base_url();?>index.php/food_controller/get_addfood/<?php echo $idres ?>'>เพิ่มอาหาร</a>
                    </div>
                </div>
            </div></br>

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
<!--          <script type="text/javascript">
          $(document).ready(function(){
            alert('ggg');  
          });
                </script>-->