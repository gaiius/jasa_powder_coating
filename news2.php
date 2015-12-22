<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]--><head>
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

<!-- HIDDEN PANEL 
================================================== -->

<!-- HEADER
================================================== -->

<div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
        <?php
        include "config/koneksi.php";
        $query = mysql_query("select * from banner2");
        while ($data = mysql_fetch_array($query)) {
            ?>
            <li>
               
				  <img class="img-responsive" src="admin/<?php echo $data['nama_gambar'] ?>" width="250" height="250" alt="">
				
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
        $query = mysql_query("select * from banner2");
        while ($data = mysql_fetch_array($query)) {
            ?>
            <li><a href="#">Slide 1</a><img src="admin/<?php echo $data['nama_gambar'] ?>" class="slideshowthumb" alt="thumb01"/></li>
			
        <?php } ?>
    </ul>
</div>
<div class="minipause">
</div>
<div class="hr">
</div>


<!-- SUBHEADER
================================================== -->


<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="text-center">
            	NEWS
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
			     
  <?php
  $no=1;
  include "config/koneksi.php";
  $query=mysql_query("select * from berita");
  while($data=mysql_fetch_array($query)){  
  ?>
			<div class="six columns">
				<div class="boxblog">
					<h5></h5>
                    <p class="small date">
					<?php echo $data['judul_gambar'];?>
                    </p>
					<p class="small date">
						<?php echo $data['tanggal_berita'];?> <span class="" data-width="90" ><img src="images/comments.png" alt=""></span>
					</p>
					<p>
						<img src="admin/<?php echo $data['nama_file'] ?>" alt="" class="thumb" /> 
						 
                        <?php
			$id_berita=$data['id_berita'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 150 ? 
			substr($keterangan, 0, 250) . ' ... <br/><br/><a href="?page=detailnews2&id='.$id_berita.'" class="small continue">
			Continue reading</a>' :
			$keterangan;
		?>
					</p>
					
				</div>
			</div>
            <?php $no++;}?>
           <div class="hr">
</div> 

   </div>
		<!-- SIDEBAR -->
		<div class="four columns">
        
			<h6 class="sidebartitle">POPULAR POSTS</h6>
            <?php
  $no=1;
  include "config/koneksi.php";
  $query=mysql_query("select * from popular_post");
  while($data=mysql_fetch_array($query)){  
  ?>
			<p>
				<?php echo $data['tanggal_post'];?>
			</p>
			<p>
				<?php
			$id_popular=$data['id_popular'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 150 ? 
			substr($keterangan, 0, 90) . ' ... <br/><br/><a href="?page=detailpost&id='.$id_popular.'" class="small continue">
			Continue reading</a>' :
			$keterangan;
		?>
			</p><hr/>
            <?php $no++;}?>
					</div>
	</div>
    
</div>

<div class="hr">
</div>

<!-- TWITTER
================================================== -->


<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>

<script src="javascripts/foundation.min.js"></script>
<!-- FOOOTER 
================================================== -->

<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
