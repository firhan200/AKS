<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Barang</title>
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
					<div class="col-sm-4">
						<button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th style="width:5%;">No.</th>
									<th>Nama</th>
									<th>Kategori</th>
									<th>Harga</th>
									<th>Stok</th>
									<th>Last_update</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Kursi Kayu</td>
									<td>Kursi</td>
									<td>125.000</td>
									<td>57</td>
									<td>10 Desember 2015</td>
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

		<!-- tambah barang modal -->
		<div id="addModal" class="modal fade" role="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title"><span class="glyphicon glyphicon-plus"></span> Tambah Barang</h3>
					</div>
					<div class="modal-body">
						<form action="#" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" maxlength="100" required>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="kateogir" class="form-control">
									<option value="">--pilih kategori--</option>
								</select>
							</div>
							<div class="form-group">
								<label>Harga</label>
								<input type="number" name="harga" class="form-control" maxlength="30">
							</div>
							<div class="form-group">
								<label>Stok</label>
								<input type="number" name="stok" class="form-control" maxlength="10">
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="deskripsi" class="form-control" maxlength="1000" rows="6"></textarea>
							</div>
							<div class="form-group">
								<label>Foto</label>
								<input type="file" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" style="width:100%;">Tambah</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- tambah barang modal end-->

		<!-- external javascript -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	</body>
</html>