<div id=top class="container text-center">
<h2 class="welcome">Welcome,  <?= $this->session->userdata('loggedin_user')["first_name"]  ?></h2>
</div>

<div class="well">
	<?php
		// var_dump($all_info);
		foreach ($all_info as $key => $value) {
			echo $value["first_name"] . " " . $value["last_name"] . "<form method='POST' action='/Logged/show_profile'><button class='btn btn-success' type='submit' name='view_profile' value={$value["idusers"]}>View Profile</button></form>"
			 ."<br>";
		}
		//Logged/show_profile/ into View_control to load navigation

	  ?>
	  <!-- hidden form needed for navBar -->
	  <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
	  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

	  
	  <!-- End of hidden form needed for navBar -->
</div><hr><hr>

