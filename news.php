
<style>
	#berita {
		font-size:15px;
	}
	table {
		margin-left:20px;
	}
	table img {   
		padding:10px; border-radius:20px; 
		-moz-box-shadow: -5px -5px 5px 0px #888;
-webkit-box-shadow: -5px -5px 5px 0px #888;
box-shadow: -5px -5px 10px 0px #888;
		}
	table #qq {   
		padding:25px;   background-color:#FFF;   border-radius:20px; 
		-moz-box-shadow: -5px -5px 5px 0px #888;
-webkit-box-shadow: -5px -5px 5px 0px #888;
box-shadow: -5px -5px 0px 2px #888;
		}
</style>

<link href="assets/css/dataTables.css" rel="stylesheet">
        <script src="media/js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
	$(document).ready( function () {
				$('#dt-example').dataTable( {
					 "sPaginationType": "full_numbers",
					"sDom": 'T<"clear">lfrtip',
					"oTableTools": {
						"sSwfPath": "/release-datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
					}
				} );
			} );
		</script>
        
        
        <div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 Update News
			</p>
		</div>
	</div>
</div>
<div class="row">
		<div class="twelve columns">
			<p class="text-center">
            <br/>
            <h4>
            	Latest News
            </h4>
            <hr/>
            <br/>
        <table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
<thead>
  <tr>
  	<th width="4%">&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  	<td align="center">
<?php

  $no=1;
  include "config/koneksi.php";
  $query=mysql_query("select * from berita");
  while($data=mysql_fetch_array($query)){  
  ?>
  	
    <table width="798" height="100" border="0" align="center" id="qq">
  <tr>
    <td width="200" height="38">&nbsp;<center><?php echo $data['judul_gambar'];?></center></td>
    <td width="45" rowspan="3">&nbsp;</td>
    <td width="952">&nbsp;<b><?php echo $data['judul'];?></b></td>
  </tr>
  <tr>
    <td rowspan="2">
             	<img src="/admin/<?php echo $data['nama_file'] ?>" width="242%" height="17%" align="right" />
    </td>
  </tr>
  <tr>
    <td height="55">
    		&nbsp;<div id="berita">
    	<?php
			$id_berita=$data['id_berita'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 250 ? 
			substr($keterangan, 0, 225) . ' ... <br/><br/><a href="?page=detailnews&id='.$id_berita.'"><input type="button" class="accordion" value="[Read more]" /></a>' : 
			$keterangan;
		?>
        	</div>
    </td>
  </tr>
</table>
			<br/>
      <?php $no++;}?>

&nbsp;</td>
    
    </tr>
  </tbody>
</table>

</p>
		</div>
	</div>
    
<script src="javascripts/foundation.min.js"></script>