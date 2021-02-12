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
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> User List</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
					<?php  foreach ($users as $i=>$row) { ?>
						<tr> 
							<td><?php echo $i+1 ;?></td></a>  
							<td><?php echo $row['name'];?></td></a>  
							<td><?php echo $row['email'];?></td></a>  
							<td><?php echo $row['address'];?></td></a>  
							<td>
								<a  class="btn btn-inverse-danger waves-effect waves-light m-1" href="user/edituser/<?=$row['id']?>">Edit</a> 
								<a  class="btn btn-inverse-warning waves-effect waves-light m-1" onclick="return confirm('Are you sure?');" href="user/delete_user/<?=$row['id']?>">Delete</a>
							</td>  
						 </tr>  
					<?php } ?> 
                </tbody>
                <tfoot>
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
     <!-- </div> End Row-->

    
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
