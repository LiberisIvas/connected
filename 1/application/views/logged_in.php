<h1>logged in site</h1>

<?php 


 ?>

<h2 class="welcome">Welcome, <?= $this->session->userdata('loggedin_user')["first_name"]  ?> </h2>


<form action="Logged" method="Post">
	
	<input type="submit" name="action" value="Heads">
</form>


<form name="action" method="Post">

<form action="Logged" method="Post">

	
	<input type="submit" name="action" value="Hands">
</form>

<form action="Logged" method="Post">
	
	<input type="submit" name="action" value="Ears">
</form>


<form name="action" method="Post">


<form action="Logged" method="Post">
	
	<input type="submit" name="action" value="Eyes">
</form>

<form name="action" method="Post">

<form action="Logged" method="Post">
	
	<input type="submit" name="action" value="Body">
</form>

<form name="action" method="Post">

<form action="Logged" method="Post">

	
	<input type="submit" name="action" value="Others">
</form>

<form method="post" action="/Logged/go_to_messages" ><button type="submit" name="mail" value="<?= $this->session->userdata('loggedin_user')['idusers']?>" >go to mail</button></form>
 