<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from sejarah where id_sejarah='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<script src="../ckeditor.js"></script>
<form action="simpaneditsejarah.php" method="post">

<table width="643" height="137" border="0" align="left">
        <tr>
            <td height="60" colspan="3">
        <center>
            <h3>
                Edit Sejarah
            </h3>
            <p>&nbsp;</p>
        </center>
        </td>
        </tr>
        <input type="hidden" name="id_sejarah" value="<?php echo $data['id_sejarah'] ?>" required />
        <tr>
            <td width="159">Judul</td>
            <td width="33">:</td>
            <td width="179">
                <input type="text" name="judul" value="<?php echo $data['judul'] ?>" required />
                <h5><div id="disp"></div></h5>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><br/>
    <tr>
        <td width="159">Keterangan Sejarah </td>
        <td width="159">:</td>
    <br/><br/>
    <td width="179"><textarea cols="100" id="editor1" name="keterangan" rows="20"><?php echo $data['keterangan'] ?></textarea></td>
</p>
<p>    <script>

    // This call can be placed at any point after the
    // <textarea>, or inside a <head><script> in a
    // window.onload event handler.

    // Replace the <textarea id="editor"> with an CKEditor
    // instance, using default configurations.

    CKEDITOR.replace('editor1');

    </script>
    <input type="submit" value="Simpan" />
</p>
</form>
<?php $no++;}?>