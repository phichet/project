 <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Food 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form role="form" action="food_controller/showdetail" method="POST">
                                        <div class="form-group">
       
        
            
            <table class="table">
        <theder>
               <!--<th>ID</th>-->
               
        </theder>                                
                <tbody> 
            <?php
                if(count($foodAll)){
                    foreach ($foodAll as $food_list){
                       if($food_list['food_id']==$id){
                       $food=$food_list;  
                       }
                    }
                    ?>
                        <tr>
                             <td>
                                 <table class="col-sm-8">
                                     <tr>
                                       <td class="col-sm-5" valign="top"> 
                                            <?php if($food['food_id']==$id){
                                             echo "<b>ชื่อร้าน</b>" ." : " .$food['res_name'] ;?> </br>
                                            <?php echo "<b>ที่อยู่</b>" ." : " .$food['address'] ;?></br>
                                            <?php echo "<b>เบอร์โทร</b>" ." : " .$food['phone'] ;?> </br>
                                            <?php echo "<b>Price</b>" ." : " .$food['price'] ;?> </br>
                                            <?php  if(key_exists('parking',$food)==1){
                                            echo "<b>Parking</b>" ." : "."Yes","<br/>";
                                                    }
                                                    else {
                                            echo "<b>Parking</b>" ." : " ."No","<br/>";
                                                    } ;?>
                                       </td>
                                       <td class="col-sm-3"> 
                                             <?php echo "<b>Food ID</b>" ." : " .$food['food_id'] ;?> </br>
                                             <?php echo "<b>Food Name</b>" ." : " .$food['food_name'] ;?> </br>
                                             <?php echo "<b>Category</b>" ." : " .$food['cate_id'] ;?> </br>
                                             <?php echo "<b>Category</b>" ." : " .$food['cate_name'] ;?> </br>
                                             <?php echo "<b>DetilFood</b>" ." : " .$food['detail'] ;?> </br>
                                             <?php     
                                            }
                                            ?>        
                                        </td>  
                                     </tr>
                                 </table>
                             </td>
                         </tr> 
               <?php                 
                }
            ?>            
         </tbody>   
            </table>
               <hr>    
               <div> <?php echo"<b>Photo</b>";?></div></br>
                         <?php foreach ($foodAll as $photo ) {
                        if($photo['food_id']==$food['food_id']){?>      
                             <div class="col-sm-4 col-md-3">
                                <div class="thumbnail">
                                  <img alt="" class="img-thumbnail" style="width:250px;height:150px;" src="<?php echo base_url();?>photo/<?php echo$photo['photo_name'];?>"></br>
                                  <div class="caption">
                                    <hr>
                                    <p class ="wording"><?php echo" ".$photo['detail'];?></p>
                                  </div>
                                </div>
                              </div>

                                <?php        }
                                } ?>            
                        </div>
        <div>
            <?php
             //echo "<a href='".base_url()."index.php/formres_controller/addres' class='btn btn-success btn-sm' role='button'>Add Restaurant</a> ";
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

