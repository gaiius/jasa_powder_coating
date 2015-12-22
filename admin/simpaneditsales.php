<?php
	include "../config/koneksi.php";
	
	$id_sales=$_POST['id_sales'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama_sales=$_POST['nama_sales'];
	$alamat=$_POST['alamat'];
	$no_tlp=$_POST['no_tlp'];
	$email=$_POST['email'];
	$level=$_POST['level'];
	
	$query=mysql_query("update sales set username='$username',password='$password',nama_sales='$nama_sales',
						alamat='$alamat',no_tlp='$no_tlp',email='$email',level='$level' where id_sales='$id_sales'")
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