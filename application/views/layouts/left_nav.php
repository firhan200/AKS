<ul class="sidebar-t" align="center">
	<li <?php if(isset($tab1)) echo 'class="active"'; ?>><a href="<?php echo site_url('admin/dashboard'); ?>"><span class="glyphicon glyphicon-dashboard"></span>
		<div class="nav-text-t">DASHBOARD</div></a></li>
	<li <?php if(isset($tab2)) echo 'class="active"'; ?>><a href="<?php echo site_url('admin/kategori'); ?>"><span class="glyphicon glyphicon-star"></span>
		<div class="nav-text-t">KATEGORI</div></a></li>
	<li <?php if(isset($tab3)) echo 'class="active"'; ?>><a href="<?php echo site_url('admin/barang'); ?>"><span class="glyphicon glyphicon-th-large"></span>
		<div class="nav-text-t">BARANG</div></a></li>
	<li <?php if(isset($tab4)) echo 'class="active"'; ?>><a href="<?php echo site_url('admin/kasir'); ?>"><span class="glyphicon glyphicon-user"></span>
		<div class="nav-text-t">PETUGAS</div></a></li>
	<li <?php if(isset($tab5)) echo 'class="active"'; ?>><a href="<?php echo site_url('admin/transaksi'); ?>"><span class="glyphicon glyphicon-folder-open"></span>
		<div class="nav-text-t">TRANSAKSI</div></a></li>
	<li><a href="<?php echo site_url('login/logoutProcess'); ?>"><span class="glyphicon glyphicon-log-out"></span>
		<div class="nav-text-t">KELUAR</div></a></li>
</ul>