
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
				 Sales
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
<div class="six columns">
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
            	Hubungi Kami :<br/>
                Phone : +62 21 5951624 / Fax: +62 21 5951623<br/>
				 <a href=""></a>
			</p><br/>
			<br class="clear">
		</div>
           
			<div class="six columns">
			<h6 class="sidebartitle">POPULAR TAGS</h6>
			<img src="images/temp/lucu-lari.gif" alt="">
			<br class="clear"/>
			<br/><br/>
			</div>
			
		
</div>
<div class="hr">
</div>

<div class="row">
	<div class="twelve columns">
		<!-- CATEGORIES-->
		<section id="options" class="clearfix">
		<ul id="filters" class="option-set clearfix" data-option-key="filter">
			<li><a href="#filter" data-option-value="*" class="portofoliobutton selected">Show all</a></li>
            <li><a href="#filter" data-option-value=".line" class="portofoliobutton">Sales Record</a></li>
			<li><a href="#filter" data-option-value=".nature" class="portofoliobutton">Top Customer</a></li>
			<li><a href="#filter" data-option-value=".castles" class="portofoliobutton">Type Customer</a></li>
			<li><a href="#filter" data-option-value=".trains" class="portofoliobutton">Chasis Maker</a></li>
            <li><a href="#filter" data-option-value=".client" class="portofoliobutton">Our Client</a></li>
        </ul>
		</section>
	</div>
</div>
<div class="row">
	<div id="portofolio">
    
    <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from customer where type_customer='Sales_Record'");
									  while($data=mysql_fetch_array($query)){  
								?>
		<!-- Project 1 category trains-->
		<div class="six columns category line">
			<h5><?php echo $data['judul'] ?></h5>
			
			<div class="portofoliothumb">
				<div class="">
					
					
				</div>
				<img src="/admin/<?php echo $data['nama_file'] ?>" alt="">
			</div>
		</div>
        <?php $no++;}?>
    
    
    
    <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from customer where type_customer='Top_Customer'");
									  while($data=mysql_fetch_array($query)){  
								?>
		<!-- Project 2 category trains-->
		<div class="six columns category nature">
			<h5><?php echo $data['judul'] ?></h5>
			
			<div class="portofoliothumb">
				<div class="">
					
					
				</div>
				<img src="/admin/<?php echo $data['nama_file'] ?>" alt="">
			</div>
		</div>
        <?php $no++;}?>
        
		<!-- Project 3 category castles-->
          <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from customer where type_customer='Type_Customer'");
									  while($data=mysql_fetch_array($query)){  
								?>
        
		<div class="six columns category castles">
			<h5><?php echo $data['judul'] ?></h5>
			
			<div class="portofoliothumb">
				<div class="">
					
					
				</div>
                <img src="/admin/<?php echo $data['nama_file'] ?>" alt="">
				
			</div>
		</div>
        <?php $no++;}?>
        
       
		<!-- Project 4 nature-->
        <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from customer where type_customer='Chasis_Maker'");
									  while($data=mysql_fetch_array($query)){  
								?>
		<div class="six columns category trains">
			<h5><?php echo $data['judul'] ?></h5>
			
			<div class="portofoliothumb">
				<div class="">
					
					
				</div>
				<img src="/admin/<?php echo $data['nama_file'] ?>" alt="">
			</div>
		</div>
         <?php $no++;}?>
        
        
        <!-- Project 5 client-->
        <?php 
										$no=1;
									  include "config/koneksi.php";
									  $query=mysql_query("select * from customer where type_customer='Our_Client'");
									  while($data=mysql_fetch_array($query)){  
								?>
		<div class="twelve columns category client">
			<h5><?php echo $data['judul'] ?></h5>
			
			<div class="portofolio">
				<div class="">
					
					
				</div>
				<img src="/admin/<?php echo $data['nama_file'] ?>" alt="">
			</div>
		</div>
         <?php $no++;}?>
        
		
            
        
        
		<!-- Project 5-->
        
                
		<!-- Project 6-->
		
		<!-- Project 7-->
		
		<!-- Project 8-->
		
	</div></div>
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