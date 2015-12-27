<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kategori</title>
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
									<th>Kategori</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1;foreach($query->result() as $result){ ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo htmlspecialchars($result->nama); ?></td>
									<td align="right">
										<a href="#"><button type="button" data-toggle="modal" data-target="#editModal" id="<?php echo $result->idkategori; ?>" class="edit btn btn-sm btn-default"><span class="glyphicon glyphicon-cog"></span></button></a>
										<a href="<?php echo site_url('admin/kategori/delete/'.$result->idkategori.''); ?>" onclick="return confirm('Hapus <?php echo $result->nama ?>?')"><button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
									</td>
								</tr>
								<?php $no++; } ?>
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
						<h3 class="modal-title"><span class="glyphicon glyphicon-plus"></span> Tambah Kategori</h3>
					</div>
					<div class="modal-body">
						<form action="<?php echo site_url('admin/kategori/insert'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama Kategori</label>&nbsp;<span class="error" id="report1"></span>
								<input type="text" id="nama" name="nama" class="form-control" maxlength="100" required>
							</div>
							<button id="submit" type="submit" class="btn btn-primary" style="width:100%;">Tambah</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- tambah barang modal end-->
		<!-- ubah barang modal -->
		<div id="editModal" class="modal fade" role="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title"><span class="glyphicon glyphicon-cog"></span> Ubah Kategori</h3>
					</div>
					<div class="modal-body">
						<form action="#" id="editform" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama Kategori</label>&nbsp;<span class="error" id="report1"></span>
								<input type="text" id="editnama" name="nama" class="form-control" maxlength="100" required>
							</div>
							<button id="submit" type="submit" class="btn btn-primary" style="width:100%;">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- ubah barang modal end-->

		<!-- external javascript -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/js/kategori.js'); ?>" type="text/javascript"></script>
	</body>
</html>