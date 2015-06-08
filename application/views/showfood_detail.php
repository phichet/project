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
                            Food 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="food_controller/showdetail" method="POST">
                                        <div class="form-group">
       
        
            
            <table class="table">
        <theder>
               <!--<th>ID</th>-->
               
        </theder>                                
                <tbody> 
            <?php
                if(count($foodAll)){
                    foreach ($foodAll as $food){?>
                        <tr>
                             <td>
                                 <table class="col-lg-8">
                                     <tr>
                                       <td class="col-lg-7"> 
                                            <?php echo "<b>Res Name</b>" ." : " .$food['res_name'] ;?> </BR>
                                            <?php echo "<b>Address</b>" ." : " .$food['address'] ;?></br>
                                            <?php echo "<b>Pone</b>" ." : " .$food['phone'] ;?> </br>
                                            <?php echo "<b>Price</b>" ." : " .$food['price'] ;?> </br>
                                            <?php  if(key_exists('parking',$food)==1){
                                            echo "<b>Parking</b>" ." : "."Yes","<br/>";
                                                    }
                                                    else {
                                            echo "<b>Parking</b>" ." : " ."No","<br/>";
                                                    } ;?>
                                       </td>
                                       <td class=""> 
                                             <?php echo "<b>Food ID</b>" ." : " .$food['food_id'] ;?> </br>
                                             <?php echo "<b>Food Name</b>" ." : " .$food['food_name'] ;?> </br>
                                             <?php echo "<b>Category</b>" ." : " .$food['cate_id'] ;?> </br>
                                             <?php echo "<b>Category</b>" ." : " .$food['cate_name'] ;?> </br>
                                             <?php echo "<b>DetilFood</b>" ." : " .$food['detail'] ;?> </br>
                                             <?php echo "<b>Photo ID</b>" ." : " .$food['photo_id'] ;?> </br>
                                             <?php echo "<b>Photo Name</b>" ." : " .$food['photo_name'] ;?> 
                                        </td>  
                                     </tr>
                                 </table>
                             </td>
                             
                         </tr> 
                    <?php //  echo json_encode($food) ;?>

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
                          <?php echo "<b>Lat</b>" ." : " .$food['lat'] ;?></br>
                          <?php echo "<b>Lng</b>" ." : " .$food['lng'] ;?>                              
                        </td>
                    </tr>
                 </table>
        
    
    
    
           <!--  </div></div></div></div> -->
        <div>
            <?php
             //echo "<a href='".base_url()."index.php/formres_controller/addres' class='btn btn-success btn-sm' role='button'>Add Restaurant</a> ";
            
          //echo json_encode($food);
            ?>
        </div><br/>
        
                                    </form>
                                </div>
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

