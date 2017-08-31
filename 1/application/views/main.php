<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// var_dump($this->session->all_userdata());
?>


<div class="text-center" >
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

<div class="container for_all">
<div class="container text-center tekstas">

		<h1 class="welcome_text">WELCOME TO CREATIVE COMMUNITY</h1> <br>
		<h1 class="welcome_text">Hunting and Gathering</h1>
		<h2 class="welcome_text"> where you connect and make your projects real</h2> <br><br><br><br><br><br><br>

     <form method="POST" action="<?= base_url('Login'); ?>">
    	 <button type="submit" name="action" class="btn-primary well-sm" value="register">Create your account</button>
     </form>
</div>


  <!-- <div class="karusele row vertical-center-row"> -->
    <!-- CAROUSSELLE -->
 <div id="myCarousel" class="carousel slide container " data-ride="carousel">
  <!-- Indicators -->
   <!-- Wrapper for slides -->
  <div class="carousel-inner text-center ">
    <div class="item active text-center ">
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
  
</div>
</div>
</div>

 

        