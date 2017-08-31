<h1>logged in to Root with</h1>

<?php 


 ?>

<h2 class="welcome">Welcome <?= $this->session->userdata('loggedin_user')["first_name"]  ?>,<br></h2>
<h3> Please select a category bellow to see users who are placed in the selected category </h3>


<form id="head" action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="act" value="Head" style="height:180px; width:33%">
	<input type="hidden" name="action" value="Head">

<!-- <form name="action" method="Post"> -->
</form>
<form id="hand" action="Logged" method="Post">


	<input class="btn-success btn-lg" type="submit" name="act" value="Hand" style="height:180px; width:33%">
	<input type="hidden" name="action" value="Hand">
</form>
<form id="ear" action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="act" value="Ear" style="height:180px; width:33%">
	<input type="hidden" name="action" value="Ear">
</form>	


<!-- <form name="action" method="Post"> -->


<form id="eye" action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="act" value="Eye" style="height:180px; width:33%">
	<input type="hidden" name="action" value="Eye">
<!-- <form name="action" method="Post"> -->
</form>
<form id="body" action="Logged" method="Post">
	
	<input class="btn-success btn-lg" type="submit" name="act" value="Body" style="height:180px; width:33%">
	<input type="hidden" name="action" value="Body">
</form>
<!-- <form name="action" method="Post"> -->

<form id="other" action="Logged" method="Post">

	
	<input class="btn-success btn-lg" type="submit" name="act" value="Other" style="height:180px; width:33%">
	<input type="hidden" name="action" value="Other">
	</form>

 <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><button class="btn-success btn-lg" type="submit" name="mail" style="height:180px; width:99.6%" >go to mail</button></form>

 <!-- hidden form needed for navBar -->
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->