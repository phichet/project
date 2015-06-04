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
       <!--  <div  class="row">
            <div class="col-sm-12">
                <div class="row">
            <div class="col-md-10 col-md-offset-1"> -->
        
            
           
            <?php
                if(count($foodAll)){
                    foreach ($foodAll as $food){
                    echo "Res ID" ." : " .$food['res_id'],"<br/>";
                    echo "Res Name" ." : " .$food['res_name'],"<br/>";
                    echo "Lat" ." : " .$food['lat'],"<br/>";
                    echo "Lng" ." : " .$food['lng'],"<br/>";  
                    echo "Address" ." : " .$food['address'],"<br/>";
                    echo "Pone" ." : " .$food['phone'],"<br/>";
                    echo "Price" ." : " .$food['price'],"<br/>";
                                      
                            if(key_exists('parking',$food)==1){
                                echo "Parking" ." : "."Yes","<br/>";
                            }
                            else {
                                echo "Parking" ." : " ."No","<br/>";
                                }

                    echo "Food ID" ." : " .$food['food_id'],"<br/>";
                    echo "Food Name" ." : " .$food['food_name'],"<br/>";
                    
                    echo "Category" ." : " .$food['cate_id'],"<br/>";
                    echo "DetilFood" ." : " .$food['detail'],"<br/>";

                    echo "Photo ID" ." : " .$food['photo_id'],"<br/>";
                    echo "Photo Name" ." : " .$food['photo_name'],"<br/>";

                                
                }
            }  

            ?>            
        
        
    
    
    
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

