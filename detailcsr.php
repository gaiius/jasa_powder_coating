<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
                	Detail CSR
                </p>
		</div>
	</div>
</div>
	<br/><br/><br/>
    
    <div class="row">
	  <div class="twelve columns">
		<p class="text-center">
<?php

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from csr where id_berita='$id'");
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div></div>
</p>
		</div>
	</div>