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

                                <form role="" action="../usersingin/registration" method="post">
                                    <fieldset>
                                        <div class="form-group">        
                                            <?php echo validation_errors('<p class="error">'); ?>

                                            <?php // echo form_open("index.php/usersingin/registration", 'class="form-inline"'); ?>
                                            <p class="form-group"></p>
                                            <h2>สมัครสมาชิก</h2>
                                            <br>

                                            <p>
                                                <label for="name">ชื่อ สมาชิก</label>
                                                <input type="text"  class="form-control" id="user_name" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>" />
                                            </p>
                                            <p>
                                                <label for="email">อีเมล</label>
                                                <input type="email" class="form-control" id="email_address" name="email" placeholder="Email@email.com" value="<?php echo set_value('email'); ?>" />
                                            </p>
                                            <p>
                                                <label for="password">รหัสผ่าน</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="*****" value="<?php echo set_value('password'); ?>" />
                                            </p>
                                            <p>
                                                <label for="con_password">ยืนยันรหัสผ่าน</label>
                                                <input type="password" class="form-control" id="con_password" name="con_password" placeholder="*****" value="<?php echo set_value('con_password'); ?>" />
                                            </p>
                                            <p>
                                                <input type="submit" class="btn btn-success" value="OK" /> &nbsp;&nbsp;

                                            </p>
                                            <p>
                                               
                                            </p>
                                            <?php // echo form_close(); ?>
                                            
                                    </fieldset>
                                </form>                           
                            </div>
                        </div></br></br></br></br>
                    </div>
                </div>


