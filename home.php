
<div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
        <?php
        include "config/koneksi.php";
        $query = mysql_query("select * from banner");
        while ($data = mysql_fetch_array($query)) {
            ?>
            <li>
				  <img class="img-responsive" src="admin/<?php echo $data['nama_gambar'] ?>" width="190" class="responsiveslide" alt="image01">
                <div class="ei-title">
                    <h2><?php echo $data['judul_banner'] ?></h2>
                </div>
            </li>

        <?php } ?>
    </ul>
    <!-- slider-thumbs -->
    <ul class="ei-slider-thumbs">
        <li class="ei-slider-element">Current</li>

        <?php
        include "config/koneksi.php";
        $query = mysql_query("select * from banner");
        while ($data = mysql_fetch_array($query)) {
            ?>
            <li><a href="#">Slide 1</a><img src="/admin/<?php echo $data['nama_gambar'] ?>" class="slideshowthumb" alt="thumb01"/></li>
        <?php } ?>
    </ul>
</div>
<div class="minipause">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="text-center">
            </p>
        </div>
    </div>
</div>

<!-- CLIENTS 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<div class="centersectiontitle">
			<h4>SUPERIOR PRODUCT</h4>
		</div>
	</div>
	<div class="twelve columns">
		<div class="image_carousel fitcarousel">
		<div id="foo2">
				<img src="admin/gambar/1.jpg" alt="" width="140" height="140"/>
				<img src="admin/gambar/02.jpg" alt="" width="140" height="140"/>
				<img src="admin/gambar/05.jpg" alt="" width="140" height="140"/>
				<img src="admin/gambar/06.jpg" alt="" width="140" height="140"/>
				<img src="admin/gambar/ash.png" alt="" width="140" height="140"/>
				<img src="admin/gambar/caster1.jpg" alt="" width="140" height="140"/>
				<img src="admin/gambar/caster2.jpg" alt="" width="140" height="140"/>
				<img src="admin/gambar/palleta.jpg" alt="" width="140" height="140"/>
			</div>
			<div class="clearfix">
			</div>
			<a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
			<a class="next" id="foo2_next" href="#"><span>next</span></a>
		</div>
	</div>
</div>


<!-- ANIMATED COLUMNS
================================================== -->
<!---<div class="row">
	<div class="twelve columns">
		<ul class="ca-menu">
			<li>
			<a href="#">
            <span><img src="/admin/gambar/mixer2.jpg" width="220" height="110"/></span>
			<div class="ca-content">
            	<h2 class="ca-main"><br/></h2><br/>
				<h3 class="ca-sub">Buffalo Concrete Mixer</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="#">
			<span><img src="/admin/gambar/qr5a.jpg" width="220" height="110"/></span>
			<div class="ca-content">
				<h2 class="ca-main"><br/></h2><br/>
				<h3 class="ca-sub">Quick Roof 5</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="#">
			<span><img src="/admin/gambar/QR-2-1050.jpg" width="220" height="110"/></span>
			<div class="ca-content">
				<h2 class="ca-main"><br/></h2><br/>
				<h3 class="ca-sub">Quick Roof 2</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="#">
			<span><img src="/admin/gambar/QR-3-1050.jpg" width="220" height="110"/></span>
			<div class="ca-content">
				<h2 class="ca-main"><br/></h2><br/>
				<h3 class="ca-sub">Quick Roof 3</h3>
			</div>
			</a>
			</li>
		</ul>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="row">
	<div class="twelve columns">
		<div class="centersectiontitle">
			<h4>LATEST NEWS</h4>
		</div>
	</div>
    <?php
$per_hal=2;
$jumlah_record=mysql_query("SELECT COUNT(*) from berita");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$mulai = ($page - 1) * $per_hal;
echo "Jumlah record :".$jum."<br/>";
echo "Jumlah halaman :".$halaman."<br/>";
  $no=1;
  include "config/koneksi.php";
  $jumlah_record=mysql_query("select * from berita limit $mulai,$per_hal");
  while($data=mysql_fetch_array($jumlah_record)){  
  ?>
  <table>
	<div class="six columns">
		<h5><?php echo $data['judul'];?></h5>
		<p>
			
		</p>
        <?php
			$id_berita=$data['id_berita'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 200 ? 
			substr($keterangan, 0, 400) . ' ... <br/><br/><a href="?page=detailnews2&id='.$id_berita.'"><input type="button" class="readmore" value="[Read more]" /></a>' : 
			$keterangan;
		?>
		
	</div>
    <?php $no++;}?>
	</table>
	<div class="six columns">
		
	</div>
</div>
<center><?php 
for($x=1;$x<=$halaman;$x++){
?>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?home"><?php echo $x ?></a>
<?php
}?></center>
	
<div class="hr">
</div>
<!-- TESTIMONIALS
================================================== -->

		<!--end testimonials-->
	</div>
</div>

<script src="javascripts/foundation.min.js"></script>
