<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from gambar where id_gambar='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=gambar';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>