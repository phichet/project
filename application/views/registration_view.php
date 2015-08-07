

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

                            <?php echo form_open("index.php/usersingin/registration", 'class="form-inline"'); ?>
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


