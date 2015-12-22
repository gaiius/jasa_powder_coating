<?php
	include "../config/koneksi.php";
	
	$name=$_POST['name'];
	$link=$_POST['link'];
		
	$query=mysql_query("insert into menu (name,link) values ('$name','$link')")
	 or die(mysql_error());
if ($query){

	?>
    <script>document.location='admin.php?page=menu_list';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>