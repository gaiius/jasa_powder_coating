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
    
    
    <div class="four columns" align="center">
 <?php 

  $no=1;
  include "config/koneksi.php";
  $produk=$_GET['produk'];
  $query=mysql_query("select * from produk where id_produk='$produk'");
  while($data=mysql_fetch_array($query)){  
  ?>
    
   <div class="seven columns">
        <div>
			<img src="/admin/<?php echo $data['nama_gambar']; $njing=$data['nama_produk']; ?>" width="250%" height="130%" />
        </div>
         <?php $no++;}?>
     </div>
</div>
 
 <?php 

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from detail_produk where id_detailproduk='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
 
<div id="table" align="left">

</p>
  
 
<div><?php $ok=$data['id_produk']; ?> </div> 
<div> <?php $kk=$data['detail_spek'];
		echo $kk; ?></div>

</div>



</div>


</div>
</div>
 <?php $no++;}?>

 </p>
 
 </div>
 </div>
 
 <script src="javascripts/foundation.min.js"></script>