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
    
<legend>List Product
  </p>
</legend>
			<a href="?page=tambahspek">
	<input type="button" value="+ Add Spesification" class="box-title" />
    	</a>
    		<br/><br/>
		<div id="container">
		  <div class="box">
            	<div class="box-content nopadding">
<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
<thead>
  <tr>
    <th width="22%"><center>
      Nama Produk
    </center></th>
    <th width="69%"><center>Spesifikasi</center></th>
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
    
  	<td align="center">
		<b><?php $id=$data['id_produk']; echo $data['nama_produk'] ?></b>
             <br/>
     <img src="/admin/<?php echo $data['nama_gambar'] ?>" width="250" height="250" />
    </td>
    
    <td align="center">
    					
                        <table width="100%" border="1">
                        	<thead>
                        	<tr>
                            	<td bgcolor="#000000"><font color="#FFFFFF"><b>Nama Spek</b></font></td>
                                <td bgcolor="#000000"><font color="#FFFFFF"><b>Tanggal Update</b></font></td>
                                <td bgcolor="#000000"><font color="#FFFFFF"><b>Action</b></font></td>
                            </tr>
                            	</thead>
                                </table>
                                
                                <table width="100%" border="1">
                            		<?php 

										  $no=1;
										  $query2=mysql_query("select 
																produk.*,
																detail_produk.*
																from produk
																join detail_produk on produk.id_produk=detail_produk.id_produk
																where detail_produk.id_produk='$id'
															");
										  while($data2=mysql_fetch_array($query2)){  
										  ?>
                            <tr>
                            	<td width="34%">
									<?php echo $data2['judul_spek'] ?>
                                </td>
                                <td width="43%"><?php echo $data2['tgl_spek'] ?></td>
                                <td width="23%">
                                		<a href="?page=detailspek&id=<?php echo $data2['id_detailproduk'] ?>">
                                	Detail
                                    	</a> ||
                                        <a href="?page=editspek&id=<?php echo $data2['id_detailproduk'] ?>">
                                	Edit Spec
                                    	</a>||
                                        <a href="hapusspek.php?id=<?php echo $data['id_detailproduk'] ?>" onClick="return confirm('Apakah Anda Ingin Menghapus Ini ?');">
            					<input type="button" value="Delete" class="box" /></a>
                                        
                                </td>
                            </tr>
                            		<?php } ?>
                        </table>
                        
    </td>
    </tr><?php $no++;}?>
  </tbody>
</table>

</div></div></div>
</fieldset>
	<br/><br/><br/>
</body>
</html>