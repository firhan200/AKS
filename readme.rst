###################
Aplikasi Kasir Sederhana
###################

Aplikasi Kasir Sederhana(AKS) adalah sistem transaksi kasir berbasis web yang di bangun di atas Codeigniter v3, Bootstrap v3.5, JQuery dan menggunakan basis data MySQL. Terdapat 2 Level pada aplikasi ini yaitu level administrator dan level petugas/kasir.
Fungsi dari masing-masing level antara lain:
User	Fungsi
Kasir	Melayani transaksi pembelian barang
Kasir	Mencetak nota transaksi
Kasir	Rekap data transaksi per hari yang dilayaninya.
Admin	CRUD data kategori
Admin	CRUD data barang
Admin	CRUD data petugas
Admin	Melihat rekapitulasi transaksi penjualan tiap hari, bisa di-filter untuk kasir tertentu.

*******************
Struktur Basis Data
*******************

Struktur Basis Data
Petugas (idpetugas, nama, email, password, kategori)
Kategori : admin | kasir
Email digunakan sebagai username untuk login.
Kategori (idkategori, nama)
Barang (idbarang, nama, deskripsi, idkategori, harga, stok, last_update, idpetugas)
Transaksi (idtransaksi, idpelanggan, tgl_transaksi, total_item, total_harga, idpetugas)
Detail_transkasi (idtransaksi, idbarang, jumlah, harga)