<!DOCTYPE html>
<html>
<head>
	<title>Students Registration Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/assets/css/bootstrap.min.css">
</head>

<body>

<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand ">CRUD Application</a>
    </div>
</div>

<div class="container" style="padding-top: 10px;">
	<div class="row">
		<div class="col-md-6">
			<h3>Students Registration Form</h3>
		</div>
		<div class="col-md-6">
		  <a href="<?php echo base_url('/') ?>" class="btn btn-primary float-right">
		  	List of Students 
		  </a>
		</div>
	</div> 
	<hr>
	
	<div class="row">
	    <div class="col-md-6">
	    	<form action="" method="post">
	    		<div class="form-gorup">
	    			<label>Name</label>
	    			<input type="text" name="name" value="" class="form-control  <?php echo (isset($validation) && $validation->hasError('name')) ? 'is-invalid' : '' ?>">
	    			<?php 	//print_r($validation);
			            if (isset($validation) && $validation->hasError('name')) {
			                echo "<p class='invalid-feedback'>".$validation->getError('name')."</p>";
			            }
			        ?> 
	    		</div><br>
	    		<div class="form-gorup">
	    			<label>Email</label>
	    			<input type="email" name="email" value="" class="form-control <?php echo (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : '' ?>">
	    			<?php 	//print_r($validation);
			            if (isset($validation) && $validation->hasError('email')) {
			                echo "<p class='invalid-feedback'>".$validation->getError('email')."</p>";
			            }
			        ?> 
	    		</div><br>
	    		<div class="form-gorup">
	    			<label>Mobile Number</label>
	    			<input type="text" name="mobile" value="" class="form-control <?php echo (isset($validation) && $validation->hasError('mobile')) ? 'is-invalid' : '' ?>">
	    			<?php 	//print_r($validation);
			            if (isset($validation) && $validation->hasError('mobile')) {
			                echo "<p class='invalid-feedback'>".$validation->getError('mobile')."</p>";
			            }
			        ?> 
	    		</div><br>
	    		<div class="form-gorup">
	    			<label>Address</label>
	    			<textarea id="address" name="address" cols="70" rows="3" class="form-control">	</textarea>
	    		</div><br>
	    		<div class="form-gorup">
	    			<button type="submit" class="btn btn-primary">Submit</button>
	    		</div>
	    	</form>
    	</div>
    </div>
   
</div>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script> -->
<script src="<?php echo base_url() ?>/public/assets/js/bootstrap.min.js" ></script>

</body>
</html>