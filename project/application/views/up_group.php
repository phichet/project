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
                            Group Update
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    

    <?php echo form_open('index.php/group_controller/upgroup'); //update ต้องใช้ echo form_open
    ?> 
                                    
    <input type="text" name="id"  value="<?=$group['group_id'];?>" hidden=""/>
    <P> Group Name <input class="form-control" type="text" name="Group"  value="<?=$group['group_name'];?>" /> </p>
    <input class="btn btn-success"type="submit" name="submit"/>
                                           
                           <?php echo form_close();?>  

                                    
                                </div>
                                
                                <!--/.row (nested) -->
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