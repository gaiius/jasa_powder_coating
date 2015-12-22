<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from visi_misi where id_visimisi='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<script src="../ckeditor.js"></script>
<form action="simpaneditvisimisi.php" method="post">
<table width="393" height="137" border="0" align="left">
  <tr>
    <td height="60" colspan="3">
        		<h3>
        	Edit Visi Misi
            	</h3>
    </td>
  </tr>
  <input type="hidden" name="id_visimisi" value="<?php echo $data['id_visimisi'] ?>" required />
  <tr>
    <td width="159">Judul</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="judul" value="<?php echo $data['judul'] ?>" required />
        <h5><div id="disp"></div></h5>
    </td>
  </tr>
  <input type="hidden" name="nama_file" value="<?php echo $data['nama_file'] ?>" required />
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br/>
    Keterangan : 
    <br/><br/>
    <textarea cols="80" id="editor1" name="keterangan" rows="10"><?php echo $data['keterangan'] ?></textarea>
  </p>
  <p>    <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'editor1' );

		</script>
    <input type="submit" value="Simpan" />
  </p>
</form>
<?php $no++;}?>