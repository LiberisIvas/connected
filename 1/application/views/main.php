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
</h2>
<div>
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

	<h1>WELCOME TO CREATIVE COMMUNITY</h1> <br>
<h2>Manifest your creativity with others where you connect and make your projects real</h2>

<button type="submit">Create your account</button>
 



</div>
