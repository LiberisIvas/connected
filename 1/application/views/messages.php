<h2 class="welcome">Welcome, <?= $this->session->userdata('loggedin_user')["first_name"]  ?></h2>
<?php 


// var_dump($this->session->userdata('loggedin_user'));
 ?>



<div> <!-- inbox -->
	<h4>inbox</h4>
	<?php 
 	
	foreach ($inbox as $key => $value) {
	  	echo $value['text_message'] . "<br>";
	  }  ;

	 ?>
</div>

<div> <!-- outbox -->
	<h4>outbox</h4>
	<?php 
 	
	foreach ($outbox as $key => $value) {
	  	echo $value['text_message'] . "<br>";
	  }  ;

	 ?>
</div>