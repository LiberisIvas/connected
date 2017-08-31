<h2 class="welcome">Welcome, <?= $this->session->userdata('loggedin_user')["first_name"]  ?></h2>
<?php 


// var_dump($this->session->userdata('loggedin_user'));
 ?>



<div class="in_out_box"> 
	<h4>inbox</h4>
	<?php 
 	
	foreach ($inbox as $key => $value) {
	  	echo  "From: {$value['sender_name']} <br>" . $value['text_message'] . "<form method='POST' action='/Logged/show_profile'><button class='btn btn-success' name='view_profile' value= {$value['id_user']}>Reply</button></form>" . "<form method='POST' action='/Logged/delete_message'><button class='btn btn-success' name='delete' value={$value['id_message']}>DELETE</button></form>" . "<br>";
	  } ;

	 ?>
</div>



<div class="in_out_box"> <!-- outbox -->
	<h4>outbox</h4>
	<?php 
 	
	foreach ($outbox as $key => $value) {
	  	echo "send to: {$value['recipient_name']} <br>". $value['text_message'] . "<br><br>";
	  }  ;

	 ?>
</div>


<!-- hidden form needed for navBar -->
	<form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->