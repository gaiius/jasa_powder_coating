<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from sejarah where id_sejarah='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<table width="516" height="96" border="0" align="left">
  <tr>
    <td width="210">Judul</td>
    <td width="14">:</td>
    <td width="270"><?php echo $data['judul'] ?></td>
  </tr>
  
  </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
   
<h3>Detail Sejarah</h3>
<br/>
<?php echo $data['keterangan'] ?>
<?php $no++;}?>