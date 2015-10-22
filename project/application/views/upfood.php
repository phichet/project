<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <br>
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>แก้ไขอาหาร</h3></span>
                </br>          
                <?php
                echo form_open('index.php/food_controller/updatefood'); //update ต้องใช้ echo form_open
                ?>     
                <div class="row">
                    <div class="col-md-4">
                        <tr>
                            <td></td>
                            <td>
                                <?php
//            echo "<select name='Restaurant' id='Restaurant' disabled='disabled'
//                data-msg-required='กรุณาเลือก'
//                data-rule-required='true'
//            >";          
//            echo "<option value=''  selected></option>";
                                if (count($up)) {
                                    foreach ($up as $ups) {
                                        if ($ups['food_id'] == $id)
                                            ;
                                    }
                                }
                                ?>
                            </td>
                        </tr>

                        <input class="form-control" type="hidden" name="Restaurant" value="<?php echo $ups['res_id']; ?>"/> 
                        <P><label>ร้าน</label> <input class="form-control" type="text" value="<?php echo$ups['res_name']; ?>" readonly /></p>

                        <input type="hidden" name="id"  value="<?php echo$ups['food_id']; ?>" hidden=""/>
                        <P> <b>ชื่ออาหาร</b> <input class="form-control" type="text" name="Food"  value="<?php echo$ups['food_name']; ?>" /> </p>
                        <tr>
                            <td><label>ประเภทอาหาร</label></td>
                            <td>
                                <?php
                                echo "<select class='form-control input-sm ' name='Category' id='Category' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'>";
                                echo "<option value='' selected>" . $ups['cate_name'] . "</option>";
                                if (count($cateid)) {
                                    foreach ($cateid as $cateids) {

                                        echo"<option value='" . $cateids['cate_id'] . "'>" . $cateids['cate_name'] . "</option>";
                                    }
                                }
                                echo "</select>"
                                ?> 
                            </td>
                        </tr>
                    </div>
                </div></br>
                <div class="col-md-6">
                    <P align=""> <b>รายละเอียด</b> <textarea class="form-control" name='Detail'><?php echo$ups['detail']; ?></textarea> </p>

                    <?php
                    if ($ups['food_id'] == $id) {

                        echo "<b>รูป</b> : ";
                        foreach ($up as $photo) {
                            if ($photo['food_id'] == $ups['food_id']) {
                                echo $photo['photo_name'] . "," . " ";
                            }
                        }
                    }
                    ?></br>
                    <input class="btn btn-success" type="submit" name="submit"/></br>
                </div> 
                <?php
                echo form_close();
                ?>

