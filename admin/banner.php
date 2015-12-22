<link href="assets/css/dataTables.css" rel="stylesheet">
    	<style>
			td{
				text-align:center;
			}
		</style>
        
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
</head>
<body>
<fieldset>
    
<legend>List Banner
  </p>
</legend>
			<a href="?page=inputbanner">
	<input type="button" value="+ Add Banner" class="box-title" />
    	</a>
    		<br/><br/>
		<div id="container">
		  <div class="box">
            	<div class="box-content nopadding">
<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
<thead>
  <tr>
    <th width="12%"><center>
      Gambar
    </center></th>
    <th width="12%"><center>Judul Banner</center></th>
    <th width="46%"><center>Keterangan</center></th>
    <th width="30%"><center>Action</center></th>
  </tr>
  </thead>
  <tbody>
  <?php 

  $no=1;
  include"../config/koneksi.php";
  $query=mysql_query("select * from banner ORDER BY id_banner
DESC LIMIT 10");
  while($data=mysql_fetch_array($query)){  
  ?>
  <tr>
    
  	<td align="center">
	  <img class="img-responsive" src="<?php echo $data['nama_gambar'] ?>" width="250" height="250" alt="">
    </td>
    
    <td align="center">
    	<?php echo $data['judul_banner'] ?>
    </td>
    <td align="center">
    	<?php echo $data['keterangan_banner'] ?>
    </td>
    <td align="center">
    <a href="?page=detailbanner&id=<?php echo $data['id_banner'] ?>">
    <input type="button" value="View Detail" class="box" />
            </a>
        <a href="hapusbanner.php?id=<?php echo $data['id_banner'] ?>" onClick="return confirm('Apakah Anda Ingin Menghapus Banner Ini ?');">
            <input type="button" value="Delete" class="box" />
            </a>
    </td>
    </tr><?php $no++;}?>
  </tbody>
</table>

</div></div></div>
</fieldset>
	<br/><br/><br/>
</body>
</html>