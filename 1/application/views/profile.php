
<?php //echo link_tag('application/views/Templates/header'); ?> 


<div  class="container text-center"><h2>Welcome to the profile of</h2>

</div>


<span class="profile_user"><?php

 echo $this->session->userdata('loggedin_user')["first_name"];
 
  ?>
</span>
<hr><hr></div>

<div class="container text-left well">
	<?php 
	echo $profile['first_name'] ." " . $profile['last_name'] . "<br>" . "Category: ". "{$profile['category']}". "<br>" . "I am looking for: " . $profile['looking_for'] . "<br>" . $profile['link'] . "<br>" . "My Success Story: " . $profile['story'] . "<br>" ;

	 ?>
</div>


<div class="container text-left well">
  Your message:
  <form method="POST" action="/Logged/create_message">
  	<textarea name="message_text" rows='12' cols='80'></textarea>
  	<input type="hidden" name="recipient" value=<?=$profile['idusers']?> >
    <input type="hidden" name="recipient_name" value=<?=$profile['first_name']?> >
  	<input type="hidden" name="status" value="1">
  	<input type="hidden" name="id" value=<?= $this->session->userdata('loggedin_user')['idusers']?>  >
    <input type="hidden" name="sender_name" value=<?= $this->session->userdata('loggedin_user')['first_name']?> ><br><br>

  	<button type="submit" class="btn btn-success" onclick="alert1();">Send</button>

    <script src="sweetalert.min.js"></script>
    <script type="text/javascript">
      function alert1()
      {
        swal("good job!", "message send", "success");
      }
    </script>
  </form>
    <!-- hidden form needed for navBar -->
    <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

    
    <!-- End of hidden form needed for navBar -->
  </div>