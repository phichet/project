<div class="row">
    <div class="col-md-3 col-md-offset-5">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <!--<h3 class="panel-title">เข้าสู่ระบบ</h3>-->
            </div>
            <div class="panel-body">
                <form role="form">
                    <fieldset>
                        <div class="form-group">        
                            <?php echo "<a href='$login_url' class='btn btn-block btn-social btn-facebook'>
                                        <i class='fa fa-facebook'></i>Login with Facebook</a>"; ?>
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
                        <input type="submit" class="btn btn-success  btn-sm" value="เข้าสู่ระบบ" /> &nbsp;
                        <?php echo "<a href='" . base_url() . "index.php/usersingin/registration' class='btn btn-default btn-sm' role='button'>ลงทะเบียน</a>"; ?>
                        <?php echo form_close(); ?> <br></br>


                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

