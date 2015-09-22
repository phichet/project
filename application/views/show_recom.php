<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">

                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>จัดการร้านแนะนำ</h3></span>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <form role="form" action="index.php/formres_controller/show_recom" method="POST">
                                <div class="col-sm-offset-3">

                                    <table class="table table-hover">
                                        <thead>
<!--                                            <th>รหัสแนะนำ</th>
                                            <th>รหัสร้าน</th>-->
                                        <th>ชื่อร้าน</th>
                                        <th></th>

                                        </thead>
                                        <tbody>
                                            <?php
                                            if (count($recom)) {
                                                foreach ($recom as $row) {
                                                    echo "<tr>
                          <td><a href='" . base_url() . "index.php/formres_controller/resdetail/" . $row['res_id'] . "'>" . $row['res_name'] . "</td>        
             <td>    
             <a class='btn btn-danger btn-sm' role='button' href='" . base_url() . "index.php/formres_controller/delrecom/" . $row['recom_id'] . "' >ลบ<br></a>  
            </td>
                          </tr>";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <div>
                                <a class="col-sm-offset-10 btn btn-success btn-sm" role="button" href="<?php echo base_url(); ?>index.php/formres_controller/recommend">เพิ่มร้านแนะนำ<br></a>
                            </div>
                            </br>
                        </div>  
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>

