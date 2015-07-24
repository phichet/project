<form role="form" action="" method="POST">
            <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
          <br>
            <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
            <span class="glyphicon-class"><h3>ข้อมูลส่วนตัว</h3></span>
<?php
//print_r($userdata);
//echo json_encode($userdata);
        $profile_pic =  "http://graph.facebook.com/".$userdata['id']."/picture?type=large ";
      
        echo "<img class='img-thumbnail' src=\"" . $profile_pic . "\" /><br/>";
    
        echo "ID" ." : ".$userdata['id'],"<br/>";
        echo "Name" ." : " .$userdata['name'],"<br/>";
        echo "Firstname". " : " .$userdata['first_name'],"<br/>";
        echo "Lastname" ." : " .$userdata['last_name'],"<br/>";
        
        
            if(!key_exists('email',$userdata)){
                echo "Email" ." : ","<br/>";
            }
            else {
                echo "Email" ." : " .$userdata['email'],"<br/>";
            }
        echo "Gender" ." : " .$userdata['gender'],"<br/>";
        echo "Location" ." : " .$userdata['locale'],"<br/><br/>";
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
</form>       