<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrator</title>
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
					<div class="col-sm-3 box-frame-t">
						<div class="box-t">
							<div class="row">
								<div class="col-sm-3">
									<span style="color:#F7D358;" class="glyphicon glyphicon-th-large icon-l-t"></span>
								</div>
								<div class="col-sm-9" align="left">
									<div class="box-text-t">
										Jumlah Barang
									</div>
									<span style="font-size:16pt;">125</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 box-frame-t">
						<div class="box-t">
							<div class="row">
								<div class="col-sm-3">
									<span style="color:#ACFA58;" class="glyphicon glyphicon-user icon-l-t"></span>
								</div>
								<div class="col-sm-9" align="left">
									<div class="box-text-t">
										Jumlah Kasir
									</div>
									<span style="font-size:16pt;">14</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 box-frame-t">
						<div class="box-t">
							<div class="row">
								<div class="col-sm-3">
									<span style="color:#F5BCA9;" class="glyphicon glyphicon-folder-open icon-l-t"></span>
								</div>
								<div class="col-sm-9" align="left">
									<div class="box-text-t">
										Jumlah Transaksi
									</div>
									<span style="font-size:16pt;">125</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 box-frame-t">
						<div class="box-t">
							<div class="row">
								<div class="col-sm-3">
									<span style="color:#58ACFA;" class="glyphicon glyphicon glyphicon-usd icon-l-t"></span>
								</div>
								<div class="col-sm-9" align="left">
									<div class="box-text-t">
										Total Penjualan
									</div>
									<span style="font-size:12pt;">Rp. 25.250.000</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- external javascript -->
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
	</body>
</html>