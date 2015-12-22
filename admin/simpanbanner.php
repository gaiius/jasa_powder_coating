<?php
$namafolder="banner/"; 
	include "../config/koneksi.php";
	
	$gambar=$_FILES['nama_file']['name'];
	$judul_gambar=$_POST['judul_gambar'];
	
	$judul_banner=$_POST['judul_banner'];
	$keterangan=$_POST['keterangan'];
	
	$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar);
	
	$query=mysql_query("insert into banner(judul_banner,keterangan_banner,judul_gambar,nama_gambar) 
			values 
			('$judul_banner','$keterangan_banner','$judul_gambar','$gambar')")
	 or die(mysql_error());
	 
if ($query){

	?>
    <script>document.location='admin.php?page=banner';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>