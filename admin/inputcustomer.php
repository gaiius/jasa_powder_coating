
<script src="../ckeditor.js"></script>
<form action="simpancustomer.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="643" height="137" border="0" align="left">
  <tr>
    <td height="60" colspan="3">
    	<center>
        		<h3>
        	Add Top Customers
            	</h3>
        		<p>&nbsp;</p>
        </center>
    </td>
  </tr>
  <tr>
    <td width="159">Judul</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="judul" required />
        <h5><div id="disp"></div></h5>
    </td>
  </tr>
  <tr>
    	<td width="203" height="45">Sales Record</td>
        <td width="28">:</td>
        <td width="309">
        	<select name="type_customer" required>
            	<option value=""></option>
                <option>Sales_Record</option>
            	<option>Top_Customer</option>
                <option>Type_Customer</option>
                <option>Chasis_Maker</option>
                <option>Our_Client</option>
            </select>
        </td>
    </tr>
  
  <br/>
  <tr>
  	<td>Masukkan Foto dari Folder</td>
    <td>:</td>
    <td>
    	Keterangan Foto:
        	<br/>
    	<input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" />
        <input name="nama_file" type="file" id="nama_file" size="30" />
       
        
    </td>
  </tr>
  </table>
 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br/>
    Keterangan : 
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