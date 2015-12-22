<?php
$namafolder="gambar/produk/"; 
	include "../config/koneksi.php";
	
	$gambar=$_FILES['nama_gambar']['name'];
	$judul_gambar=$_POST['judul_gambar'];
	$nama_produk=$_POST['nama_produk'];
	$tipe_produk=$_POST['tipe_produk'];
	$id_produk=$_POST['id_produk'];
	
	
	$gambar = $namafolder . basename($_FILES['nama_gambar']['name']);		
		move_uploaded_file($_FILES['nama_gambar']['tmp_name'], $gambar);
	 
	$query=mysql_query("update produk set 
				tipe_produk='$tipe_produk',nama_produk='$nama_produk',judul_gambar='$judul_gambar',nama_gambar='$gambar'
				 where id_produk='$id_produk'")
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