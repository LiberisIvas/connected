<h2 class="welcome">Welcome, <?= $this->session->userdata('loggedin_user')["first_name"]  ?></h2>
<?php 


// var_dump($this->session->userdata('loggedin_user'));
 ?>



<div> <!-- inbox -->
	<h4>inbox</h4>
	<?php 
 	
	foreach ($inbox as $key => $value) {
	  	echo  $value['text_message'] . "<form method='POST' action='/Logged/show_profile'><button name='view_profile' value= {$value['id_user']}>Reply</button></form>" . "<form method='POST' action='/Logged/delete_message'><button name='delete' value={$value['id_message']}>DELETE</button></form>" . "<br>";
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