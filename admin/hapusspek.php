<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$query=mysql_query("delete from detail_produk where id_detailproduk='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=listspek';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>