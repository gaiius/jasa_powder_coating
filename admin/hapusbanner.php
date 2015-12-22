<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from banner where id_banner='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=banner';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>