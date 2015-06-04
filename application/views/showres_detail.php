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
                            Res
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="formres_controller/showdetail" method="POST">
                                        <div class="form-group col-lg-12">
            <table class="table">
        <theder>
               <!--<th>ID</th>-->
               
        </theder>                                
                <tbody>                                                                     
       <?php
                if(count($resAll)){
                    foreach ($resAll as $row){?>
                    
                         <tr>
                             <td>
                                 <table class="col-lg-8">
                                     <tr>
                                       <td class="col-lg-7"> 
                                            <?php echo "<b>Res Name</b>" ." : " .$row['res_name'] ;?> </BR>
                                            <?php echo "<b>Address</b>" ." : " .$row['address'] ;?></br>
                                            <?php echo "<b>Pone</b>" ." : " .$row['phone'] ;?>
                                       
                                       </td>
                                       <td class=""> 
                                             <?php echo "<b>Price</b>" ." : " .$row['price'] ;?> </br>
                                             <?php  if(key_exists('parking',$row)==1){
                                            echo "<b>Parking</b>" ." : "."Yes","<br/>";
                                                    }
                                                    else {
                                            echo "<b>Parking</b>" ." : " ."No","<br/>";
                                                    } ;?>
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
                          <?php echo "<b>Lat</b>" ." : " .$row['lat'] ;?></br>
                          <?php echo "<b>Lng</b>" ." : " .$row['lng'] ;?>                              
                        </td>
                    </tr>
                 </table>                        
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
