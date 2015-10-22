<?php /*
if (!$this->session->userdata('logged')==TRUE)
{
  
}else{
     $this->load->view("login_view");
}
*/
?>
<html>
    <head>
        <title></title>
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        
                  <div  class="row">
    <div class="col-sm-12">
             <div class="row">
        <div class="col-xs-8 col-sm-6">
                  <h2>Welcome :
                      <?php 
                      $dataName=$this->session->userdata('name'); 
                      echo $dataName->name;
                       ?>
                       <div>
                  <p></p>
                  <?php echo "<a href='../usersingin/logout'class='btn btn-primary btn-xs' role='button'>Logout</a>"; ?>
                       </div></br>
                  </h2>
                      
                         <div align="center" class="col-xs-4">
                <?php
                //echo "<a href ='../formres_controller/#".$data['email']."' class='btn btn-info btn-sm btn-block' role='button'>Add Restaurant</a>"."<br/>";
                 ?>

                 <?php
                      echo "<a href ='../formres_controller/showAllres/' class='btn btn-success btn-sm btn-block' role='button'>Show Restaurant</a>";
                    ?>
                         </div>
        </div></div></div></div>
        
        
    </body>
</html>