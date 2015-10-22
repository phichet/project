<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        </br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>ประเภทอาหารทั้งหมด</h3></span>

                <div class="panel-body col-lg-9 col-lg-offset-2">
                    <!--<div class="row">-->
                    <div class="col-lg-9">
                        <form role="form" action="category_controller/showcate" method="POST">
                            <div class="form-group">

                                <table class="table table-hover col-lg-5">
                                    <theder>
                                        <th>ประเภทอาหาร</th>
                                        <th></th>
                                        
                                    </theder>
                                    <tbody>
                                        <?php
                                        if (count($cateAll)) {
                                            foreach ($cateAll as $row) {
                                                echo "<tr>
                          <td>" . $row['cate_name'] . "</td>
                       
             <td>
            <a class='btn btn-warning btn-sm ' role='button' href='" . base_url() . "index.php/category_controller/getcate/" . $row['cate_id'] . "' >แก้ไข<br></a>
            <a class='btn btn-danger btn-sm' role='button' href='" . base_url() . "index.php/category_controller/delcate/" . $row['cate_id'] . "' >ลบ<br></a>
            </td>
                          </tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div> </br></br></br></br></br></br></br></br></br></br></br></br>
                    <div>
                        <a class="btn btn-success col-lg-offset-7" href="<?php echo base_url(); ?>index.php/category_controller">เพิ่มประเภทอาหาร</a>
                    </div>
                    <br/>
                    <!-- /.row (nested) -->
                    <!--</div>-->


                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
