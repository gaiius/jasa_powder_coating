<?php
$namafolder="foto/"; //tempat menyimpan file
	include "../config/koneksi.php";
	if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_foto=$_FILES['nama_file']['type'];
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];
	$tgl=date('Y-m-d');
	
	if($jenis_foto=="image/jpeg" || $jenis_foto=="image/jpg" || $jenis_foto=="image/gif" || $jenis_foto=="image/x-png")
	{			
		$foto = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $foto))
			 {
			$sql="insert into visi_misi(judul,keterangan,nama_file,tanggal) values 
								('$judul','$keterangan','$foto','$tgl')";
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
			$sql="insert into visi_misi(judul,keterangan,tanggal) values 
								('$judul','$keterangan','$tgl')";
			$res=mysql_query($sql) or die (mysql_error());
}
if ($sql){

	?>
    <script>document.location='admin.php?page=visimisi';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>