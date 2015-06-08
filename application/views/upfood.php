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
                            Category Table
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
        <div>
           
            <?php
                
            if(isset($detail)){
                    echo $detail;
                }
                echo form_open('index.php/food_controller/updatefood');//update ต้องใช้ echo form_open
           
            ?>
            <input type="text" name="id"  value="<?=$up['food_id'];?>" hidden=""/>
            
            <tr>
                <td><label>Restaurant Name :</label></td>
                <td>
            <?php
            echo "<select name='Restaurant' id='Restaurant' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'
            >"; 
           
            echo "<option value=''  selected>Select</option>";
              if(count($resid)){ 
                foreach ($resid as $resids){
                   
                    echo"<option value='".$resids['res_id']."'>".$resids['res_name']."</option>";
                }
              }
               echo "</select>"   
                ?> 
               </td>
            </tr>
            
            <P> Food Name <input type="text" name="Food"  value="<?=$up['food_name'];?>" /> </p>
            
            
                       <div class="col-md-6 col-md-offset-3">
            <P align=""> Detail <textarea class="form-control" name='Detail' rows="10" cols="10"><?=$up['detail'];?></textarea> </p>
            <input class="btn btn-success" type="submit" name="submit"/>
                       </div>
            
            
            <?php
            echo form_close();
            ?>
            
           
        </div>
                                    </div>  
        
                                        
        
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