<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from sales where id_berita='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=sales_list';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>