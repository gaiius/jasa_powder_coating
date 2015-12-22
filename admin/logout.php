<?php
		include "../config/koneksi.php";
		$id_user=$_POST['id_user'];
		session_start();
		session_destroy();
		$query=mysql_query("update login set status='0' where id_user='$id_user'");
		header("Location:index.php");
?>