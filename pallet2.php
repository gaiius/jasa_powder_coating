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
<title>Studio Francesca - Premium Theme by WowThemes.net</title>
<!-- Included CSS Files-->
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/prettyphoto.css"><!-- for gallery -->
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
			<p>
				PALLET
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<!-- CATEGORIES-->
		<section id="options" class="clearfix">
		<ul id="filters" class="option-set clearfix" data-option-key="filter">
			<li><a href="#filter" data-option-value="*" class="portofoliobutton selected">Show all</a></li>
			<li><a href="#filter" data-option-value=".nature" class="portofoliobutton">Standard Pallet</a></li>
			<li><a href="#filter" data-option-value=".trains" class="portofoliobutton">Part & Spec</a></li>
			<li><a href="#filter" data-option-value=".castles" class="portofoliobutton">Customize Equipment</a></li>
            <li><a href="#filter" data-option-value=".hair" class="portofoliobutton">Packing Case</a></li>
            <li><a href="#filter" data-option-value=".cream" class="portofoliobutton">Rack Pallet</a></li>
		</ul>
		</section>
	</div>
</div>
<div class="row">
	<div id="portofolio">
    <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where tipe_produk='Rack'");
									  while($data=mysql_fetch_array($query)){  
								?>
		<!-- Project 1 category trains-->
		<div class="three columns category trains">
			<h5><?php echo $data['nama_produk'] ?></h5>
			<p>
				 <?php echo $data['tipe_produk'] ?>
			</p>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay fouroverlay">
					
					<div class="inner fourdetail">
                    
   <a class="projectdetail" href="?page=detailproduk2&id=<?php echo $data['id_produk'] ?>">+ Details &nbsp; <?php echo $data['nama_produk'] ?></a>
						
					</div>
				</div>
				<img src="admin/<?php echo $data['nama_gambar'] ?>" alt="">
			</div>
		</div>
        <?php $no++;}?>
        
		<!-- Project 2 category castles-->
          <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where tipe_produk='Pallet_B'");
									  while($data=mysql_fetch_array($query)){  
								?>
        
		<div class="three columns category castles">
			<h5><?php echo $data['nama_produk'] ?></h5>
			<p>
				 <?php echo $data['tipe_produk'] ?>
			</p>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay fouroverlay">
					
					<div class="inner fourdetail">
						<a class="projectdetail" href="?page=detailproduk2&id=<?php echo $data['id_produk'] ?>">+ Details &nbsp; <?php echo $data['nama_produk'] ?></a>
					</div>
				</div>
                <img src="/admin/<?php echo $data['nama_gambar'] ?>" class="fourimage" alt="">
				
			</div>
		</div>
        <?php $no++;}?>
        
       
		<!-- Project 3 nature-->
        <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where tipe_produk='Pallet_C'");
									  while($data=mysql_fetch_array($query)){  
								?>
		<div class="three columns category nature">
			<h5><?php echo $data['nama_produk'] ?></h5>
			<p>
				 <?php echo $data['tipe_produk'] ?>
			</p>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay fouroverlay">
					
					<div class="inner fourdetail">
						<a class="projectdetail" href="?page=detailproduk2&id=<?php echo $data['id_produk'] ?>">+ Details &nbsp; <?php echo $data['nama_produk'] ?></a>
					</div>
				</div>
				<img src="/admin/<?php echo $data['nama_gambar'] ?>" class="fourimage" alt="">
			</div>
		</div>
         <?php $no++;}?>
        
        
		<!-- Project 4-->
        <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where tipe_produk='Pallet_D'");
									  while($data=mysql_fetch_array($query)){  
								?>
        
        
		<div class="three columns category hair">
			<h5><?php echo $data['nama_produk'] ?></h5>
			<p>
				 <?php echo $data['tipe_produk'] ?>
			</p>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay fouroverlay">
					
					<div class="inner fourdetail">
	<a class="projectdetail" href="?page=detailproduk2&id=<?php echo $data['id_produk'] ?>">+ Details &nbsp; <?php echo $data['nama_produk'] ?></a>
					</div>
				</div>
				<img src="/admin/<?php echo $data['nama_gambar'] ?>" class="fourimage" alt="">
			</div>
		</div>
     <?php $no++;}?>    
        
        
		<!-- Project 5-->
        
        <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where tipe_produk='Pallet_E'");
									  while($data=mysql_fetch_array($query)){  
								?>
        
		<div class="three columns category cream">
			<h5><?php echo $data['nama_produk'] ?></h5>
			<p>
				 <?php echo $data['tipe_produk'] ?>
			</p>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay fouroverlay">
					
					<div class="inner fourdetail">
	<a class="projectdetail" href="?page=detailproduk2&id=<?php echo $data['id_produk'] ?>">+ Details &nbsp; <?php echo $data['nama_produk'] ?></a>
					</div>
				</div>
				<img src="/admin/<?php echo $data['nama_gambar'] ?>" class="fourimage" alt="">
			</div>
		</div>
          <?php $no++;}?>  
        
		<!-- Project 6-->
		
		<!-- Project 7-->
		
		<!-- Project 8-->
		
	</div>
</div>
 
<div class="hr">
</div>
<!-- TWITTER
================================================== -->
<div class="tweetarea">
	<div class="tweettext">
		
	</div>
</div>
<!-- FOOOTER 
================================================== -->

<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->

<script src="javascripts/foundation.min.js"></script>



<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>
<script src="javascripts/jquery.isotope.min.js"></script>
<script src="javascripts/jquery.prettyPhoto.js"></script>
<script src="javascripts/custom.js"></script>
</body>
</html>