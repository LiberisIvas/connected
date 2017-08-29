<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Screw</a> <img src="Assets/images/screw.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"></ul>
        <form action="<?= base_url('Login'); ?>" method="POST">
            <input type="email" name="email" placeholder="Your Email">Email
            <input type="password" name="password" placeholder="Your Password">Password
            <input type="hidden" name="action" value="Login">
            <input class="btn_log" type="submit" name="" value="Login"> 
         </form>
     </div>
      
           
  </nav>
</div>


