
<script src="../ckeditor.js"></script>
<h3>
        	Edit Spesifikasi
</h3>
                <hr/>
                
<form action="simpaneditspek.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from detail_produk where id_detailproduk='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
  <input type="hidden" name="id_detailproduk" value="<?php echo $data['id_detailproduk'] ?>" required />

<table width="1016" height="137" border="0" align="left">
  
  	<tr>
    	<td>Judul Spesifikasi</td>
        <td>:</td>
        <td>
        	<input type="text" name="judul_spek" value="<?php echo $data['judul_spek'] ?>" required />
        </td>
    </tr>
     <input type="hidden" name="tgl_spek" value="<?php echo $data['tgl_spek'] ?>" required />
  </table>
  	<br/><br/><br/><br/><br/><br/><br/>
    	<hr/>
    Detail Spesifikasi :
    <br/><br/>
    <textarea cols="80" id="editor1" name="detail_spek" rows="10"><?php echo $data['detail_spek'] ?></textarea>
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
  <?php $no++;}?>
</form>