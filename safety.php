<!-- HIDDEN PANEL 
================================================== -->

<!-- HEADER
================================================== -->
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 SAFETY & QUALITY POLICY
			</p>
			
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
    <!-- MAIN CONTENT-->
	<div class="eight columns">
	    <!-- Our History-->
		<div class="panel">
        <?php
  $no=1;
  include "config/koneksi.php";
  $query=mysql_query("select * from iso");
  while($data=mysql_fetch_array($query)){  
  ?>
			<h4><?php echo $data['judul'];?> </h4>
            
		
		<p>
			 <?php
			$id_iso=$data['id_iso'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 850 ? 
			substr($keterangan, 0, 900) . ' ... <br/><br/><a href="">
			</a>' :
			$keterangan;
		?>
</p> 
<?php $no++;}?>
		<p>
			 <a href="?page=detailiso&id='.$id_iso.'"><input type="button" class="accordion" value="[Read more]" /></a>
		</p>
        </div>
		<div class="panel">
        <?php
  $no=1;
  include "config/koneksi.php";
  $query=mysql_query("select * from 5r");
  while($data=mysql_fetch_array($query)){  
  ?>
			<p><b><h4><?php echo $data['judul'];?> </h4></b>
            
            <p>
			 <?php
			$id_iso=$data['id_5r'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 850 ? 
			substr($keterangan, 0, 900) . ' ... <br/><br/><a href="">
			</a>' :
			$keterangan;
		?>
</p> 
<?php $no++;}?>
		<p>
			 <a href="?page=detail5r&id='.$id_5r.'"><input type="button" class="accordion" value="[Read more]" /></a>
		</p>
			<p class="text-right">
				<i>PT.</i>
			</p>
		</div>
		
		<br/>
		<!-- Accordion-->
        
	</div><!-- end main content-->

	<!-- SIDEBAR-->
	<div class="four columns">
		<div class="teamwrap teambox">
			<img src="images/iso.png" alt="" width="227">
			<div class="mask">
			  <h4>ISO 9001:2008</h4>
				<p>
					We Can Do IT.
			  <div class="social socialteam facebook">
						<a href="#"></a>
			  </div>
					<div class="social socialteam twitter">
						<a href="#"></a>
					</div>
					<div class="social socialteam deviantart">
						<a href="#"></a>
					</div>
					<div class="social socialteam flickr">
						<a href="#"></a>
					</div>
					<div class="social socialteam dribbble">
						<a href="#"></a>
					</div>
		  </div>
	  </div>
			<div class="teamwrap teambox">
				<img src="images/5R.png" alt="" width="258" height="80">
				<div class="mask">
				  <h2>5R</h2>
					<p>
						Ringkas, Rapi, Resik, Rawat, Rajin
				  <div class="social socialteam facebook">
							<a href="#"></a>
				  </div>
						<div class="social socialteam twitter">
							<a href="#"></a>
						</div>
						<div class="social socialteam deviantart">
							<a href="#"></a>
						</div>
						<div class="social socialteam flickr">
							<a href="#"></a>
						</div>
						<div class="social socialteam dribbble">
							<a href="#"></a>
						</div>
			  </div>
	  </div>
			<div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/5S.jpg" alt="" width="258" height="80">
					
					</div>
			</div>
	</div><!-- end sidebar -->
</div>
<div class="hr">
</div>
<!-- TWITTER
================================================== -->
<div class="tweetarea">
	<div class="tweettext">
		<div class="row">
			<div class="twelve columns">
				<div class="tweet">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FOOOTER 
================================================== -->
</div>
</body>
</html>

<script src="javascripts/foundation.min.js"></script>