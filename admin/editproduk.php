

<link href="assets/css/dataTables.css" rel="stylesheet">
        
        <script src="../media/js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="../media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
	$(document).ready( function () {
				$('#dt-example').dataTable( {
					 "sPaginationType": "full_numbers",
					"sDom": 'T<"clear">lfrtip',
					"oTableTools": {
						"sSwfPath": "/release-datatables/extras/TableTools/../media/swf/copy_csv_xls_pdf.swf"
					}
				} );
			} );
		</script>
        
        <script language="Javascript1.2">
<!--
function printpage() {
window.print();
}
//-->
</script>


<script src="../ckeditor.js"></script>
<h3>
        	Edit Product
</h3>
                <hr/>
                
<form action="simpaneditproduk.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

  <?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from produk where id_produk='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
  <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'] ?>" required />
  
<table width="1007" height="170" border="0" align="left">
	<tr>
    	<td width="203" height="45">Tipe Produk</td>
        <td width="28">:</td>
        <td width="309">
        	<select name="tipe_produk" required>
            	<option><?php echo $data['tipe_produk'] ?></option>
            	<option>Karoseri</option>
                <option>Pallet_A</option>
                <option>Pallet_B</option>
                <option>Pallet_C</option>
                <option>Pallet_D</option>
                <option>Pallet_E</option>
            </select>
        </td>
    </tr>
  	<tr>
    	<td width="203" height="45">Nama Produk</td>
        <td width="28">:</td>
        <td width="309">
        	<input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>" required />
        </td>
    </tr>
    <tr>
  	<td height="80">Masukkan Gambar dari Folder</td>
    <td>:</td>
    <td>
        <img src="/admin/<?php echo $data['nama_gambar'] ?>" width="250" height="250" />
        <input name="nama_gambar" type="file" id="nama_file" value="<?php echo $data['nama_gambar'] ?>" size="30" />
        </td>
        <td width="449">
        
    	Keterangan Gambar :
        	<br/>
    	<input name="judul_gambar" type="text" value="<?php echo $data['judul_gambar'] ?>" id="judul_gambar" size="30" maxlength="30" />
    </td>
  </tr>
    <tr>
    	<td colspan="3">
    <input type="submit" value="Simpan" />
        </td>
    </tr>
  </table>
  		<?php $no++;}?>
</form>
</body>
</html>