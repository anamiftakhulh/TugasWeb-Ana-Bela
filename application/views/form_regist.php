<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ANNABELL ONLINE STORE</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		<form class="form-signin" method="post" action="<?= base_url('index.php/login/register')?>">
				<div><?=validation_errors();?></div>
				<?=form_open('Login/register');?>

				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-3">
					  <input type="text" class="form-control" name="username" placeholder="Enter Username">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-3">
					  <input type="password" class="form-control" name="password" placeholder="Enter Password">
					</div>
				  </div>
				  <div class="form-group">
				      <label for="">Level</label>
				      <select name="group" id="level" class="form-control" style="height: 45px;">
				        <option value="1">Admin</option>
				        <option value="2">User</option>
				      </select>
				   </div>
				  <!-- <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <div class="checkbox">
						<label>
						  <input type="checkbox"> Remember me
						</label>
					  </div>
					</div>
				  </div> -->
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-warning">Registration</button>
					  <?php form_close(); ?>
					</div>
				  </div>
		</form>
	</body>
</html>