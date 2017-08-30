<h1>logged in to Screw</h1>

<?php 


 ?>

<h2 class="welcome">Welcome <?= $this->session->userdata('loggedin_user')["first_name"]  ?>,<br></h2>
<h3> Please select a category bellow to see users who are placed in the selected category </h3>


<form id="heads" action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="action" value="Heads" style="height:180px; width:33%">


<!-- <form name="action" method="Post"> -->

<form action="Logged" method="Post">


	<input class="btn-success btn-lg" type="submit" name="action" value="Hands" style="height:180px; width:33%">


<form action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="action" value="Ears" style="height:180px; width:33%">
</form>	


<form name="action" method="Post">


<form action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="action" value="Eyes" style="height:180px; width:33%">

<form name="action" method="Post">

<form action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="action" value="Body" style="height:180px; width:33%">


<form name="action" method="Post">

<form action="Logged" method="Post">

	
	<input class="btn-success btn-lg" type="submit" name="action" value="Others" style="height:180px; width:33%">
	</form>

 <form method="post" action="/Logged/go_to_messages" ><button class="btn-success btn-lg" type="submit" name="mail" style="height:180px; width:99.6%" >go to mail</button></form>