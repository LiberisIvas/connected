<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
var_dump($this->session->all_userdata());
?>
<h2>
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

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Landing Page</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
	</style>
 	<meta charset="utf-8">
 	<style>
	.mySlides {display:none;}
	</style>
	</head>

<body background="http://cdn.wallpapersafari.com/51/86/zSAOXR.jpeg">

</h2>
<div>
<div class="group">
	<h3 class="text">* LogIn *</h3>
	<h3 class="text">Email and password</h3><hr width="70%" ;"><br>
	<form action="Login" method="POST">
		<p><input type="email" name="email" placeholder="Your Email"></p>
		<p><input type="password" name="password" placeholder="Your Password"></p><br>
		<input type="hidden" name="submit" value="Login">
		<input class="btn_log" type="submit" name="action" value="Login"> 

	</form>
<form method="POST" action="Login">
<button type="submit" name="action" value="register">Create your account</button>
 </form>
</div>

	<h1>WELCOME TO CREATIVE COMMUNITY</h1> <br>
<h2> where you connect and make your projects real</h2>


<h2 class="w3-center">Automatic Slideshow</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img_la.jpg" style="width:100%">
  <img class="mySlides" src="img_ny.jpg" style="width:100%">
  <img class="mySlides" src="img_chicago.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
</script>



</body>
</html>

</div>
