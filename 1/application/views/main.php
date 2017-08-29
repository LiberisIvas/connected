<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
var_dump($_POST) ; echo "<hr>";
var_dump($this->session->all_userdata());
?>

<!DOCTYPE html>
<html class="container">
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
</head>
<body >
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
</h2>
<div >
<div class="group">
	<h3 class="text">* LogIn *</h3>
	<h3 class="text">Please enter Email and password</h3><hr width="70%" ;"><br>
	<form action="Login" method="POST">
		<p><input type="email" name="email" placeholder="Your Email"></p>
		<p><input type="password" name="password" placeholder="Your Password"></p><br>
		<input type="hidden" name="submit" value="Login">
		<input class="btn_log" type="submit" name="action" value="Login"> 

	</form>

</div>


<div class="group">
	<h3 class="text">* Register *</h3>
	<h3 class="text"> Please enter your information </h3><hr width="70%"><br>
	<form action="Login" method="POST">
		<p><input type="text" name="first_name" placeholder="First name"></p>
		<p><input type="text" name="last_name" placeholder="Last name"></p>
		<p><input type="email" name="email" placeholder="Email" placeholder="Your Email"></p>
		<p><input type="password" name="password" placeholder="Password"></p>
		<p><input type="password" name="confirm_password" placeholder="Confirm password"></p>
		<br>
		<p><select  name="category" ></p>
		<p><input type="text" name="look_for" placeholder="Looking for"></p>
		<p><input type="text" name="link" placeholder="Past your profile link"></p>
		<p><input type="text" name="story" placeholder="write your story"></p>
		<!-- <p><input type="upload" name="image" ></p>  incase we did it -->

		<input type="hidden" name="submit" value="register">
		<input class="btn_register" type="submit" name="action" value="register">

		
	</form>

</div>

</div>
</body>
</html>	