<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// var_dump($this->session->all_userdata());
?>
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


<div class="container text-center" >
	<h1>WELCOME TO CREATIVE COMMUNITY</h1> <br>
<h2> where you connect and make your projects real</h2>
</form>
      <form method="POST" action="<?= base_url('Login'); ?>">
      <button type="submit" name="action" value="register">Create your account</button>
       </form>
</div>

 

        