<?php
	include"../config/koneksi.php";
	$id=$_GET['id'];
	$id_testimoni=$_GET['id_testimoni'];
	$query=mysql_query("delete from jawaban where id_jwb='$id'");
if ($query){

	?>
    <script>document.location='admin.php?page=detailtestimoni&id=<?php echo $id_testimoni; ?>';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>