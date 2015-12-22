<?php
	include "../config/koneksi.php";
	
	$id_visimisi=$_POST['id_visimisi'];
	$judul=$_POST['judul'];
	$nama_file=$_POST['nama_file'];
	$tgl=date('Y-m-d');
	$keterangan=$_POST['keterangan'];
	
	
	$query=mysql_query("update visi_misi set judul='$judul',nama_file='$nama_file',
						keterangan='$keterangan',tanggal='$tgl' where id_visimisi='$id_visimisi'")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=visimisi';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>