<?php
	include "../config/koneksi.php";
	
	$id_testimoni=$_POST['id_testimoni'];
	$nama_jwb=$_POST['nama_jwb'];
	$pesan_jwb=$_POST['pesan_jwb'];
	$tgl=date('Y-m-d');
	
	$query=mysql_query("insert into jawaban (id_testimoni,nama_jwb,pesan_jwb,tgl_jwb) values ('$id_testimoni','$nama_jwb','$pesan_jwb','$tgl')")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=detailtestimoni&id=<?php echo $id_testimoni; ?>';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>