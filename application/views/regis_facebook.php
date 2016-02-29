<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <div class="">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading" style="background-color: #F0F0F0">

                            </div>
                            <div class="panel-body" style="background-color: #F0F0F0">
                                <?php // print_r($userdata); ?>
                                <form role="" action="../usersingin/regis_facebook" method="post">
                                    <fieldset>
                                        <div class="form-group">        
                                            <?php // echo validation_errors('<p class="error">'); ?>

                                            <?php // echo form_open("index.php/usersingin/regis_facebook", 'class="form-inline" metthod="post"'); ?>
                                            <p class="form-group"></p>
                                            <h2>สมัครสมาชิก</h2>
                                            <br>
                                            <?php // echo $userdata['name']; ?>
                                            <p>
                                                <label for="name">ชื่อ สมาชิก</label>
                                                <input type="text"  class="form-control" id="user_name" name="name" placeholder="Name" value="<?php echo $userdata['name']; ?>" readonly/>
                                                <input type="hidden"  class="form-control" id="user_name" name="first_name" value="<?php echo $userdata['first_name']; ?>" />
                                                <input type="hidden"  class="form-control" id="user_name" name="last_name" value="<?php echo $userdata['last_name']; ?>" />
                                            </p>
                                            <p>
                                                <label for="email">อีเมล</label>
                                                <input type="text" class="form-control" id="email_address" name="email" placeholder="Email@email.email" 
                                                       value="<?php
                                                       if (!key_exists('email', $userdata)) {
                                                           echo " ";
                                                       } else {
                                                           echo $userdata['email'];
                                                       }
                                                       ?>
                                                       " readonly/>

                                            </p>
                                            <p>
                                                <input type="hidden"  class="form-control" id="user_name" name="gender" value="<?php echo$userdata['gender']; ?>"/>
                                                <input type="hidden"  class="form-control" id="user_name" name="locale" value="<?php echo$userdata['locale']; ?>"/>
                                            </p>
                                            <p>
                                                <label for="password">รหัสผ่าน</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="" value="<?php echo set_value('password'); ?>"/>
                                            </p>
                                            <p>
                                                <label for="con_password">ยืนยันรหัสผ่าน</label>
                                                <input type="password" class="form-control" id="con_password" name="con_password" placeholder="" value="<?php echo set_value('con_password'); ?>"/>
                                            </p>
                                            <p>
                                                <input type="radio" value="1" class="radio-inline" name="group"/><b> เจ้าของร้าน </b>
                                                <input type="hidden" value="0" class="radio-inline" name="group" checked=""/>
                                            </p>
                                            <p>
                                                <input type="submit" class="btn btn-success" value="OK" />
                                            </p>
<?php // echo form_close();  ?>
                                    </fieldset>
                                </form>                           
                            </div>
                        </div></br></br></br></br>
                    </div>
                </div>


