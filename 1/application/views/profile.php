
<?php //echo link_tag('application/views/Templates/header'); ?> 
<div id=top class="container text-center"><h1>see profile</h1>

<?php
 echo $this->session->userdata('loggedin_user')["first_name"];
 
  ?>
<hr><hr></div>

<div class="container text-left well">
	<?php 
	echo $profile['first_name'] ." " . $profile['last_name'] . "<br>" . "Category: ". $profile['category']. "<br>" . "I am looking for: " . $profile['looking_for'] . "<br>" . 
"<iframe width='420' height='315'  src={$profile['link']} ></iframe>" . "<br>" . "My Success Story: " . $profile['story'] . "<br>" ;

	 ?>
</div>


<div class="container text-right well">
  <form method="POST" action="/Logged/create_message">
  	<textarea name="message_text" rows='12' cols='90'>
  		
  	</textarea >
  	<input type="hidden" name="recipient" value=<?=$profile['idusers']?> >
    <input type="hidden" name="recipient_name" value=<?=$profile['first_name']?> >
  	<input type="hidden" name="status" value="1">
  	<input type="hidden" name="id" value=<?= $this->session->userdata('loggedin_user')['idusers']?>  >
    <input type="hidden" name="sender_name" value=<?= $this->session->userdata('loggedin_user')['first_name']?>  >
  	<button type="submit" >Send</button>
  </form>
    <!-- hidden form needed for navBar -->
    <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->
  </div>