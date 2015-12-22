<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8"/>
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title></title>
<!-- Included CSS Files-->
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/blog.css"><!-- blog stylesheet -->
<link rel="stylesheet" href="stylesheets/skins/teal.css"><!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->    
</head>
<body>
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
				 CORPORATE
			</p>
			
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
		<div class="eight columns noleftmargin">
		
			
			<h4><marquee><b><em>Corporate Indentity</em></b></marquee></h4>
			<div class="dots blogdots">
			</div>
			<p>
				 <h5><b>Mission</b></h5> 
                 We Shall :
			</p>
			<p>
				 1. &nbsp; Contribute to customers and societies through supply of cargo-transportation 
							and material handling &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;equipment. <br/>
                 2. &nbsp; Pursue happiness for all employees and family.<br/>
                 3. &nbsp; Continue pursuing the best quality, services of our wing box brand “Quick Roof”.<br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  And it is our pride to be trusted by all stakeholders through achieving our corporate mission

			</p>
            <br/>
			<p>
				<h5><b>Management Policy</b></h5> 
                We Shall :
			</p>
            <p>
				 1. &nbsp; Stay hungry for innovation by TPS related Kaizen approach. <br/>
                 2. &nbsp; Focus the trend and set our sail to catch a big wind.<br/>
                 3. &nbsp; Execute with fanatical discipline.<br/>
                 4. &nbsp; Dominate, saturated and do what it takes to be a major player.<br/>
                 5. &nbsp; Surround ourselves with our stakeholders and build a culture driven by value.<br/>
                 
			</p>
            <br/>
			<p>
				<h5><b>Principle Attitude</b></h5> 
                We Shall :
			</p>
            <p>
				 1. &nbsp; Comply with public and company discipline to keep social order. <br/>
                 2. &nbsp; Dedicate ourselves to safety operation and high quality performance.<br/>
                 3. &nbsp; Place integrity, passion, humility and team-work.<br/>
                 4. &nbsp; Judged by job facts and actual existing.<br/>
                
                 
			</p>
            
            
			<p>
				 ... <a href="index.php?page=indentity2&id=1" class="saymore">Read more</a>
			</p>
			<br/>
            
            
			
		</div>
		<!-- SIDEBAR -->
		<div class="four columns">
        	
			<h6 class="sidebartitle">Kaizen Activities</h6>
            <?php
			$no=1;
        include "config/koneksi.php";
        $query = mysql_query("select * from kaizen");
        while ($data = mysql_fetch_array($query)) {
            ?>
			<div class="">
				  <img class="img-responsive" src="admin/<?php echo $data['nama_file'] ?>" width="250" height="250" alt="">
			</div>
			<p>
				 <?php
			$id_kaizen=$data['id_kaizen'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 50 ? 
			substr($keterangan, 0, 120) . ' ... <br/><br/><a href="?page=kaizen&id='.$id_kaizen.'" class="small continue">
			Continue reading</a>' :
			$keterangan;
		?>
			</p>
              <?php $no++;}?>
			
			<br class="clear"/>
            
            
            <h6 class="sidebartitle">Social Activities</h6>
            <?php
			$no=1;
        include "config/koneksi.php";
        $query = mysql_query("select * from social");
        while ($data = mysql_fetch_array($query)) {
            ?>
			<div class="">
			  <img class="img-responsive" src="admin/<?php echo $data['nama_file'] ?>" width="250" height="250" alt="">
			</div>
			<p> 
            	<?php
			$id_social=$data['id_social'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 50 ? 
			substr($keterangan, 0, 120) . ' ... <br/><br/><a href="?page=social&id='.$id_social.'" class="small continue">
			Continue reading</a>' :
			$keterangan;
		?>
            
				 
			</p>
               <?php $no++;}?>
			
			<br class="clear"/>
            
			
			<br/><br/>
			
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
<script src="javascripts/jquery.tweet.js"></script>

</body>
</html>