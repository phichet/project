<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        </br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
                <br>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>ร้านอาหาร</h3></span>
                <?php
                if (count($resAll)) {
                    foreach ($resAll as $row) {
                        ?>
                        <div class="col-xs-6 col-sm-4">
                            <img width="100%" height="200" class="img-rounded img-responsive" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg"></br >
                            <article><p> <?php echo "<a href='" . base_url() . "index.php/formres_controller/resdetail/".$row['res_id']."'>".$row['res_name'] ?></a></p></article>
                            <article><p class="font-gary">ที่อยู่ : <?php echo $row['address'] ?></p></article>
                            <article><p class="font-gary">โทร : <?php echo $row['phone'] ?></p></article>
                        </div>
                        <?php
                    }
                }
                ?>

                <!--                        <div class="col-sm-12">
                              <center>
                                  <nav>
                                      <ul class="pagination">
                                        <li class="active"><a>1 <span class="sr-only">(current)</span></a></li>                      </ul>
                                  </nav>
                              </center>
                              <hr>
                            </div>-->
                