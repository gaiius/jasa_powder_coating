<?php
$namafolder="gambar/..."; 
	include "../config/koneksi.php";
	
	$gambar=$_FILES['nama_file']['name'];
	$judul=$_POST['judul'];
	$judul_gambar=$_POST['judul_gambar'];
	$keterangan=$_POST['keterangan'];
	$tanggal_berita=$_POST['tanggal_berita'];
	$tahun=$_POST['tahun'];
	$id_berita=$_POST['id_berita'];
	
	
	$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar);
	 
	$query=mysql_query("update csr set 
				judul='$judul',judul_gambar='$judul_gambar',keterangan='$keterangan',
				nama_file='$gambar',tanggal_berita='$tanggal_berita',tahun='$tahun'
				
				 where id_berita='$id_berita'")
				 
	 or die(mysql_error());
	 
if ($query){

	?>
    <script>document.location='admin.php?page=csr';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>