<?php
	include "config/koneksi.php";
	
	$tentang=$_POST['tentang'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$pesan=$_POST['pesan'];
	$tlp=$_POST['tlp'];
	$kota=$_POST['kota'];
	$alamat=$_POST['alamat'];
	$tgl=date('Y-m-d');
	
	$query=mysql_query("insert into testimoni(tentang,nama,email,pesan,tlp,kota,alamat,tgl_testimoni) values ('$tentang','$nama','$email','$pesan','$tlp','$kota','$alamat','$tgl')")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='index.php?page=area2';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>