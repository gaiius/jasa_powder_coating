<?php
		session_start();
		include_once("../config/koneksi.php");
		include_once("../config/function.php");
			$Login = isset($_POST['login'])?true:false;
	$msg = "";
	//login execution
	if($Login){
		extract(html_entities($_POST));
		$password = md5($password);
		
		$sqlLogin = "SELECT * FROM admin 
			WHERE `username`='".$username."'
			AND `password`='".$password."' 
			AND `status`=1 LIMIT 1";
		$qryLogin = mysql_query($sqlLogin);
		
		if(mysql_num_rows($qryLogin) > 0){
			$r = mysql_fetch_array($qryLogin);
			//set session login
			$_SESSION['admin']		= true;
			$_SESSION['id']			= $r['id'];
			$_SESSION['fullname']	= $r['nama_lengkap'];
			//direct to dashboard
			header("Location: admin.php");		
		} else {
			$msg = "<div class='error'>Invalid username or password!</div>";
		}
	}
?>