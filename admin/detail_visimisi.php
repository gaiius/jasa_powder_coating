<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from visi_misi where id_visimisi='$id'");
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
    <td><?php echo $data['tanggal'] ?></td>
  </tr>
  </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="/admin/<?php echo $data['nama_file'] ?>" width="200" height="200" /></p>
<h3>Detail Visi Misi</h3>
<br/>
<?php echo $data['keterangan'] ?>
<?php $no++;}?>