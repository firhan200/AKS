<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Barang</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
									<th>Petugas</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1;foreach ($query->result() as $result){?>
								<tr>
									<td><?php echo $no;?></td>
									<td><?php echo htmlspecialchars($result->namab);?></td>
									<td><?php echo $result->namak;?></td>
									<td>Rp. <?php echo number_format($result->harga);?></td>
									<td><?php echo number_format($result->stock);?></td>
									<td><span class="glyphicon glyphicon-time"></span> <?php echo tgl(date("Y-m-d", strtotime($result->last_update))).", ".date("H:i:s", strtotime($result->last_update));?></td>
									<td><?php echo $result->namap;?></td>
									<td align="right">
										<a href="#"><button type="button" data-toggle="modal" data-target="#infoModal" id="<?php echo $result->idbarang; ?>" class="info btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></button></a>
										<a href="#"><button type="button" data-toggle="modal" data-target="#editModal" id="<?php echo $result->idbarang; ?>" class="edit btn btn-sm btn-default"><span class="glyphicon glyphicon-cog"></span></button></a>
										<a href="<?php echo site_url('admin/barang/delete/'.$result->idbarang.''); ?>" onclick="return confirm('Hapus <?php echo $result->namab ?>?')"><button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
						<h3 class="modal-title"><span class="glyphicon glyphicon-plus"></span> Tambah Barang</h3>
					</div>
					<div class="modal-body">
						<form id="tambahform" action="#" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama</label>&nbsp;<span class="error" id="report1"></span>
								<input type="text" id="nama" name="nama" class="form-control" maxlength="100" required>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="kategori" class="form-control">
									<option value="">--pilih kategori--</option>
									<?php 
										foreach ($row->result() as $result) {
											echo "<option value='".$result->idkategori."'>".$result->nama."</option>";	
										}
									?> 
								</select>
							</div>
							<div class="form-group">
								<label>Harga</label>
								<input type="number" name="harga" class="form-control" maxlength="30" required>
							</div>
							<div class="form-group">
								<label>Stock</label>
								<input type="number" name="stock" class="form-control" maxlength="10" required>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="deskripsi" class="form-control" maxlength="1000" rows="6"></textarea>
							</div>
							<div class="form-group" id="button-upload">
								<label for="userfile">Foto</label>
								<input type="file" name="userfile"  class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" style="width:100%;">Tambah</button>
						</form>
						<div id="a"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- tambah barang modal end-->

		<!-- edit barang modal -->
		<div id="editModal" class="modal fade" role="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title"><span class="glyphicon glyphicon-cog"></span> Ubah Barang</h3>
					</div>
					<div class="modal-body">
						<form action="edit" id="editform" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama Barang</label>&nbsp;<span class="error" id="editreport1"></span>
								<input type="text" id="editnama" name="ubahnama" class="form-control" maxlength="100" required>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select id="editkategori" name="ubahkategori" class="form-control">
									<option value="">--pilih kategori--</option>
									<?php 
										foreach ($row->result() as $result) {
											echo "<option value='".$result->idkategori."'>".$result->nama."</option>";	
										}
									?> 
								</select>
							</div>
							<div class="form-group">
								<label>Stock</label>&nbsp;<span class="error" id="report1"></span>
								<input type="text" id="editstock" name="ubahstock" class="form-control" maxlength="100" required>
							</div>
							<div class="form-group">
								<label>Harga</label>&nbsp;<span class="error" id="report1"></span>
								<input type="text" id="editharga" name="ubahharga" class="form-control" maxlength="100" required>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea id="editdeskripsi" name="ubahdeskripsi" class="form-control" maxlength="1000" rows="6"></textarea>
							</div>
							<div class="form-group">
								<label>Foto</label>
								<input type="file" name="ubahfoto" id="editfoto" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" style="width:100%;">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- edit barang modal end-->

		<!-- Info Modal -->
			<div id="infoModal" class="modal fade" role ="modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3 class="modal-title"><span class="glyphicon glyphicon-eye-open"></span> Info Barang</h3>
						</div>
						<div class="modal-body">
							<center><div id="infofoto"></div></center>
							<div class="form-group">
								<label>Deskripsi</label>
								<div id="infodeskripsi"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Info Modal end -->

		<!-- external javascript -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/js/barang.js'); ?>" type="text/javascript"></script>
	</body>
</html>

<!--

http://stackoverflow.com/questions/20260735/get-image-from-database-using-codeigniter
http://stackoverflow.com/questions/17315962/how-to-upload-image-in-codeigniter
http://code.tutsplus.com/tutorials/how-to-upload-files-with-codeigniter-and-ajax

http://jamshidhashimi.com/2011/06/14/image-upload-with-codeigniter-2/
http://code.tutsplus.com/tutorials/how-to-upload-files-with-codeigniter-and-ajax
http://hashem.ir/CodeIgniter/libraries/file_uploading.html (CodeIgniter 3.0-dev User Guide)


-->
<?php
function tgl($date){
  list($year, $month, $day) = explode('-', $date);
  switch ($month) {
        case "1" : $month="Januari";break;
        case "2" : $month="Februari";break;
        case "3" : $month="Maret";break;
        case "4" : $month="April";break;
        case "5" : $month="Mei";break;
        case "6" : $month="Juni";break;
        case "7" : $month="Juli";break;
        case "8" : $month="Agustus";break;
        case "9" : $month="September";break;
        case "10" : $month="Oktober";break;
        case "11" : $month="November";break;
        case "12" : $month="Desember";break;
    }
    return $day." ".$month." ".$year;
}
?>