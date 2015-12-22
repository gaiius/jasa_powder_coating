
<!-- HIDDEN PANEL 
================================================== -->

<!-- HEADER
================================================== -->

<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="eight columns">
			<p class="bread leftalign">
				 
			</p>
		</div>
		<div class="four columns">
			<div class="row collapse">
				<div class="ten mobile-three columns">
					
				</div>
				<div class="two mobile-one columns">
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns noleftmargin">
	     <!-- MAIN CONTENT -->
		<div class="six columns">
        <?php
            include "config/koneksi.php";
			$id=$_GET['id'];
            $result = mysql_query("select * from corporate where id_corporate='$id'") 
			or die(mysql_error());
			while($data = mysql_fetch_array($result)){
            
                ?>
			<div class="sectiontitle">
				<h4><?php echo $data['judul'] ?></h4>
			</div>
			<p>
				<img src="/admin/<?php echo $data['nama_file'] ?>" class="blogimage breadcrumbs" alt="">
			</p>
			<p>
				 
			</p>
             
			<br/>			
				
			
		</div>
		 <!-- SIDEBAR -->
		<div class="six columns">
			
			
			<p>
				<?php echo $data['keterangan'] ?>
			</p>
            <?php } ?>
			
			
		</div>
	</div>
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

<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>

</body>
</html>