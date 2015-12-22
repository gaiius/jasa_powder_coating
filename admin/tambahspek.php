
<script src="../ckeditor.js"></script>
<h3>
        	Tambah Spesifikasi
</h3>
                <hr/>
                
<form action="simpanspek.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="1016" height="137" border="0" align="left">
  <tr>
    <td width="187">Product</td>
    <td width="51">:</td>
    <td width="764">
    	<select name="id_produk" required>
        	<option value=""></option>
            		<?php
				  $no=1;
				  include"../config/koneksi.php";
				  $query=mysql_query("select * from produk");
				  while($data=mysql_fetch_array($query)){  
				  ?>
           <option value="<?php echo $data['id_produk'] ?>"><?php echo $data['tipe_produk'] ?> / <?php echo $data['nama_produk'] ?></option>
				  <?php $no++;}?>
        </select>
    </td>
  </tr>
  	<tr>
    	<td>Judul Spesifikasi</td>
        <td>:</td>
        <td>
        	<input type="text" name="judul_spek" required />
        </td>
    </tr>
  </table>
  	<br/><br/><br/><br/><br/><br/><br/>
    	<hr/>
    Detail Spesifikasi :
    <br/><br/>
    <textarea cols="80" id="editor1" name="keterangan_spek" rows="10"></textarea>
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