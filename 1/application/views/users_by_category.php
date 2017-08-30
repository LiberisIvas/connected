<h2 class="welcome">Welcome,  <?= $this->session->userdata('loggedin_user')["first_name"]  ?></h2>


<div>
	<?php
		// var_dump($all_info);
		foreach ($all_info as $key => $value) {
			echo $value["first_name"] . " " . $value["last_name"] . "<form method='POST' action='/View_control'><button type='submit' name='view_profile' value={$value["idusers"]}>View Profile</button></form>"
			 ."<br>";
		}

	  ?>
</div><hr><hr>

