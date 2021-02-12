<?php $this->load->view('front/header')?>
 <body>
		<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-10">
	<?php if(isset($empty_field)) : ?>
			<div class="alert alert-danger" role="alert">
		  <h3>Error</h3>
		   <p>Field Must not be empty, please try again.</p>
		</div>
		<?php endif; ?>
     <form method="post" action="user/update_user/<?=$users['id']?>">
		  <div class="form-group">
			<label for="exampleFormControlInput1">Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $users['name'] ?>">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlInput1">Email</label>
			<input type="text"  name="email" class="form-control" value="<?php echo $users['email']?>">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlInput1">Password</label>
			<input type="text"  name="password" class="form-control" >
		  </div>
		  
		  
		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Address</label>
			<textarea class="form-control"  name="address" id="" rows="3"><?php echo $users['address']?></textarea>
		  </div>
		  
		  <input type="submit" class="btn btn-success" value="submit">
	</form>
	
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