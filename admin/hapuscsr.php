<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from csr where id_berita='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=csr';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>