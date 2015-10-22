<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <div class="">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading" style="background-color: #F0F0F0">
                                <!--<h3 class="panel-title">เข้าสู่ระบบ</h3>-->
                            </div>
                            <div class="panel-body" style="background-color: #F0F0F0">
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
                        </div></br></br></br></br>
                    </div>
                </div>

