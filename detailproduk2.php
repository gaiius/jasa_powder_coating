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
		<div class="eight columns">
        <?php 
									$id=$_GET['id'];
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where id_produk='$id'");
									  while($data=mysql_fetch_array($query)){  
								?>
        			<div class="sectiontitle">
				<h4><?php echo $data['tipe_produk'] ?> :</h4>
                <br/>
                
			</div>
            
            
        

            
			<p>	
				<img src="admin/<?php echo $data['nama_gambar'] ?>" class="blogimage breadcrumbs" alt="">
			</p>
            
			<p>
				 <?php $njing=$data['id_produk']; echo $data['nama_produk'] ?>
			</p>
			<p>
				<?php echo $data['tipe_produk'] ?>
			</p>
            <?php }?>
			<p><center>
				<?php
									  $query2=mysql_query("select 
									  						produk.*,
															detail_produk.*
															from produk
															LEFT join detail_produk on produk.id_produk=detail_produk.id_produk
															where detail_produk.id_produk='$njing'
														");
									  while($data2=mysql_fetch_array($query2)){  
								?>
                                <a href="?page=detailspek&id=<?php echo $data2['id_detailproduk'] ?>&amp;produk=<?php echo $data2['id_produk'] ?>" class="da-link button btn">
                                	Product <?php echo $data2['judul_spek'] ?> , [ View ]
                                </a>
                                <br/><br/>
                        		<?php }?>
			</center></p>
			<br/><br/>			
						
		</div>
		 <!-- SIDEBAR -->
		<div class="four columns">
			<h6 class="sidebartitle">SALES INFORMATION</h6>
			<div class="avatar">
				<img src="images/temp/shopingchart.gif">
			</div>
			<p>
				 Informasi tentang pemesanan :<br/>
                 <a href="?page=how_to_order">HOW TO ORDER</a>
                 
			</p><br/>
			<div class="avatar">
				<img src="images/temp/vydeopresenters.gif" alt="">
			</div>
			<p>
            	Informasi setelah pembelian :<br/>
				 <a href="?page=after_sales">AFTER SALES</a>
			</p><br/>
			<div class="avatar">
				<img src="images/temp/Telephone.gif" alt="">
			</div>
			<p>
				 Hubungi Kami :
				 </br>Hendra Lin 08127037788 </br>(+62-21 99383188)
			</p>
			<br class="clear"/><br/><br/><br/>
            <div class="">
				<div class="avatar">
					<!--<img src="images/temp/logo transparent.png" alt="">-->
				</div>
            
			<div class="right">			
		<div class="social facebook">
			<a href="#"></a>
		</div>
		<div class="social twitter">
			<a href="#"></a>
		</div>
		<div class="social deviantart">
			<a href="#"></a>
		</div>
		<div class="social flickr">
			<a href="#"></a>
		</div>
		<div class="social dribbble">
			<a href="#"></a>
		</div>
		</div>
		<p class="clear authortext">
					xx<br/>
				</p>
			</div>			
			
			<br class="clear">
			
		</div>
			
			
		</div>
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
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>
</body>
</html>