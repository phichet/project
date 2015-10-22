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
                            Profile
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <?php
//print_r($userdata);
//echo json_encode($userdata);
        $profile_pic =  "http://graph.facebook.com/".$userdata['id']."/picture?type=large ";
      
        echo "<img class='img-thumbnail' src=\"" . $profile_pic . "\" /><br/>";
    
        echo "ID" ." : ".$userdata['id'],"<br/>";
        echo "Name" ." : " .$userdata['name'],"<br/>";
        echo "Firstname". " : " .$userdata['first_name'],"<br/>";
        echo "Lastname" ." : " .$userdata['last_name'],"<br/>";
        
        
            if(!key_exists('email',$userdata)){
                echo "Email" ." : ","<br/>";
            }
            else {
                echo "Email" ." : " .$userdata['email'],"<br/>";
            }
        echo "Gender" ." : " .$userdata['gender'],"<br/>";
        echo "Location" ." : " .$userdata['locale'],"<br/><br/>";
        ?> 
            
                                        </div>

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-3">
                                    <h1></h1>
                                    <form role="form">
                                        
                                           <div class="form-group">
                                                <?php
            echo "<a href ='../formres_controller/#".$userdata['email']."' class='btn btn-info btn-sm btn-block' role='button'>Add Restaurant</a>";
              echo "<a href ='../formres_controller/showAllres/#".$userdata['email']."' class='btn btn-success btn-sm btn-block' role='button'>Show Restaurant</a>";
              echo "<a href ='../food_controller/#".$userdata['email']."' class='btn btn-info btn-sm btn-block' role='button'>Add Food</a>";
              echo "<a href ='../food_controller/showfood/#".$userdata['email']."' class='btn btn-success btn-sm btn-block' role='button'>Show Food</a>";
        ?>
                                    </div>
                                  </form>

                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
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


