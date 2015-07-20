<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head> 
      <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Social Buttons CSS -->
    <link href="<?php echo base_url();?>bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
       <title>Login </title>
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Log In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">        
                                    <?php 
                                echo "<a href='$login_url' class='btn btn-block btn-social btn-facebook'>
                                        <i class='fa fa-facebook'></i>Login with Facebook
                                         </a>";?>
                                <h5 align="center" class="text-danger" ><b>(แนะนำ)</b></h5>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <?php echo form_open("index.php/usersingin/login"); ?>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password"/>
                                </div>
                                <input type="submit" class="btn btn-success  btn-sm" value="Log in" /> &nbsp;
                                    <?php echo "<a href='".base_url()."index.php/usersingin/registration' class='btn btn-default btn-sm' role='button'>Sing Up</a>"; ?>
                                    <?php echo form_close(); ?> <br></br>
                                
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- jQuery -->
    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>dist/js/sb-admin-2.js"></script>
  </body>
</html>
