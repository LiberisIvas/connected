<h1>logged in to Root with</h1>

<?php 


 ?>

<h2 class="welcome">Welcome <?= $this->session->userdata('loggedin_user')["first_name"]  ?>,<br></h2>
<h3> Please select a category bellow to see users who are placed in the selected category </h3>

<form id="head" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit"  name="act" value="Head" style="height:110px; width:75%">
	<input type="hidden" name="action" value="Head"><br><br>

<!-- <form name="action" method="Post"> -->
</form>
<form class="hand" action="Logged" method="Post" align="center">


	<input class="btn-primary btn-lg stretch" type="submit" name="act" value="Hand" style="height:110px; width:75%">
	<input type="hidden" name="action" value="Hand"><br><br>
</form>
<form id="ear" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Ear" style="height:110px; width:75%">
	<input type="hidden" name="action" value="Ear"><br><br>
</form>	


<!-- <form name="action" method="Post"> -->


<form id="eye" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Eye" style="height:110px; width:75%">
	<input type="hidden" name="action" value="Eye"><br><br>
<!-- <form name="action" method="Post"> -->
</form>
<form id="body" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Body" style="height:110px; width:75% ">
	<input type="hidden" name="action" value="Body"><br><br>
</form>
<!-- <form name="action" method="Post"> -->

<form id="other" action="Logged" method="Post" align="center">

	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Other" style="height:110px; width:75%">
	<input type="hidden" name="action" value="Other"><br><br>
	</form>

 <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><button class="btn btn-success btn-lg" type="submit" name="mail" style="height:110px; width:99.6%" >go to mail</button></form>

 <!-- hidden form needed for navBar -->
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->