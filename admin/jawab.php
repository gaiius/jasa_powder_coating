<?php
	$id=$_GET['id'];
?>
<script src="../ckeditor.js"></script>
<form action="simpanjwb.php" method="post">
<table width="393" height="109" border="0" align="left">
  <tr>
    <td height="60">
        		<h3>
        	Jawab Testimoni</h3>
    </td>
  </tr>
  <tr>
    <td height="43">
    <input type="hidden" name="id_testimoni" value="<?php echo $id; ?>" readonly />
    <input type="text" name="nama_jwb" value="ADMIN MTI" readonly />
        <h5><div id="disp"></div></h5>    </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br/>
    Jawaban : 
    <br/>
    <br/>
    <textarea cols="80" id="editor1" name="pesan_jwb" rows="10"></textarea>
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