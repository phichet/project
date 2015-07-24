            <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
          <br>
            <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
            <span class="glyphicon-class"><h3>ร้านอาหาร</h3></span>
             <?php
    if(count($resAll)){
                foreach ($resAll as $row){                   
            ?>
            <div class="col-sm-4">
                <img width="100%" height="200" src="<?php echo base_url();?>front_page/images/restaurants/no-img.png">
                ชื่อร้าน : <?php echo "<a href='".base_url()."index.php/formres_controller/resdetail/$row->res_id'>$row->res_name";?></a>
                <p class="font-gary">ที่อยู่ : <?php echo $row->address ?></p>
                <p class="font-gary">โทร : <?php echo $row->phone ?></p>
            </div>
            <?php
               }
                    }?>
                       
<!--                        <div class="col-sm-12">
              <center>
                  <nav>
                      <ul class="pagination">
                        <li class="active"><a>1 <span class="sr-only">(current)</span></a></li>                      </ul>
                  </nav>
              </center>
              <hr>
            </div>-->
