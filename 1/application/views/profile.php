
<?php //echo link_tag('application/views/Templates/header'); ?> 
<h1>see profile</h1>

<?php
 echo $this->session->userdata('loggedin_user')["first_name"];
 
  ?>
<hr><hr>

<div>
	<?php 
	echo $profile['first_name'] ." " . $profile['last_name'] . "<br>" . "Category: ". $profile['category']. "<br>" . "I am looking for: " . $profile['looking_for'] . "<br>" . $profile['link'] . "<br>" . "My Success Story: " . $profile['story'] . "<br>" ;

	 ?>
</div>



  <form method="POST" action="/Logged/create_message">
  	<textarea name="message_text" rows='10' cols='90'>
  		
  	</textarea >
  	<input type="hidden" name="recipient" value=<?=$profile['idusers']?> >
    <input type="hidden" name="recipient_name" value=<?=$profile['first_name']?> >
  	<input type="hidden" name="status" value="1">
  	<input type="hidden" name="id" value=<?= $this->session->userdata('loggedin_user')['idusers']?>  >
    <input type="hidden" name="sender_name" value=<?= $this->session->userdata('loggedin_user')['first_name']?>  >
  	<button type="submit" >Send</button>
  </form>