<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from produk where id_produk='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=tambahproduk';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>