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
<link rel="stylesheet" href="stylesheets/nivoslider.css"><!-- nivo slider stylesheet -->
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
                	Detail Spesification
                </p>
		</div>
	</div>
</div>
<div class="hr">
</div>


<!-- CONTENT 
================================================== -->
<div class="row">
	<!-- PROJECT DESCRIPTION-->
	<div class="six columns">
  <?php 

  $no=1;
  include "config/koneksi.php";
  $produk=$_GET['produk'];
  $query=mysql_query("select * from produk where id_produk='$produk'");
  while($data=mysql_fetch_array($query)){  
  ?>
    
		<div class="sectiontitle">
			<h4><?php echo $data['nama_produk'] ?></h4>
		</div>
         
   <?php $no++;}?>
           
         <?php 

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from detail_produk where id_detailproduk='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
         
		<p>
			<?php $ok=$data['id_produk']; ?>
		</p>
        <p>
			<?php $kk=$data['detail_spek'];
		echo $kk; ?>
		</p>
        
         <?php $no++;}?>
		</div>
	<!-- end main content-->
	<!-- SLIDER-->
   
	<div class="six columns">
      <?php 

  $no=1;
  include "config/koneksi.php";
  $produk=$_GET['produk'];
  $query=mysql_query("select * from produk where id_produk='$produk'");
  while($data=mysql_fetch_array($query)){  
  ?>
      
		<div class="slider-wrapper theme-default">
      
			<div id="slider">
				<img src="/admin/<?php echo $data['nama_gambar']; ?>" width="108%" height="50%" />
				
			</div>
             
		</div>
        <?php $no++;}?>
	</div>
    
	<!-- end sliderr-->
</div>
<div class="hr">
</div>
<!-- TWITTER
================================================== -->

<!-- FOOOTER 
================================================== -->

<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
