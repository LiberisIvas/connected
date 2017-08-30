<h1>logged in to Root with</h1>

<?php 


 ?>
<br>
<h2 class="welcome">Welcome <?= $this->session->userdata('loggedin_user')["first_name"]  ?>,<br><br></h2>
<h3> Please select a category bellow to see users who are placed in the selected category </h3>


<form action="Logged" method="Post">
	
	<input class="btn-warning btn-lg" type="submit" name="action" value="Heads">


<form name="action" method="Post">

<form action="Logged" method="Post">

	
	<input class="btn-warning btn-lg" type="submit" name="action" value="Hands">


<form action="Logged" method="Post">
	
	<input class="btn-warning btn-lg" type="submit" name="action" value="Ears">
</form>


<form name="action" method="Post">


<form action="Logged" method="Post">
	
	<input class="btn-warning btn-lg" type="submit" name="action" value="Eyes">

<form name="action" method="Post">

<form action="Logged" method="Post">
	
	<input class="btn-warning btn-lg" type="submit" name="action" value="Body">


<form name="action" method="Post">

<form action="Logged" method="Post">

	
	<input class="btn-warning btn-lg" type="submit" name="action" value="Others">
</form>
<br><br><br><br><br><br><br>
<form method="post" action="/Logged/go_to_messages" ><button class="btn-warning btn-lg" type="submit" name="mail" >go to mail</button></form>
 