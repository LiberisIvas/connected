<?php echo link_tag('Assets/css/style.css'); ?> 

      <nav class=" navbar-light bg-light  bg-faded">
      
      <a class="navbar-brand" href="/">ROOT WITH</a> <!-- <img class="image_screw"  alt="screw" src="Assets/images/screw.png">     -->
      

   <div class="login_navigation col-sm-6 push-4">
    <form action="<?= base_url('Login'); ?>" method="POST" class="form-inline2">
              <input type="email" name="email" placeholder="Your Email">Email
              <input type="password" name="password" placeholder="Your Password">Password
              <input type="hidden" name="action" value="Login">
              <input class="btn_log" type="submit" name="" value="Login"> 
    </form>
  </div>
      </nav>
<br><br><br><br>