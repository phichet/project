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
                                        <div class="form-group col-lg-8">
            <table class="table table-hover col-lg-6" border="1">
        <theder>
               <th>ID</th>
               <th>Name</th>
                         
        </theder>                                
                <tbody>                                                                     
       <?php
                if(count($resAll)){
                    foreach ($resAll as $row){?>
                    
                         <tr>
                             <td>
                                 <table class="col-lg-8" border="1">
                                     <tr>
                                       <td> <?php echo "Res Name" ." : " .$row['res_name'] ;?> </BR>
                                            <?php echo "Address" ." : " .$row['address'] ;?></br>
                                            <?php echo "Pone" ." : " .$row['phone'] ;?>
                                       
                                       </td>
                                       <td> &nbsp; <?php echo "Price" ." : " .$row['price'] ;?> </br>
                                            &nbsp; <?php  if(key_exists('parking',$row)==1){
                                            echo "Parking" ." : "."Yes","<br/>";
                                                    }
                                                    else {
                                            echo "Parking" ." : " ."No","<br/>";
                                                    } ;?>
                                        </td>  
                                     </tr>
                                 </table>
                             </td>
                             <td><?php echo $row['lat'] ;?></br>
                                 <?php echo $row['lng'] ;?>
                             </td>
                             
                        
                                
                                
                    
                        <?php echo "      </tr>";
                    }
                }
                ?>
                </tbody>   
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
<!--    <div>
        echo "Res ID" ." : " .$row['res_id'];
                    echo "Res Name" ." : " .$row['res_name'],"<br/>";
                    echo "Lat" ." : " .$row['lat'],"<br/>";
                    echo "Lng" ." : " .$row['lng'],"<br/>";  
                    echo "Address" ." : " .$row['address'],"<br/>";
                    echo "Pone" ." : " .$row['phone'],"<br/>";
                    echo "Price" ." : " .$row['price'],"<br/>";
                                      
                            if(key_exists('parking',$row)==1){
                                echo "Parking" ." : "."Yes","<br/>";
                            }
                            else {
                                echo "Parking" ." : " ."No","<br/>";
                                }
    </div>-->