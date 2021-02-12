<?php //$this->load->view('front/header')?>
<!--<body>
<div class="container">
  <div class="row justify-content-md-center">
	<div class="col col-lg-6 mt-5">-->
		<?php //if(isset($empty_field)) : ?>
			<!--<div class="alert alert-danger" role="alert">
			  <h3>Error</h3>
			   <p>Email OR Password Not Matched.</p>
			</div>-->
		<?php //endif; ?>
	 <!--<form method="post" action="login/login_check">
		  <div class="form-group">
			<label for="exampleFormControlInput1">Email</label>
			<input type="text"  name="email" class="form-control" id="exampleFormControlInput1">
		  </div>
		  
		  <div class="form-group">
			<label for="exampleFormControlInput1">Password</label>
			<input type="password"  name="password" class="form-control" id="exampleFormControlInput1" >
		  </div>
		  <input type="submit" class="btn btn-success" value="Login">
	</form>
	
	</div>
  </div>
</div>-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashrock/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 04:23:10 GMT -->
<?php $this->load->view('backend/headerlink');?>

<body class="authentication-bg">
 <!-- Start wrapper-->
 
 <div id="wrapper">
 
	<div class="card card-authentication1 mx-auto my-5 animated zoomIn">
	<?php if(isset($empty_field)) : ?>
			<div class="alert alert-danger" role="alert">
			  <h3>Error</h3>
			   <p>Email OR Password Not Matched.</p>
			</div>
		<?php endif; ?>
		<div class="card-body">
		
		 <div class="card-content p-2">
		  <div class="text-center">
		 		<img src="assets/images/logo-icon.png"/>
		 	</div>
		  <div class="card-title text-uppercase text-center py-2">Sign In</div>
		    <form method="post" action="login/login_check">
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputUsername" class="sr-only">E-Mail</label>
				  <input type="text" name="email" id="exampleInputUsername" class="form-control" placeholder="Username">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" name="password" id="exampleInputPassword" class="form-control" placeholder="Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row mr-0 ml-0">
			 <div class="form-group col-6">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="authentication-reset-password.html">Reset Password</a>
			 </div>
			</div>
			
			 <div class="form-group">
			   <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign In</button>
			 </div>
			  <div class="form-group text-center">
			   <p class="text-muted">Not a Member ? <a href="authentication-signup.html"> Sign Up here</a></p>
			 </div>
			 <div class="form-group text-center">
			    <hr>
				<h5>OR</h5>
			 </div>
			  <div class="form-group text-center">
				<button type="button" class="btn btn-facebook shadow-facebook text-white btn-block waves-effect waves-light"><i class="fa fa-facebook-square"></i> Sign In With Facebook</button>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <?php $this->load->view('backend/footerlink');?>
	
</body>

<!-- Mirrored from codervent.com/dashrock/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 04:23:10 GMT -->
</html>
