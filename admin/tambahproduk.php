

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
        	Add New Product Category
</h3>
                <hr/>
                
<form action="simpanproduk.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="1007" height="170" border="0" align="left">
	<tr>
    	<td width="203" height="45">Tipe Produk</td>
        <td width="28">:</td>
        <td width="309">
        	<select name="tipe_produk" required>
            	<option value=""></option>
            	<option>Komponet</option>
                <option>Rack</option>
                <option>Building</option>
                <option>electronik</option>
                <option>Automotif</option>
                <option>Pallet_E</option>
            </select>
        </td>
    </tr>
  	<tr>
    	<td width="203" height="45">Nama Produk</td>
        <td width="28">:</td>
        <td width="309">
        	<input type="text" name="nama_produk" required />
        </td>
    </tr>
    <tr>
  	<td height="80">Masukkan Gambar dari Folder</td>
    <td>:</td>
    <td>
    		
        <input name="nama_file" type="file" id="nama_file" size="30" />
        </td>
        <td width="449">
        
    	Keterangan Gambar :
        	<br/>
    	<input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" />
    </td>
  </tr>
    <tr>
    	<td colspan="3">
    <input type="submit" value="Simpan" />
        </td>
    </tr>
  </table>
</form>

<br/><br/><br/><br/><br/><br/><br/><br/>
<fieldset>
    
<legend>List Produk
  </p>
</legend>
		<div id="container">
		  <div class="box">
            	<div class="box-content nopadding">
<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
<thead>
  <tr>
  	<th width="4%"><center>No.</center></th>
    <th width="35%"><center>Gambar</center></th>
    <th width="33%"><center>Tipe dan Nama Produk</center></th>
    <th width="28%"><center>Action</center></th>
  </tr>
  </thead>
  <tbody>
  <?php 

  $no=1;
  include"../config/koneksi.php";
  $query=mysql_query("select * from produk");
  while($data=mysql_fetch_array($query)){  
  ?>
  <tr>
  	<td align="center"><?php echo $no; ?></td>
    <td>
    		&nbsp;
    	
		 <img class="img-responsive" src="<?php echo $data['nama_gambar'] ?>" width="250" height="250" alt="">
    </td>
    
  	<td align="center"><?php echo $data['tipe_produk'] ?> / <?php echo $data['nama_produk'] ?></td>
    
    <td align="center">
            <a href="?page=editproduk&id=<?php echo $data['id_produk'] ?>">
            <input type="button" value="Edit" class="box" />
            </a>
            <a href="hapusproduk.php?id=<?php echo $data['id_produk'] ?>" onClick="return confirm('Apakah Anda Ingin Menghapus produk Ini ?');">
            <input type="button" value="Delete" class="box" />
            </a>
    </td>
    
    </tr>
		<?php $no++;}?>
  </tbody>
</table>

</div></div></div>
</fieldset>
</body>
</html>