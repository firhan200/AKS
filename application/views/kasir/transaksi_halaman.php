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
		<nav class="navbar navbar-default nav-t navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span> Wakdoyok</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu-t"><a href="Home">KELUAR</a></li>
				</ul>
			</div>
		</nav>
		<div class="wrapper-k-t">
			<div class="left-nav-k-t pad-t">
				<div style="font-size:16pt;">
					<legend><span class="glyphicon glyphicon-shopping-cart"></span> Transaksi</legend>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Barang</th>
							<th>Harga</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php for($i=0;$i<=20;$i++){ ?>
						<tr>
							<td>4 Kursi Jati</td>
							<td>25.000</td>
							<td align="right">100.000</td>
						</tr>
						<tr>
							<td>3 Kursi Kusen</td>
							<td>30.000</td>
							<td align="right">90.000</td>
						</tr>
						<?php } ?>
						<tr>
							<td><b style="font-size:14pt;">7 Total</b></td>
							<td></td>
							<td align="right" style="font-size:14pt;">190.000</td>
						</tr>
					</tbody>
				</table>
				<div style="padding-bottom:100px;" align="right">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-share-alt"></span> Checkout</button>
				</div>
			</div>
			<div class="right-content-k-t pad-t">
				<div class="row">
					<?php for($i=0;$i<=9;$i++){ ?>
					<div class="col-sm-3 box-frame-t">
						<div class="box-t">
							<div class="image-t">
								<center><img src="<?php echo site_url('assets/img/barang/kursi.jpg'); ?>" class="img-responsive img-t"></center>
							</div>
							<label style="font-size:16pt;">Kursi Jati</label>
							<div style="font-size:10pt;color:#696969;margin-top:-5px;">
								Kursi
							</div>
							<div class="row">
								<div class="col-xs-6">
									Rp. 25.000
								</div>
								<div class="col-xs-6" align="right">
									56 Stok
								</div>
							</div>
							<br/>
							<center><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Tambah Cart</button></center>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<!-- external javascript -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	</body>
</html>