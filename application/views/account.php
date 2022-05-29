<style type="text/css">
	#ab
	{
		border: 1px solid #EEE;
    	outline-color: #CACACA;
    	width: 96%;
    	font-size: 13px;
    	padding: 8px;
	}
</style>
<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="<?php echo base_url('home/index')?>" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="<?php echo base_url('home/index')?>">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h2>NEW CUSTOMERS</h2>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="<?php echo base_url('User_Register/register')?>">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="<?php echo base_url()?>User_Login/login" method="post">
					<?php 
						if($sms = $this->session->flashdata('msg'))
						{
							?>
							<h4 class="alert alert-danger text-center" id="ab"><?php echo $sms;?></h4>

							<?php
						}
					?>
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="email" name="email" placeholder="Enter Your Email"id="ab"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="password" placeholder="Enter Your Password"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" name="login" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>