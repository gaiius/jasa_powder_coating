<?php

	include "../config/koneksi.php";
	
	
	$judul_spek=$_POST['judul_spek'];
	$keterangan_spek=$_POST['keterangan_spek'];
	$id_produk=$_POST['id_produk'];
	$tgl=date('Y-m-d');
	
	$sql=mysql_query("insert into detail_produk(judul_spek,detail_spek,tgl_spek,id_produk) values 
								('$judul_spek','$keterangan_spek','$tgl','$id_produk')");
	?>
    <script>document.location='admin.php?page=listspek';</script>