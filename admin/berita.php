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
    
<legend>Data Berita
  </p>
</legend>
		<a href="?page=inputberita">
	<input type="button" value="+ Add News" class="box-title" />
    	</a>
    		<br/><br/>
		<div id="container">
		  <div class="box">
            	<div class="box-content nopadding">
<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
<thead>
  <tr>
  	<th width="4%"><center>No.</center></th>
    <th width="21%"><center>
      Judul Berita
    </center></th>
    <th width="16%"><center>Tgl Upload</center></th>
    <th width="16%"><center>Action</center></th>
  </tr>
  </thead>
  <tbody>
  <?php 

  $no=1;
  include"../config/koneksi.php";
  $query=mysql_query("select * from berita");
  while($data=mysql_fetch_array($query)){  
  ?>
  <tr>
  	<td align="center"><?php echo $no; ?></td>
    
  	<td align="center"><?php echo $data['judul'] ?></td>
    
    <td align="center"><?php echo $data['tanggal_berita'] ?></td>
    
    <td align="center">
			<a href="?page=detailberita&id=<?php echo $data['id_berita'] ?>">
            <input type="button" value="View Detail" class="box" />
            </a>
            ---
            <a href="?page=editberita&id=<?php echo $data['id_berita'] ?>">
            <input type="button" value="Edit" class="box" />
            </a>
            <a href="hapusberita.php?id=<?php echo $data['id_berita'] ?>&amp;id_testimoni=<?php echo $data['id_testimoni'] ?>" onClick="return confirm('Apakah Anda Ingin Menghapus Berita Ini ?');">
            <input type="button" value="Delete" class="box" />
            </a>
    </td>
    
    </tr><?php $no++;}?>
  </tbody>
</table>

</div></div></div>
</fieldset>
</body>
</html>