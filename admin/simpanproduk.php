<?php
$namafolder="gambar/produk/"; 
	include "../config/koneksi.php";
	
	$gambar=$_FILES['nama_file']['name'];
	$judul_gambar=$_POST['judul_gambar'];
	$nama_produk=$_POST['nama_produk'];
	$tipe_produk=$_POST['tipe_produk'];
	
	$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar);
	
	$query=mysql_query("insert into produk(tipe_produk,nama_produk,judul_gambar,nama_gambar) 
			values 
			('$tipe_produk','$nama_produk','$judul_gambar','$gambar')")
	 or die(mysql_error());
	 
if ($query){

	?>
    <script>document.location='admin.php?page=tambahproduk';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>