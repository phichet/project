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
                    Restaurants Table
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="formres_controller/showAllres" method="POST">
                                <div class="form-group">

                                    <table class="table table-hover">
                                        <theder>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Lat</th>
                                            <th>Lng</th>
                                            <th></th>           
                                        </theder>
                                        <tbody>
                                            <?php
                                            if (count($resAll)) {
                                                foreach ($resAll as $row) {
                                                    echo "<tr>
                        
                          <td>$row->res_id</td>
                          <td><a href='" . base_url() . "index.php/formres_controller/resdetail/$row->res_id'>$row->res_name</td>
                          <td>$row->lat</td>
                          <td>$row->lng</td>
             <td>
             <a class='btn btn-info' role='button' href='" . base_url() . "index.php/formres_controller/resdetail/$row->res_id' >รายละเอียด<br></a>
             <a class='btn btn-warning' role='button' href='" . base_url() . "index.php/formres_controller/get_update/$row->res_id' >แก้ไข<br></a>
             <a class='btn btn-danger btn-sm' role='button' href='" . base_url() . "index.php/formres_controller/del/$row->res_id' >ลบ<br></a>  
            </td>
                          </tr>";
                                                }
                                            }
                                            ?>
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
