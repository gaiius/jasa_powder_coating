<?php
	include "../config/koneksi.php";
	
	$id_popular=$_POST['id_popular'];
	$judul=$_POST['judul'];
	$judul_gambar=$_POST['judul_gambar'];
	$nama_file=$_POST['nama_file'];
	$tgl=date('Y-m-d');
	$keterangan=$_POST['keterangan'];
	
	
	$query=mysql_query("update popular_post set judul='$judul',judul_gambar='$judul_gambar',nama_file='$nama_file',
						keterangan='$keterangan',tanggal_post='$tgl' where id_popular='$id_popular'")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=popular';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>