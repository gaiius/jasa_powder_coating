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
			<p class="text-center">
				 Contact Us
			</p>
		</div>
		<div class="four columns">
			<div class="row collapse">
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
		<div class="twelve columns noleftmargin">
			<div class="eight columns">
				<div class="boxblog">
					<p>
						
						<img src="admin/gambar/photo_2015-09-15_09-35-20.jpg" alt="" width="580" height="450"/>
    <p></p>
					</p>
					
				</div>
			</div>
            
            <!-- SIDEBAR -->
		<div class="four columns">
			<h6 class="sidebartitle">Head Office :</h6>
            
			<p>
				Jl. Pergudangan Tehnik Unggul Blok E18 Kel.
						Kel. Pasirbolang Kec. Tigaraksa Tangerang, Indonesia <br/> 
						Phone : +6221-59451197 | +6221-99383188 | +6221-99380168
						www.greatasean.co.id  
						
			</p>
            <br/>
            <!--<h6 class="sidebartitle">Display Area at Karawang Branch :</h6>
            <p>
            Jl. Raya Klari Km. 10<br/>
			Dsn. KLAPA NUNGGAL, Ds.  GINTUNG KERTA,<br/> Kec. KLARI, 
			Kab. KARAWANG, <br/>JAWA BARAT - INDONESIA
            </p>-->
			
			<br class="clear"/>
			
			<h6 class="sidebartitle">POPULAR POSTS</h6>
			<p>
				7 Oct 2013
			</p>
			<p>
				Many pieces were proposed, but none seemed suitable, because each one wished to play a good and suitable part ...
			</p>
			
		</div>
        </div>
        </div>

            
            <div class="row">
	<div class="twelve columns noleftmargin">
	    <!-- MAIN CONTENT -->
		<div class="twelve columns noleftmargin">
			<div class="eight columns">
				<div class="boxblog">

			<h5><center>KRITIK & SARAN</center></h5>
			<div class="done">
				<div class="alert-box success">
				 Message has been sent! <a href="" class="close">x</a>
				</div>
			</div>			
				<form method="post" action="simpankritik.php" id="contactform">
				<div class="form">
                	<div class="six columns">
					<label>Tentang</label>
					<input type="text" name="tentang" class="smoothborder" placeholder="questions about *"/>
					</div>
				    <div class="six columns">
					<label>Nama</label>
					<input type="text" name="nama" class="smoothborder" placeholder="Your name *"/>
					</div>
					<div class="six columns">
					<label>E-mail </label>
					<input type="text" name="email" class="smoothborder" placeholder="Your e-mail address *"/>
					</div>
                    <div class="six columns">
					<label>Kota</label>
					<input type="text" name="kota" class="smoothborder" placeholder="Your City *"/>
					</div>
                    <div class="six columns">
					<label>No. Tlp / Handphone</label>
					<input type="number" name="tlp" class="smoothborder" placeholder="your phone no. *"/>
					</div>
                    <div class="six columns">
					<label>Alamat</label>
					<input type="text" name="alamat" class="smoothborder" placeholder="Your address *"/>
					</div>
					<label>Message</label>
					<textarea name="comment" class="smoothborder ctextarea" rows="14" placeholder="Message, feedback, comments *"></textarea>
					<input type="submit" class="readmore" value="Kirim">
				</div>
                
				</form>			
		</div>
	</div>

            
		<!-- SIDEBAR -->
		<div class="four columns">
			<h6 class="sidebartitle">SALES CONTACT</h6>
            <?php
		$no=1;
  		include "config/koneksi.php";
  		$query=mysql_query("select * from sales");
  		while($data=mysql_fetch_array($query)){  
  	?>
			<div class="avatar">
				<img src="images/temp/customer_service.gif" alt="">
			</div>
			<p>
				 <?php echo $data['nama_sales'];?><br/>
                 <?php echo $data['no_tlp'];?><br/>
                 <?php echo $data['email'];?><br/>
			</p>
            <p></p>
			<?php $no++;}?>
			<br class="clear"/>
			<h6 class="sidebartitle">POPULAR TAGS</h6>
			<a href="#" class="tags">Photography</a>
			<a href="#" class="tags">Vintage</a>
			<a href="#" class="tags">Nature</a>
			<a href="#" class="tags">Design</a>
			<a href="#" class="tags">Printing</a>
			<a href="#" class="tags">Contemporary</a>
			<a href="#" class="tags">Classic</a>
			<a href="#" class="tags">Elegant</a>
			<a href="#" class="tags">Graphics</a>
			<br class="clear"/>
			<br/><br/>
			
			
		</div>
        </div>
        </div>
	
    
          </div></div>      
    </div>
</div>
<div class="hr">
</div>
<!-- TWITTER
================================================== -->
<div class="tweetarea">
	<div class="tweettext">
		<div class="row">
			
		</div>
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