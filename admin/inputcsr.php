<script src="../ckeditor.js"></script>
<form action="simpancsr.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="643" height="137" border="0" align="left">
  <tr>
    <td height="60" colspan="3">
    	<center>
        		<h3>
        	Tambah CSR
            	</h3>
        		<p>&nbsp;</p>
        </center>
    </td>
  </tr>
  <tr>
    <td width="159">Judul CSR</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="judul" required />
        <h5><div id="disp"></div></h5>
    </td>
  </tr>
  <tr>
    <td width="159">Tahun CSR</td>
    <td width="33">:</td>
    <td width="179">
    	<select name="tahun">
    <?php
    for ($i=1992;$i<=2016;$i++)
    {$tahun=$i;
    echo "<option value='$tahun'>$tahun</option>";
    }    
    ?>
    </select>
    </td>
  </tr>
  <tr>
  	<td>Masukkan Gambar dari Folder</td>
    <td>:</td>
    <td>
    	Keterangan Gambar :
        	<br/>
    	<input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" />
        <input name="nama_file" type="file" id="nama_file" size="30" />
    </td>
  </tr>
  </table>
  <br/>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br/>
   <p><br/>
    Keterangan CSR : 
    <br/><br/>
    <textarea cols="80" id="editor1" name="keterangan" rows="10"></textarea>
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