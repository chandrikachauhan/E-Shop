<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="<?php echo base_url('home/index')?>" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Registration
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="<?php echo base_url('home/index')?>">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Registration</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <p>Welcome, please enter the following details to continue.</p>
					 <p>If you have previously registered with us, <a href="#">click here</a></p>
					 <form action="<?php echo base_url('User_Register/insert_data')?>" method="post">
						 <ul>
							 <li class="text-info">First Name: </li>
							 <li>
							 	<input type="text" name="fname" placeholder="Enter Your First Name" >
							 	<?php echo form_error('fname');?>
							 </li>
						 </ul>
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li>
							 	<input type="text" name="lname" placeholder="Enter Your Last Name" >
							 	<?php echo form_error('lname');?>
							 </li>
						 </ul>				 
						<ul>
							 <li class="text-info">Email: </li>
							 <li>
							 	<input type="Email" name="email" placeholder="Enter Your Email" class="form-control" >
							 	<?php echo form_error('email');?>
							 </li>
						 </ul>
						 <ul>
							 <li class="text-info">Password: </li>
							 <li>
							 	<input type="password" name="pass1" placeholder="Enter Your Password" >
							 	<?php echo form_error('pass1');?>
							 </li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li>
							 	<input type="text" name="mobile" placeholder="Enter Your Mobile Number" >
							 	<?php echo form_error('mobile');?>
							 </li>
						 </ul>						
						 <input type="submit" value="REGISTER NOW">
						 <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
					 </form>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Completely Free Account</h3>
				 <div class="strip"></div>
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				 <h3 class="lorem">Lorem ipsum dolor.</h3>
				 <div class="strip"></div>
				 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>