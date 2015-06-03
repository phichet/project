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
                echo form_open('index.php/formres_controller/update');
           
            ?>
            <input type="text" name="id"  value="<?=$up['res_id'];?>" hidden=""/>
            <P> Restaurants_Name <input type="text" name="Restaurant"  value="<?=$up['res_name'];?>" /> </p>
            <P> Lat <input type="text" name="lat"  id="latbox" value="<?=$up['lat'];?>" /> </p>
            <P> Lng <input type="text" name="lng"  id="lngbox" value="<?=$up['lat'];?>" /> </p>
            <P> Address <input type="text" name="address"  value="<?=$up['address'];?>" /> </p>
            <P> Phone <input type="text" name="phone"  value="<?=$up['phone'];?>" /> </p>
            <P> Price <input type="text" name="price"  value="<?=$up['price'];?>" /> </p>
            <P> Parking <select name="parking">
                <option value="1" <?php if($up['parking']==1) echo "selected='selected'";?> >Yes</option>
                <option value="0" <?php if($up['parking']==0) echo "selected='selected'";?>>No</option>
                       </select> </p>
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


