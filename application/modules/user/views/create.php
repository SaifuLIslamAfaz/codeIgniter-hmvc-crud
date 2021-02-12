<!DOCTYPE html>
<html lang="en">
    <title>CI admin dashboard</title>
	<?php $this->load->view('backend/headerlink');?>

<body onload="info_noti()">

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
	<!-- sidebar include here-->
	<?php $this->load->view('backend/sidebar')?>
  <!--End sidebar-wrapper-->

<!--Start topbar header-->
	<?php $this->load->view('backend/header')?>
<!--end topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      
       

      <div class="row">
        <div class="col-lg-12">
		<?php if(isset($empty_field)) : ?>
			<div class="alert alert-danger" role="alert">
		  <h3>Error</h3>
		   <p>Field Must not be empty, please try again.</p>
		</div>
		<?php endif; ?>
          <div class="card">
			     <div class="card-body">
				   <div class="card-title">Vertical Form</div>
				   <hr>
				    <form method="post" action="user/registration_form">
					 <div class="form-group">
					  <label for="input-1">Name</label>
					  <input type="text" name="name" class="form-control" id="input-1" placeholder="Enter Your Name">
					 </div>
					 <div class="form-group">
					  <label for="input-2">Email</label>
					  <input type="text" name="email" class="form-control" id="input-2" placeholder="Enter Your Email Address">
					 </div>
					 <div class="form-group">
					  <label for="input-3">Password</label>
					  <input type="password" name="password" class="form-control" id="input-3" placeholder="Enter Password">
					 </div>
					 <div class="form-group">
					   <textarea name="address" id="summernoteEditor">
							
						</textarea>
					 </div>
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Submit</button>
					</div>
					</form>	
				 </div>
			   </div>
        </div>
      </div><!-- End Row-->
      

    
      <!--</div><!-- End Row-->
	<!-- </div>-->
	  
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
		<?php $this->load->view('backend/footer');?>
	<!--End footer-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <!---script link here--->
  <?php $this->load->view('backend/footerlink');?>
  
</body>

<!-- Mirrored from codervent.com/dashrock/color-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 03:56:12 GMT -->
</html>
