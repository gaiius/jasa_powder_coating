<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 Contact Us
			</p>
		</div>
	</div>
</div>
	<div class="row">
	  <div class="twelve columns">
		<p class="text-center">


<table width="971" height="391" border="0" align="center">
  <tr>
    <td width="499" rowspan="400"><iframe width="450" height="400" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="http://maps.google.com/?t=h&amp;ie=UTF8&amp;ll=-6.192321,106.458882&amp;spn=0.00512,0.006866&amp;z=17&amp;output=embed"></iframe>
    <p><small><a href="http://maps.google.com/?t=h&amp;ie=UTF8&amp;ll=-6.192321,106.458882&amp;spn=0.00512,0.006866&amp;z=17&amp;source=embed" class="a" style="color:#0000FF;text-align:left">View Larger Map</a></small></p></td>
    <td height="122"><span class="style5"><span class="style6">Head Office : </span><br /><br/>
Jl. RAYA SERANG KM 24, BALARAJA - TANGERANG
BANTEN - INDONESIA  15610 
Phone : +62 21 5951624 / Fax: +62 21 5951623 
www.mitratoyotaka.co.id  
75 x 100 x 6mm SHS </span></td>
  </tr>
  <tr>
    <td width="389" height="221" align="left" valign="top"><span class="style5"><span class="style6">Display Area at Karawang Branch : </span><br />
Jl. Raya Klari Km. 10
Dsn. KLAPA NUNGGAL, Ds.  GINTUNG KERTA, Kec. KLARI, 
Kab. KARAWANG, JAWA BARAT - INDONESIA </span></td>
  </tr>
</table>

  </div></div>
<style>
	#ok {
		margin-left:50px;
	}
	#wow {
		margin-left:50px;
		font-size:14px;
	}
	#jawab {
		font-color:#000000;
	}
	

#table{width:550px; height:100px;}
div span{display:inline-block;}
div .header{background:#95AABC;font-weight:bold;}
.kolom{width:90px;padding:2px;margin:2px;}
.baris{border-bottom:1px solid #000;cursor:pointer;}
.baris:hover{background:#fff59f;}
.ganjil{background:#ddd;}
.genap{backgound:#eee;}

</style>
<div class="row">
	<div class="twelve columns">
		<div class="centersectiontitle">
			<h4>Sales Contact</h4>
		</div>
	</div>
	<div class="four columns">
    <?php
		$no=1;
  		include "config/koneksi.php";
  		$query=mysql_query("select * from sales");
  		while($data=mysql_fetch_array($query)){  
  	?>
    
		<div id="table" align="left">
        <div>
			<?php echo $data['nama_sales'];?>
        </div>
        <div>
			<?php echo $data['alamat'];?>
        </div>
        <div>
			<?php echo $data['no_tlp'];?>
        </div>
        <div>
			<?php echo $data['email'];?>
        </div>
	</div></div>
	  <?php $no++;}?>

<div class="row">
	<div class="twelve columns">
		<div class="centersectiontitle">
			<h4>Kritik & Saran</h4>
		</div>
	</div>
	<br/><br/><br/>
    <form action="simpankritik.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="861" height="385" border="0" align="left" id="ok">
  <tr>
    <td width="83">Tentang</td>
    <td width="26">:</td>
    <td width="255"><input type="text" name="tentang" required="required" /></td>
    <td width="13" rowspan="5">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" required="required"  /></td>
    <td width="225">Email</td>
    <td width="18">:</td>
    <td width="211"><input type="text" name="email" required="required"  /></td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>:</td>
    <td><input type="text" name="kota" required="required"  /></td>
    <td>No. Tlp / Handphone</td>
    <td>:</td>
    <td><input type="number" name="tlp" required="required"  /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>
    	<textarea name="alamat" required="required" ></textarea>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pesan</td>
    <td>:</td>
    <td colspan="3">
    	<textarea name="pesan" style="width:500px; height:200px;" required="required" ></textarea>
    </td>
    </tr>
     <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    	<input type="submit" value="Kirim" />
    </td>
    </tr>
</table>
</form>

 
  </p>
		</div>
	</div>
    
    <script src="javascripts/foundation.min.js"></script>