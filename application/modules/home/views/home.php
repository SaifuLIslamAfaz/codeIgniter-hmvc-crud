<?php $this->load->view('front/header')?>
 <body>
<div class="container">
  <div class="row justify-content-md-center">
	<div class="col col-lg-12">
	
	 <form method="post" action="home/registration_form">
		  <div class="form-group">
			<label for="exampleFormControlInput1">Name</label>
			<input type="text" name="name" class="form-control" id="exampleFormControlInput1">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlInput1">Email</label>
			<input type="text"  name="email" class="form-control" id="exampleFormControlInput1">
		  </div>
		  
		  <div class="form-group">
			<label for="exampleFormControlInput1">Password</label>
			<input type="password"  name="password" class="form-control" id="exampleFormControlInput1" >
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Address</label>
			<textarea class="form-control"  name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  
		  <input type="submit" class="btn btn-success"  value="submit">
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