<!-- BOOTSTRAP -->

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="Login/check_register" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="first_name" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label >Last Name</label>
								<input type="text" name="last_name" placeholder="Enter Last Name Here.." class="form-control">
							</div>
								<div class="form-group">
									<label>Email Address</label>
									<input type="text" name="email" placeholder="Enter Email Address Here.." class="form-control">
								</div>
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Enter password Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="confirm_password" placeholder="Enter password Here.." class="form-control">
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
								<label>Looking for</label>
								<input type="text" name="look_for" placeholder="Enter what you are looking for.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>link</label>
								<input type="text" name="link" placeholder="Place your portfolio link" class="form-control">
							</div>	
						</div>						
							
						
					<div class="form-group">
						<label>Story</label>
						<input type="textarea" name="story" placeholder="Enter your story here.." class="form-control">
					</div>
					<input class="btn_register" type="submit" name="action" value="register">				
					</div>
				</form> 
				</div>
	</div>
	</div> -->