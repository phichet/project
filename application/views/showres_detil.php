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
                                    <form role="form" action="formres_controller/showdetil" method="POST">
                                        <div class="form-group">
                                            
       <?php
                if(count($resAll)){
                    foreach ($resAll as $row){
                    echo "Res ID" ." : " .$row['res_id'],"<br/>";
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
                    }
                }
                ?>
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