<?php
	include "../config/koneksi.php";
	
	$nama_sales=$_POST['nama_sales'];
	$alamat=$_POST['alamat'];
	$no_tlp=$_POST['no_tlp'];
	$email=$_POST['email'];
	
	
	$query=mysql_query("insert into sales (nama_sales,alamat,no_tlp,email) values ('$nama_sales','$alamat','$no_tlp','email')")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=sales_list';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>