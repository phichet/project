<!DOCTYPE html>

<!--<script src="<?php // echo base_url();?>dist/jquery.min.js"></script>-->
<meta charset=utf-8 />
<title>Soyo Solution</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style type="text/css">
	img {width:100px;}
</style>

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
                            Food Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="food_controller/addfood" method="POST" enctype="multipart/form-data" >
                                        <div class="form-group">
        
     
                <div class="row">
                    <div class="col-lg-4">
 
        <tr>
                <td><label>Restaurant Name </label></td>
                <td>
            <?php
            echo "<select class='form-control input-sm' name='Restaurant' id='Restaurant' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'
                
            >"; 
           
            echo "<option value='' selected>Select</option>";
              if(count($resid)){ 
                foreach ($resid as $resids){
                   
                    echo"<option value='".$resids['res_id']."'>".$resids['res_name']."</option>";
                }
              }
               echo "</select>"   
                ?> 
               </td>
            </tr>    
            </br>
                 
                
                
                        
            <P> Food_Name <input class="form-control" type="text" name="Food"  value="" /> </p> 
                    
                
                                           
                <tr>
                <td><label>Category </label></td>
                <td>
            <?php
            echo "<select class='form-control input-sm ' name='Category' id='Category' 
                data-msg-required='กรุณาเลือก'
                data-rule-required='true'
                
            >"; 
           
            echo "<option value='' selected>Select</option>";
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
                </div>
                                            
                <div class="row">
            <div class="col-lg-12">
            <P align=""> Detail </p><textarea class="form-control" name="Detail" rows="10" cols="50"></textarea></br> 
            <hr>
            <div class="row">
            <div class="col-sm-10" id="t">
            <h4>อัพโหลดรูปใหม่</h4>
            
            <div class="row " id="photo">
            
            <div  class="col-xs-10">
            </br>
            <table >
    <tr>
	<td> </br></br>
            <?php
            $id=1;
           
             
              
                   echo "<img id='uploadPreview".$id."' src='".base_url()."photo/no_image.jpg' class='img-thumbnail'/>";
            echo "<input id='uploadImage".$id."' type='file' name='userfile[]' onchange='PreviewImage(".$id.");'/>";	
            
 
             
            ?>
        </td>

        <td>
        
           <p> คำบรรยายรูป  </p><input align=""  class="form-control" name="detail_photo[]" value=""  rows="3" cols="5"/>
        </td>
          
            </tr>
            </table> </br> </div>   
        </br>
        </br>
        <script type="text/javascript">
            function PreviewImage(no) {
                var oFReader = new FileReader();
               oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);
                oFReader.onload = function(oFREvent) {
                   document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
                };
            }
        </script>
            </div>
        
            </div>
                </div>
                    </div>
                        
        

        
        <br/>
        <br/>
            <?php
            
            ?>
        <div class="col-xs-12 col-md-offset-3">
            <div>
            <input type="button" class="btn btn-warning" value="เพิ่มรูป..." id="Clone" /></br></br>
            </div>
       </div>
            
        &nbsp;&nbsp;<input type="submit" name="Post" class="btn btn-success"/> 
                  
        
            </td>
            </tr> 
            </br></br> 
               <div>
                    <?php //$this->load->view('upload_view');?>   
               </div>
                                    </div>
                                </div>
                            </div>
                        

                      </form>
                       
                        

                                <!-- /.col-lg-6 (nested) -->
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


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>--> 
  <script>
                            $(document).ready(function(){
                                var max_fields      = 5;
                                var x = 0;
                                $id =1;
                            $("#Clone").click(function(){
                                $id++;
                                 x++;
                                 if(x < max_fields){ //max input box allowed

                                ($("#photo").clone()
                                  .find("input:text").val("").end()
                                  .find("img").attr('id','uploadPreview'+$id).end()
                                  .find("img").attr('src',"../photo/no_image.jpg").end()
                                  .find("input:file").attr('id','uploadImage'+$id).end()
                                  .find("input:file").attr('onchange','PreviewImage('+$id+")").end()
//                                  .find('#uploadImage'+$id)
                                  .appendTo("#t")); 
                                }
                            });
                            });
                        </script>
<!--<script>
                            $(document).ready(function(){
                                var max_fields      = 5;
                                var x = 1;
                            $("#Clone").click(function(){
                                 x++;
                                 if(x < max_fields){ //max input box allowed
                                $("#photo").clone().appendTo("#t"); 
                                
                            }
                            });
                            });
                        </script>-->