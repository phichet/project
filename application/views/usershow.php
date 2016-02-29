
<input type="text"  class="form-control" id="user_name" name="name" placeholder="Name" value="<?php echo$userdata['name']; ?>" disabled/>
<input type="hidden"  class="form-control" id="user_name" name="first_name" value="<?php echo$userdata['first_name']; ?>" />
<input type="hidden"  class="form-control" id="user_name" name="last_name" value="<?php echo$userdata['last_name']; ?>" />
    <label for="email">อีเมล</label>
    <input type="email" class="form-control" id="email_address" name="email" placeholder="Email@email.com" 
           value="
           <?php
           if (!key_exists('email', $userdata)) {
               echo "";
           } else {
               echo $userdata['email'], "";
           }
           ?>
           " disabled/>
</p>
<p>
    <input type="hidden"  class="form-control" id="user_name" name="gender" value="<?php echo$userdata['gender']; ?>"/>
    <input type="hidden"  class="form-control" id="user_name" name="locale" value="<?php echo$userdata['locale']; ?>"/>
</p>