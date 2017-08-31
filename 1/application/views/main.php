<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// var_dump($this->session->all_userdata());
?>

<div class="container text-center">

<div class="container text-center" >

<hr>
	<?php
		// var_dump($this->session->all_userdata());
		if($this->input->post('action', true) === 'register')
		    {
		    echo validation_errors();
		    }
		if($this->session->userdata("sucessmsg"))
		    {
		        echo ($this->session->userdata("sucessmsg"));
		        $this->session->unset_userdata('sucessmsg');
		    }
	?>
</hr>
</div>


<div class="container text-center tekstas">

	<h1 class="welcome_text">WELCOME TO CREATIVE COMMUNITY</h1> <br>
	<h1 class="welcome_text">Hunting and Gathering</h1>
<h2 class="welcome_text"> where you connect and make your projects real</h2> <br><br><br><br><br><br><br>
</form>
      <form method="POST" action="<?= base_url('Login'); ?>">
      <button type="submit" name="action" value="register">Create your account</button>
       </form>
  </div>


  		<div class="karusele row vertical-center-row">
    <!-- CAROUSSELLE -->
 <div id="myCarousel" class="carousel slide absolute_carr" data-ride="carousel">
  <!-- Indicators -->
   <!-- Wrapper for slides -->
  <div class="carousel-inner ">
    <div class="item active ">
      <img src="Assets/images/sel/b1.jpg" alt="picture">
    </div>

    <div class="item">
      <img src="Assets/images/sel/b2.jpg" alt="picture">
    </div>

    <div class="item">
      <img src="Assets/images/sel/b3.jpg" alt="picture">
    </div>

    <div class="item">
    <img src="Assets/images/sel/b4.jpg" alt="picture">
    </div>

    <div class="item">
      <img src="Assets/images/sel/b5.jpg" alt="picture">
    </div>

    <div class="item">
      <img src="Assets/images/sel/b6.jpg" alt="picture">
    </div>

    <div class="item">
    <img src="Assets/images/sel/b7.jpg" alt="picture">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>


 

        