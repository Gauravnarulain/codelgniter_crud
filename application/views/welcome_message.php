<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
	.table-responsive{display:table}
	</style>
<body>

	<div class="container">


		<div id="body" class="row">
			<div class="col-3">
			</div>
			<div class="col">
				<div class="row">
					<div class="col-12">
						<form role="form" method="post" action="<?= base_url('index.php/welcome/add') ?>">
							<div class="form-group">
								<label>Post Title</label>
								<input type="text" name="post_title" class="form-control" />
							</div>
							<div class="form-group">
								<input type="submit" name="btnsave" class="btn btn-info btn-block" />
							</div>
						</form>
					</div>
					<div class="col-12">
						<table style="width:100% !important;" class="table table-responsive">
						   <tr>
						     <th>ID</th>
							 <th>Title</th>
							 <th colspan="2">Action</th>
						   </tr>
							<?php 
							  if(!empty($post)){
								  foreach ($post as $key => $value) {
									 ?>
									<tr>
										<td><?= $value->post_id; ?></td>
										<td><?= $value->post_title; ?></td>
										<td><a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href='<?= base_url('index.php/welcome/delete/').$value->post_id; ?>'>Delete</a></td>
										<td><a class="btn btn-primary btn-sm" href='<?= base_url('index.php/welcome/update/').$value->post_id; ?>'>Update</a></td>
									</tr>	
									 <?php
								  }
							  }
							?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-3">
			</div>
		</div>


	</div>

</body>

</html>