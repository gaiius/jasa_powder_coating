<?php
$namafolder="gambar/"; //tempat menyimpan file
	include "../config/koneksi.php";
	if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
	$judul_gambar=$_POST['judul_gambar'];
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];
	$tgl=date('Y-m-d');
	
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar))
			 {
			$sql="insert into popular_post(judul,keterangan,judul_gambar,nama_file,tanggal_post) values 
								('$judul','$keterangan','$judul_gambar','$gambar','$tgl')";
			$res=mysql_query($sql) or die (mysql_error());
	}
		 else 
		{
		   echo "<p>Gambar gagal dikirim</p>";
		}
  	 	}
   else
    {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
 	}
	}
	else 
	{
		$judul=$_POST['judul'];
		$keterangan=$_POST['keterangan'];
		$tgl=date('Y-m-d');
			$sql="insert into popular_post(judul,keterangan,tanggal_post) values 
								('$judul','$keterangan','$tgl')";
			$res=mysql_query($sql) or die (mysql_error());
}
if ($sql){

	?>
    <script>document.location='admin.php?page=popular';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>