
<!-- HIDDEN PANEL 
================================================== -->

<!-- HEADER
================================================== -->

<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
        <?php

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from kaizen where id_kaizen='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
            <p class="text-center"><marquee>
            	<?php echo $data['judul'] ?></marquee>
            </p>
            
            <?php $no++;}?>
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
		<div class="twelve columns">
         <?php

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from kaizen where id_kaizen='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
			<div class="sectiontitle">
				<h4><?php echo $data['judul'] ?></h4>
			</div>
			<p>
				<img src="/admin/<?php echo $data['nama_file'] ?>" width="500" height="500" alt="">
			</p>
			<p>
				 
			</p>
             
			<br/>			
				
			
		</div>
		 <!-- SIDEBAR -->
		<div class="twelve columns">
			
			
			<p>
				<?php echo $data['keterangan'] ?>
			</p>
            <?php $no++;}?>
			
			
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