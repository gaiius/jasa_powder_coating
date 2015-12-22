<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from detail_produk where id_detailproduk='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<table width="516" height="96" border="0">
  <tr>
    <td width="210">Nama Spesifikasi</td>
    <td width="14">:</td>
    <td width="270"><?php echo $data['judul_spek'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Spesifikasi</td>
    <td>:</td>
    <td><?php $ok=$data['id_produk']; echo $data['tgl_spek'] ?></td>
  </tr>
  </table>
  	<p><br/>
  	  <br/>
  <?php echo $data['detail_spek'] ?>
  <?php $no++;}?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  	<p><br/>
  	  <br/>
  	  
  	  <?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from produk where id_produk='$ok'");
  while($data=mysql_fetch_array($query)){  
  ?>
</p>
<table width="516" height="96">
  <tr>
    <td>
    		&nbsp;
    	<img src="/admin/<?php echo $data['nama_gambar'] ?>" width="250" height="250" />
    </td>
  </tr>
  </table>
<?php $no++;}?>