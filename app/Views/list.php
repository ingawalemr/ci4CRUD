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
			<h3>List of Students</h3>
		</div>
		<div class="col-md-6">
		  <a href="<?php echo base_url('StudentController/create') ?>" class="btn btn-primary float-right">Create Students Registration
		  </a>
		</div>
	</div> 
	<hr>
	<!-- session display -->
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	        <?php // insert records session
	            $session = \Config\Services::session($config); 
	                if (!empty($session->getFlashdata('success'))) { ?>
	                    <div class="alert alert-success">
	                      <?php echo $session->getFlashdata('success'); ?>
	                    </div>
	        <?php   }   ?>

	        <?php // delete records session
	            $session = \Config\Services::session($config); 
	                if (!empty($session->getFlashdata('delete'))) { ?>
	                    <div class="alert alert-danger">
	                      <?php echo $session->getFlashdata('delete'); ?>
	                    </div>
	        <?php   }   ?>

	        <?php // fails-records find session
	            $session = \Config\Services::session($config); 
	                if (!empty($session->getFlashdata('fail'))) { ?>
	                    <div class="alert alert-danger">
	                      <?php echo $session->getFlashdata('fail'); ?>
	                    </div>
	        <?php   }   ?>
	        </div>
	    </div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-hover">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Action</th>
					<th>View as PDF</th>
				</tr>
				
					<?php
					if (!empty($students)) {
						foreach ($students as $student) { ?>
					<tr>		
							<td><?php echo $student['id']; ?></td>
							<td><?php echo $student['name']; ?></td>
							<td><?php echo $student['email']; ?></td>
							<td><?php echo $student['mobile']; ?></td>
							<td><?php echo $student['address']; ?></td>
							<td>
								<a href="<?php echo base_url('StudentController/edit/'.$student['id']); ?>" class="btn btn-success">Edit</a>
								
								<a onclick="deleteConfirm(<?php echo $student['id'] ?>)" href="#" class="btn btn-danger">Delete</a>
								<!-- <a href="<?php //echo base_url('StudentController/delete/'.$student['id']); ?>" class="btn btn-danger">Delete</a> -->
							</td>
							<td><a href="<?php echo base_url('StudentController/htmlToPDF/'.$student['id']); ?>" class="btn btn-primary">View in pdf</a></td>   
					</tr>
					<?php
						}
					}
					?>
				
			</table>
		</div>
	</div>
</div>

 <script>
    function deleteConfirm(id) {
        //alert(id);
        if (confirm('Do you want to delete record?')) {
            window.location.href="<?php echo base_url('StudentController/delete/') ?>/"+id;
        }
    }
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script> -->
<script src="<?php echo base_url() ?>/public/assets/js/bootstrap.min.js" ></script>

</body>
</html>