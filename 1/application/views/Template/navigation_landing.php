<?php echo link_tag('Assets/css/style.css'); ?> 

<div class="navigation_bar_login"></div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Screws</a> <img class="image_screw" alt="screw" src="Assets/images/screw.png">    
    </div>
    <form action="<?= base_url('Login'); ?>" method="POST" class="form-inline">
              <input type="email" name="email" placeholder="Your Email">Email
              <input type="password" name="password" placeholder="Your Password">Password
              <input type="hidden" name="action" value="Login">
              <input class="btn_log" type="submit" name="" value="Login"> 
           </form>
  </nav>
</div>
