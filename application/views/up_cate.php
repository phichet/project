<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        </br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>แก้ไขประเภทอาหาร</h3></span>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">


                            <?php echo form_open('index.php/category_controller/upcate'); //update ต้องใช้ echo form_open
                            ?> 

                            <input type="text" name="id"  value="<?= $cate['cate_id']; ?>" hidden=""/>
                            <P> ประเภทอาหาร <input class="form-control" type="text" name="catename"  value="<?= $cate['cate_name']; ?>" /> </p>
                            <input class="btn btn-success"type="submit" name="submit"/>

                            <?php echo form_close(); ?>  


                        </div>

                        <!--/.row (nested) -->
                    </div></br></br></br></br></br></br></br></br></br></br></br></br></br>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            