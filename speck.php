<style type="text/css" media="screen">
#table{width:8500px; height:700px;}
div span{display:inline-block;}
div .header{background:#95AABC;font-weight:bold;}
.kolom{width:90px;padding:2px;margin:2px;}
.baris{border-bottom:1px solid #000;cursor:pointer;}
.baris:hover{background:#fff59f;}
.ganjil{background:#ddd;}
.genap{backgound:#eee;}
</style>


 <div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
                	Detail Spesification
                </p>
		</div>
	</div>
</div>
	<br/><br/><br/>


    
<table bordercolor="#FFFFFF" width="960" height="479" align="center">
  <?php 

  $no=1;
  include "config/koneksi.php";
  $produk=$_GET['produk'];
  $query=mysql_query("select * from produk where id_produk='$produk'");
  while($data=mysql_fetch_array($query)){  
  ?>
  <tr>
    <td width="523" rowspan="2"><img src="/admin/<?php echo $data['nama_gambar']; $njing=$data['nama_produk']; ?>" width="108%" height="50%" /></td>
     <?php $no++;}?>
    <td width="41" height="21"></td>
  <?php 

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from detail_produk where id_detailproduk='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
    <td width="374">Detail Spesification <?php echo $njing; ?> , 
  		<?php
  			$kk=$data['judul_spek'];
			echo $kk; ?>
     </td>
  </tr>
  
  <tr>
  	<td bgcolor="#FFFFFF"></td>
  	<td bgcolor="#FFFFFF"><?php $kk=$data['detail_spek'];
		echo $kk; ?></td>
   </tr>
</table>
 <?php $no++;}?>

