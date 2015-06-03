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
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">        
                                <?php echo validation_errors('<p class="error">'); ?>
        
                            <?php echo form_open("index.php/usersingin/registration",'class="form-inline"'); ?>
                                <p class="form-group">
                                   <h2>สมัครสมาชิก</h2>

                             <p>
                             <label for="name">User Name:</label>
                             <input type="text"  class="form-control" id="user_name" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>" />
                             </p>
                             <p>
                             <label for="email">Your Email:</label>
                             <input type="email" class="form-control" id="email_address" name="email" placeholder="Email@email.com" value="<?php echo set_value('email'); ?>" />
                             </p>
                             <p>
                             <label for="password">Password:</label>
                             <input type="password" class="form-control" id="password" name="password" placeholder="*****" value="<?php echo set_value('password'); ?>" />
                             </p>
                             <p>
                             <label for="con_password">Confirm Password:</label>
                             <input type="password" class="form-control" id="con_password" name="con_password" placeholder="*****" value="<?php echo set_value('con_password'); ?>" />
                             </p>
                             <p>
                             <input type="submit" class="btn btn-success" value="OK" />
                             </p>
                            <?php echo form_close(); ?>

                                
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
