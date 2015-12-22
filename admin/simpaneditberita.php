<?php
	include "../config/koneksi.php";
	
	$id_berita=$_POST['id_berita'];
	$judul=$_POST['judul'];
	$judul_gambar=$_POST['judul_gambar'];
	$nama_file=$_POST['nama_file'];
	$tgl=date('Y-m-d');
	$keterangan=$_POST['keterangan'];
	
	
	$query=mysql_query("update berita set judul='$judul',judul_gambar='$judul_gambar',nama_file='$nama_file',
						keterangan='$keterangan',tanggal_berita='$tgl' where id_berita='$id_berita'")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=berita';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>