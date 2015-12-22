<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from popular_post where id_popular='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<table width="516" height="96" border="0" align="left">
  <tr>
    <td width="210">Judul</td>
    <td width="14">:</td>
    <td width="270"><?php echo $data['judul'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Upload</td>
    <td>:</td>
    <td><?php echo $data['tanggal_post'] ?></td>
  </tr>
  </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="/admin/<?php echo $data['nama_file'] ?>" width="250" height="250" />
    </p>
<h3>Detail Berita</h3>
<br/>
<?php echo $data['keterangan'] ?>
<?php $no++;}?>