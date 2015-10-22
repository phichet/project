<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="food_controller/showfood" method="POST">
                                <div class="form-group">

                                    <table class="table table-hover">
                                        <theder>
                                            <th>ID</th>
                                            <th>ชื่ออาหาร</th>
                                            <th>ร้าน</th>
                                            <th>Res ID</th>

                                            <th>ประเภทอาหาร</th>
                                            <th></th>           
                                        </theder>
                                        <tbody>
                                            <?php
                                            if (count($foodAll)) {
                                                foreach ($foodAll as $food) {
                                                    echo "<tr>
                    <td>" . $food['food_id'] . "</td>
                    <td><a href='" . base_url() . "index.php/food_controller/showdetail/" . $food['food_id'] . "'>" . $food['food_name'] . "</td>
                    <td><a href='" . base_url() . "index.php/formres_controller/resdetail/" . $food['res_id'] . "'>" . $food['res_name'] . "</td>
                    <td>" . $food['res_id'] . "</td> 
                    <td>" . $food['cate_name'] . "</td> 
                    <td>
             <a class='btn btn-info btn-sm' role='button' href='" . base_url() . "index.php/food_controller/showdetail/" . $food['food_id'] . "' >รายละเอียดเพิ่มเติม<br></a>
             <a class='btn btn-warning btn-sm' role='button' href='" . base_url() . "index.php/food_controller/getfood/" . $food['food_id'] . "' >แก้ไข<br></a>
             <a class='btn btn-danger btn-sm' role='button' href='" . base_url() . "index.php/food_controller/delfood/" . $food['food_id'] . "' >ลบ<br></a>
            </td>
                 </tr>";
                                                }
                                            }
                                            ?>
                                            <?php // echo json_encode($food); ?>
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


