<?php

	include "../config/koneksi.php";
	
	$id_detailproduk=$_POST['id_detailproduk'];
	$judul_spek=$_POST['judul_spek'];
	$detail_spek=$_POST['detail_spek'];
	$tgl=date('Y-m-d');
	
	$query=mysql_query("update detail_produk set judul_spek='$judul_spek',detail_spek='$detail_spek',tgl_spek='$tgl'
						 where id_detailproduk='$id_detailproduk'")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=listspek';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>
	
	
	
	$sql=mysql_query("insert into detail_produk(judul_spek,detail_spek,tgl_spek) values 
								('$judul_spek','$keterangan_spek','$tgl')");
	?>
    <script>document.location='admin.php?page=listspek';</script>