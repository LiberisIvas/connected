
<?php //echo link_tag('application/views/Templates/header'); ?> 

<div id=top class="container text-center"><h2>We are all here together,</h2>

<span class="profile_user"><?php

 echo $this->session->userdata('loggedin_user')["first_name"];
 
  ?>
  <script src="sweetalert.min.js"></script>
    <script type="text/javascript"></script>
</span>
<hr><hr></div>

<div class="container text-left well">
	<?php 
	echo "<span class='user_span'>" . $profile['first_name'] ." " . $profile['last_name'] . "</span><br>" . "Category: ". "{$profile['category']}". "<br>" . "I am looking for: " . $profile['looking_for'] . "<br>" ."<br>" . $profile['link'] . "<br>" ."<br>" . "My Success Story: " . $profile['story'] . "<br>" ;

	 ?>
</div>


<div class="container text-left well">
  Your message to :<span class='user_span'><?php 
  echo $profile['first_name'];?></span>
  <form method="POST" action="/Logged/create_message">
  	<textarea name="message_text" rows='6' cols='80'></textarea>
  	<input type="hidden" name="recipient" value=<?=$profile['idusers']?> >
    <input type="hidden" name="recipient_name" value=<?=$profile['first_name']?> >
  	<input type="hidden" name="status" value="1">
  	<input type="hidden" name="id" value=<?= $this->session->userdata('loggedin_user')['idusers']?>  >
    <input type="hidden" name="sender_name" value=<?= $this->session->userdata('loggedin_user')['first_name']?> ><br><br>
    
  	<button type="submit" class="btn btn-success" >Send</button>
  <!--onclick="myFunction()">
  <script>
    function myFunction() {
    alert("Message has been deliverd!");
  }
  </script> -->

  </form>
    <!-- hidden form needed for navBar -->
    <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->
  </div>