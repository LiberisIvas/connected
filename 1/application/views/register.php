<h1>Register Form</h1>

<<!-- div class="group">
	<h3 class="text">* Register *</h3>
	<h3 class="text"> Please enter your information </h3><hr width="70%"><br>
	<form action="Login/check_register" method="POST">
		<p><input type="text" name="first_name" placeholder="First name"></p>
		<p><input type="text" name="last_name" placeholder="Last name"></p>
		<p><input type="email" name="email" placeholder="Email" placeholder="Your Email"></p>
		<p><input type="password" name="password" placeholder="Password"></p>
		<p><input type="password" name="confirm_password" placeholder="Confirm password"></p>
		<br>
		<p><select  name="category" ></p>
		<option value="heads">Heads</option>
		<option value="hands">Hands</option>
		<option value="eyes">Eyes</option>
		<option value="ears">Ears</option>
		<option value="body">Body</option>
		<option value="others">Others</option>
		<p><input type="text" name="look_for" placeholder="Looking for"></p>
		<p><input type="text" name="link" placeholder="Past your profile link"></p>
		<p><input type="text" name="story" placeholder="write your story"></p>
		<!-- <p><input type="upload" name="image" ></p>  incase we did it -->

		<input type="hidden" name="submit" value="register">
		<input class="btn_register" type="submit" name="action" value="register">

		
	</form>
	

</div> -->

<!-- BOOTSTRAP -->

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="Login/check_register" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label for="first_name">First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label for="last_name">Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control">
							</div>
								<div class="form-group">
									<label>Email Address</label>
									<input type="text" placeholder="Enter Email Address Here.." class="form-control">
								</div>
							<div class="col-sm-6 form-group">
								<label for="password">Password</label>
								<input type="password" placeholder="Enter password Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label for="confirm_password">Password</label>
								<input type="password" placeholder="Enter password Here.." class="form-control">
							</div>
						</div>		
						<div class="col-sm-6 form-group">			
						<select name="category" class="form-control">
							<option value="heads">Heads</option>
							<option value="hands">Hands</option>
							<option value="eyes">Eyes</option>
							<option value="ears">Ears</option>
							<option value="body">Body</option>
							<option value="others">Others</option>
							</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label for="look_for">Looking for</label>
								<input type="text" placeholder="Enter what you are looking for.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label for="link">link</label>
								<input type="text" placeholder="Place your portfolio link" class="form-control">
							</div>	
						</div>						
							
						
					<div class="form-group">
						<label for="story">Story</label>
						<input type="text" placeholder="Enter your story here.." class="form-control">
					</div>
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>