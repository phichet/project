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
                            Group Table
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="group_controller/showgroup" method="POST">
                                        <div class="form-group">
        
    <table class="table table-hover">
        <theder>
               <th>ID</th>
               <th>Group Name</th>
               <th></th>         
        </theder>
        <tbody>
    <?php
    if(count($groupAll)){
                foreach ($groupAll as $row){
                    echo "<tr>
                        
                          <td>".$row['group_id']."</td>
                          <td>".$row['group_name']."</td>
                         
             <td>
             
            <a class='btn btn-warning btn-sm' role='button' href='".base_url()."index.php/group_controller/getgroup/".$row['group_id']."' >แก้ไข<br></a>
            <a class='btn btn-danger btn-sm' role='button' href='".base_url()."index.php/group_controller/delgroup/".$row['group_id']."' >ลบ<br></a>
            </td>
                          </tr>";

                } 
    }?>
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