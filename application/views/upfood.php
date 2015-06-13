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
                
            
                
                echo form_open('index.php/food_controller/updatefood');//update ต้องใช้ echo form_open
           
            ?>
            
            <div class="row">
                    <div class="col-lg-4">
            <tr>
                <td><label>Restaurant Name :</label></td>
                <td>
            <?php
//            echo "<select name='Restaurant' id='Restaurant' disabled='disabled'
//                data-msg-required='กรุณาเลือก'
//                data-rule-required='true'
//            >"; 
           
//            echo "<option value=''  selected></option>";
              if(count($up)){ 
                foreach ($up as $ups){
                    
                   if($ups['food_id']==$id);
//                    echo"<option value='".$ups['res_id']."'>".$ups['res_name']."</option>";
                                          
                 
                                    }
                            }
//               echo "</select>"   
               
                     echo $ups['res_name'];?>
               </td>
            </tr>
            
            
            
            <input type="text" name="id"  value="<?=$ups['food_id'];?>" hidden=""/>
            <P> <b>Food Name</b> <input class="form-control" type="text" name="Food"  value="<?=$ups['food_name'];?>" /> </p>
            <tr>
                <td><label>Category </label></td>
                <td>
            <?php
            echo "<select class='form-control input-sm ' name='Category' id='Category' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'
                
            >"; 
           
            echo "<option value='' selected>".$ups['cate_name']."</option>";
              if(count($cateid)){ 
                foreach ($cateid as $cateids){
                   
                    echo"<option value='".$cateids['cate_id']."'>".$cateids['cate_name']."</option>";
                }
              }
               echo "</select>"   
                ?> 
               </td>
            </tr>
            </div>
            </div></br>
            <div class="col-md-6 col-md-offset-1">
                <P align=""> <b>Detail</b> <textarea class="form-control" name='Detail' rows="10" cols="10"><?=$ups['detail'];?></textarea> </p>
            
                       <?php if($ups['food_id']==$id){
        
                                            echo "<b>Photo Name</b> : ";
                                                foreach ($up as $photo ) {
                                                    if($photo['food_id']==$ups['food_id']){
                                                        echo $photo['photo_name'].","." ";
                                                    }
                                                }     
                                            }
                                            ?></br>
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