<h3>
	Kritik dan Saran
</h3>
<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from testimoni where id_testimoni='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<table width="848" height="71" border="0" align="left">
	<tr>
    	<td><b>Tentang</b>
        </td>
        <td>:
        </td>
        <td colspan="4">
        	<?php echo $data['tentang'] ?>
        </td>
    </tr>
  <tr>
    <td width="74" height="21">From</td>
    <td width="9">:</td>
    <td width="146"><?php echo $data['nama'] ?></td>
    <td width="136" rowspan="3">&nbsp;</td>
    <td width="178">Email</td>
    <td width="28">:</td>
    <td width="247"><?php echo $data['email'] ?></td>
  </tr>
  <tr>
    <td height="21">Kota</td>
    <td>:</td>
    <td><?php echo $data['kota'] ?></td>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $data['alamat'] ?></td>
  </tr>
  <tr>
    <td height="21">Date</td>
    <td>:</td>
    <td><?php echo $data['tgl_testimoni'] ?></td>
    <td>No. Tlp / Handphone</td>
    <td>:</td>
    <td><?php echo $data['tlp'] ?></td>
  </tr>
</table>
	<br/><br/><br/><br/><br/>
    	<b>Pesan</b>
    <br/><br/>
<?php echo $data['pesan'] ?>
<br/><br/>
<a href="?page=jawab&id=<?php echo $data['id_testimoni'] ?>">
<input type="button" class="btn-primary" value="Jawab Testimoni" />
	</a>
<?php $no++;}?>
<hr/>
<center>
<h3>
Jawaban
	</h3>
    	</center>
<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from jawaban where id_testimoni='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<table width="1088" height="50" border="0" align="left">
	<tr>
    <td width="28" rowspan="3"><?php echo $no; ?></td>
  </tr>
  <tr>
    <td width="134" height="21">From</td>
    <td width="17">:</td>
    <td width="748"><?php echo $data['nama_jwb'] ?></td>
    <td width="139">
    		<a href="hapusjwb.php?id=<?php echo $data['id_jwb'] ?>&amp;id_testimoni=<?php echo $data['id_testimoni'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Jawaban Testimoni Ini ?');">
    	<img src="img/Delete-icon.png" width="22" height="25">
        	</a>
    </td>
  </tr>
  <tr>
    <td height="21">Date</td>
    <td>:</td>
    <td><?php echo $data['tgl_jwb'] ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
	<br/><br/><br/>
<?php echo $data['pesan_jwb'] ?>
	<hr/>
<?php $no++;}?>