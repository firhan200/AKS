<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kasir</title>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper-t">
			<div class="left-nav-t">
				<?php $this->load->view('layouts/left_nav'); ?>
			</div>
			<div class="right-content-t pad-t">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-8">
						<div class="form-group">
							<select id="filter" class="form-control">
								<option value="">--filter transaksi--</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th style="width:5%;">No.</th>
									<th>Transasksi</th>
									<th>Total Barang</th>
									<th>Total Harga</th>
									<th>Tanggal Transaksi</th>
									<th>Pelayan</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>B230U2</td>
									<td>5</td>
									<td>Rp. 135.000</td>
									<td><span class="glyphicon glyphicon-time"></span> 16 Desember 2015, 10:20:00</td>
									<td><span class="glyphicon glyphicon-user"></span> Wakdoyok</td>
									<td align="right">
										<a href="#"><button type="button" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></button></a>
										<a href="#"><button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-cog"></span></button></a>
										<a href="#"><button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- external javascript -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	</body>
</html>