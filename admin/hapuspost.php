<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from popular_post where id_popular='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=popular';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>