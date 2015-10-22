<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>รายละเอียดอาหาร</h3></span> 
                    
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form" action="food_controller/showdetail" method="POST">
                                <div class="form-group">

                                    <table class="table">
                                        <theder>

                                        </theder>                                
                                        <tbody> 
                                            <?php
                                            if (count($foodAll)) {
                                                foreach ($foodAll as $food_list) {
                                                    if ($food_list['food_id'] == $id) {
                                                        $food = $food_list;
//                                                        print_r($food);
                                                ?>
                                                <tr>
                                                    <td class="col-sm-5" valign="top"> 
                                                        <?php
//                                                        if ($food['food_id'] == $id) {
                                                            echo "<b>ชื่อร้าน</b>" . " : " . $food['res_name'];
                                                            ?> </br>
                                                            <?php echo "<b>ที่อยู่</b>" . " : " . $food['address']; ?></br>
                                                            <?php echo "<b>เบอร์โทร</b>" . " : " . $food['phone']; ?> </br>
                                                            <?php echo "<b>ราคา</b>" . " : " . $food['price']; ?> </br>
                                                            <?php
                                                            if (key_exists('parking', $food) == 1) {
                                                                echo "<b>ที่จอดรถ</b>" . " : " . "มี", "<br/>";
                                                            } else {
                                                                echo "<b>ที่จอดรถ</b>" . " : " . "ไม่มี", "<br/>";
                                                            };
                                                            ?>
                                                        </td>
                                                    </tr>
                                         <?php
//                                                }
                                                ?>            
                                                <tr>
                                                    <td class="col-sm-3"> 
                                                        <?php echo "<b>ชื่ออาหาร</b>" . " : " . $food['food_name']; ?> </br>
                                                        <?php echo "<b>ประเภทอาหาร</b>" . " : " . $food['cate_name']; ?> </br>
                                                        <?php echo "<p class='wording'><b>รายละเอียด</b>" . " : " . $food['detail']."</p>";?> 
                                                        <?php echo "<a class='glyphicon glyphicon-pencil btn btn-warning' role='button' href='" . base_url() . "index.php/food_controller/getfood/" . $food['food_id'] . "'>แก้ไข<br></a> "; ?>
                                                    <?php } 
                                                     }
                                                }
                                                    ?> 
                                                </td>
                                            </tr> 
                                        </tbody>   
                                    </table>
                                    <div> <?php echo"<b>รูป</b>"; ?></div></br>
                                    <?php
                                    foreach ($foodAll as $photo) {
                                        if ($photo['food_id'] == $food['food_id']) {
                                            ?>      
                                            <div class="col-sm-4 col-md-3">
                                                <div class="thumbnail">
                                                    <img alt="" class="img-thumbnail" style="width:250px;height:150px;" src="<?php echo base_url(); ?>photo/<?php echo$photo['photo_name']; ?>"></br>
                                                    <div class="caption">
                                                        <hr>
                                                        <article> <p><?php echo" " . $photo['detail']; ?></p></article>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>            
                                </div>
                                <div>
                                    <?php
//echo "<a href='".base_url()."index.php/formres_controller/addres' class='btn btn-success btn-sm' role='button'>Add Restaurant</a> ";
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


