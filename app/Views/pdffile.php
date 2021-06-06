<div class="container" style="padding-top: 10px;">
	<div class="row">
		<div class="col-md-6">
			<h3>List of Students</h3>
		</div>
	</div> 
	<hr>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-hover">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
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
						</tr>
				<?php
					}
				}
				?>
				</table>
		</div>
	</div>
</div>