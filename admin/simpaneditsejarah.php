<?php
	include "../config/koneksi.php";
	
	$id_sejarah=$_POST['id_sejarah'];
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];
	
	
	$query=mysql_query("update sejarah set judul='$judul',
						keterangan='$keterangan' where id_sejarah='$id_sejarah'")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=sejarah';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>