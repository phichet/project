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
                            Food Table
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="food_controller/showfood" method="POST">
                                        <div class="form-group">

        
    <table class="table table-hover">
        <theder>
               <th>ID</th>
               <th>Food Name</th>
               <th>Res Name</th>
               <th>Res ID</th>
               <th>photo ID</th>
               <th>photo Name</th>
               <th>Cate_ID</th>
               <th></th>           
        </theder>
        <tbody>
    <?php
    if(count($foodAll)){
        foreach ($foodAll as $food){
            echo "<tr>
                    <td>".$food['food_id']."</td>
                    <td><a href='".base_url()."index.php/food_controller/showdetail/".$food['food_id']."'>".$food['food_name']."</td>
                    <td>".$food['res_name']."</td>
                    <td>".$food['res_id']."</td>
                    <td>".$food['photo_id']."</td>
                    <td>".$food['photo_name']."</td>
                    <td>".$food['cate_id']."</td> 
                    <td>
             <a class='btn btn-info btn-sm' role='button' href='".base_url()."index.php/food_controller/showdetail/".$food['food_id']."' >รายละเอียดเพิ่มเติม<br></a>
             <a class='btn btn-warning btn-sm' role='button' href='".base_url()."index.php/food_controller/getfood/".$food['food_id']."' >แก้ไข<br></a>
             <a class='btn btn-danger btn-sm' role='button' href='".base_url()."index.php/food_controller/delfood/".$food['food_id']."' >ลบ<br></a>
            </td>
                 </tr>";
                          
                } 
    }
    ?>
    <?php //echo json_encode($food); ?>
    </tbody>
    </table>

                                    </div>

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

