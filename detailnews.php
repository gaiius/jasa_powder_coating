<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 Detail Berita
			</p>
		</div>
	</div>
</div>
	<div class="row">
	  <div class="twelve columns">
		<p class="text-center">
        
        
        
<?php

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from berita where id_berita='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
  		<center>
        	<h3>
            	<?php echo $data['judul'] ?>
            </h3>
        </center>
<table width="1091" align="center">
	<tr>
    	<td width="645">
        &nbsp;

    <table align="left">
    <tr>
    <td width="250">
    <img src="/admin/<?php echo $data['nama_file'] ?>" width="250" height="250" align="left" />
    </td>
    <td width="32">&nbsp;</td>
    </tr>
    </table>
<?php echo $data['keterangan'] ?>
<?php $no++;}?>
</td>
</tr>
</table>

</p>
		</div>
	</div>