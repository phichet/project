<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>ข้อมูลส่วนตัว</h3></span>
                <form role="form" action="index.php/usersingin/showuser" method="">  
                    <?php
                    print_r($username);
                    if ($this->session->userdata('username') != '') {
                        echo $this->session->userdata('username');
                        $this->session->unset_userdata('username');
                    }
                    ?>
                    <div class="row">
                        <div class="col-xs-12 font-super">
                            <div class="col-xs-3">
                                <?php // echo form_open(""); ?>

                                <?php //print_r($user);
                                ?>
                                <?php // echo form_close(); ?>


                                <?php
//                                $profile_pic = "http://graph.facebook.com/" . $userdata['id'] . "/picture?type=large ";
//                                echo "<img class='img-thumbnail' src=\"" . $profile_pic . "\" /><br/>";
//                                echo "wetrtghryuioiouiiiiiiiiiiiii";
//                                echo $user;
                                ?>
                            </div>
                            <div class = "col-xs-9 col-xs-offset  txt-right extra-margin-top">
                                <?php
                                foreach ($user as $data) {

//                                    print_r($data);
                                    ?>
                                    <!-- <p>ID : <?php // echo $userdata['id']; ?></p> -->
                                    <p>ชื่อ : <?php echo$data['name']; ?></p>
                                    <p>ชื่อจริง : <?php echo$data['first_name']; ?></p>
                                    <p>สกุล : <?php echo$data['last_name']; ?></p>

                                    <p><?php
                                if (!key_exists('email', $data)) {
                                    echo "อีเมล" . " : ", "";
                                } else {
                                    echo "อีเมล" . " : " . $data['email'], "";
                                }
                                    ?></p>
                                    <p>เพศ : <?php echo$data['gender']; ?></p>
                                    <p>ที่อยู่ : <?php echo$data['address']; ?></p>
    <?php
}
?>
                            </div>
                        </div>
                        <div class = "col-xs-12">
                            <hr class = "hr-margin-button">
                        </div>
                    </div></br></br></br></br>




                    <!--                        <div class="col-sm-12">
                                  <center>
                                      <nav>
                                          <ul class="pagination">
                                            <li class="active"><a>1 <span class="sr-only">(current)</span></a></li>                      </ul>
                                      </nav>
                                  </center>
                                  <hr>
                    -->           
                </form>       