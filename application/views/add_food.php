<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>เพิ่มอาหาร</h3></span>
                <form role="form" action="../../food_controller/addfood" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-4">

                            <?php
//            echo form_open_multipart('index.php/food_controller/addfood');

                            if (count($resid)) {
                                foreach ($resid as $resids) {
                                    
                                }
                            }
                            ;
                            ?>
                            <input class="form-control" type="hidden" name="Restaurant" value="<?php echo $resids['res_id']; ?>"/> 
                            <P><label>ร้าน</label> <input class="form-control" type="text" value="<?php echo$resids['res_name']; ?>" readonly /></p>

                            </br>                     
                            <P><label>ชื่ออาหาร</label> <input class="form-control" type="text" name="Food"  value="" /> </p>                                       
                            <label>ประเภทอาหาร</label>

                            <?php
                            echo "<select class='form-control input-sm' name='Category' id='Category' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'>";
                            echo "<option value='' selected>กรุณาเลือก</option>";
                            if (count($cateid)) {
                                foreach ($cateid as $cateids) {

                                    echo"<option value='" . $cateids['cate_id'] . "'>" . $cateids['cate_name'] . "</option>";
                                }
                            }
                            echo "</select>"
                            ?> 
                        </div>
                    </div>


                    <div class="col-sm-7 col-sm-offset"></br>
                        <P><label> รายละเอียด</label> </p><textarea class="form-control" name="Detail" rows="10" cols="50"></textarea></br> 
                    </div>

                    <hr>
                    <div class="">
                        <div class="col-sm-10" id="t">
                            <h4>อัพโหลดรูปใหม่</h4>            
                            <div  id="photo">            
                                <div class="col-xs-10">
                                    </br>
                                    <table>
                                        <tr>
                                            <td> 
                                                <?php
                                                $id = 1;
                                                echo "<img id='uploadPreview" . $id . "' src='" . base_url() . "photo/no_image.jpg' class='img-thumbnail' width='100' height='100'/></br></br>";
                                                echo "<input id='uploadImage" . $id . "' type='file' name='userfile[]' onchange='PreviewImage(" . $id . ");'/>";
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo "<p> คำบรรยายรูป  </p><input align='' id='detail" . $id . "' class='form-control' name='detail_photo[]' value=''  rows='3' cols='5'/>";
                                                ?>
                                            </td>         
                                        </tr>
                                    </table> </br> </div>   
                                </br>
                                </br>
                                <script type="text/javascript">
                                    function PreviewImage(no) {
                                        var oFReader = new FileReader();
                                        oFReader.readAsDataURL(document.getElementById("uploadImage" + no).files[0]);
                                        oFReader.onload = function (oFREvent) {
                                            document.getElementById("uploadPreview" + no).src = oFREvent.target.result;
                                        };
                                    }
                                </script>

                            </div>
                        </div>
                        <!--</div>-->
                        <br/>
                        <br/>
                        <div class="col-xs-8 col-md-offset-3">
                            <div>
                                </br></br>
                            </div>
                        </div></div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-9">
                                <input type="button" class="btn btn-warning" value="เพิ่มรูป..." id="Clone" />
                            </div>
                            <div class="col-xs-3 col-xs-offset-3">
                                <input type="submit" name="Post" class="btn btn-success"/>
                            </div>
                        </div>
                    </div></br>
                    <?php
//           echo form_close();
                    ?>
                </form> 
                <script src="<?php echo base_url(); ?>front_page/js/jquery.min.js"></script>

                <script type="text/javascript" >
                                    $(document).ready(function () {
                                        var max_fields = 4;
                                        var x = 0;
                                        var id = 1;
                                        var base_url = window.location.origin;
                                        $("#Clone").click(function () {
                                            id++;
                                            x++;
                                            if (x < max_fields) { //max input box allowed
                                                ($("#photo").clone()
                                                        .find("input:text").val("").end()
                                                        .find("input:text").attr('id', 'detail' + id).end()
                                                        .find("img").attr('id', 'uploadPreview' + id).end()
                                                        .find("img").attr('src', base_url + "/webci/photo/no_image.jpg").end()
                                                        .find("input:file").attr('id', 'uploadImage' + id).end()
                                                        .find("input:file").attr('onchange', 'PreviewImage(' + id + ")").end()
                                                        .appendTo("#t"));
                                            }
                                        });
                                    });
                </script>
