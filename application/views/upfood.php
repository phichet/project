<html>
    <head>
        <title></title>
        <meta htpp-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
       
        <div>
           
            <?php
                
            if(isset($detail)){
                    echo $detail;
                }
                echo form_open('index.php/food_controller/updatefood');
           
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
            <input type="submit" name="submit"/>
                       </div>
            
            
            <?php
            echo form_close();
            ?>
            
           
        </div>
    </body>
    
</html>


