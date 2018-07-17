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
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['name'] ?></td>
					<td><?= $items['qty'] ?></td>
					<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
					<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td align="right" colspan="4">Total </td>
					<td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>
		</table>
		<div align="center">
			<?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?> 
			<?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
			<?= anchor('order','Check Out',['class'=>'btn btn-success']) ?>
		</div>
	</body>
</html>