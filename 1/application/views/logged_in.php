<h1 align="center">logged in to Root with</h1>

<?php 


 ?>

<h2 class="welcome" align="center">Welcome <?= $this->session->userdata('loggedin_user')["first_name"]  ?>,<br></h2>
<h3 align="center"> Please select a category bellow to see users who are placed in the selected category </h3>

<form class="head" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit"  name="act" value="Head" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Head"><br><br>

<!-- <form name="action" method="Post"> -->
</form>
<form class="hand" action="Logged" method="Post" align="center">


	<input class="btn-primary btn-lg stretch" type="submit" name="act" value="Hand" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Hand"><br><br>
</form>
<form class="ear" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Ear" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Ear"><br><br>
</form>	


<!-- <form name="action" method="Post"> -->


<form class="eye" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Eye" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Eye"><br><br>
<!-- <form name="action" method="Post"> -->
</form>
<form class="body" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Body" style="height:140px; width:60% ">
	<input type="hidden" name="action" value="Body"><br><br>
</form>
<!-- <form name="action" method="Post"> -->

<form class="other" action="Logged" method="Post" align="center">

	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Other" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Other"><br><br>
	</form>

 <!-- hidden form needed for navBar -->
 <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->