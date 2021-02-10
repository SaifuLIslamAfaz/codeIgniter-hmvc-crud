<?php $this->load->view('front/header')?>
 <body>
		<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-12">
	
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	
	<?php  foreach ($users as $i=>$row) { ?>
		<tr> 
			<td><?php echo $i+1 ;?></td></a>  
			<td><?php echo $row['name'];?></td></a>  
			<td><?php echo $row['email'];?></td></a>  
			<td><?php echo $row['address'];?></td></a>  
			<td><a href="user/edituser/<?=$row['id']?>">Edit</a> || <a onclick="return confirm('Are you sure?');" href="user/delete_user/<?=$row['id']?>">Delete</a></td></a>  
		 </tr>  
	<?php } ?> 
  </tbody>
  
  
</table>
	
    </div>
  </div>
</div>

			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>