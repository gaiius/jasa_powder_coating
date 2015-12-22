<div id="ei-slider" class="ei-slider">
	<ul class="ei-slider-large">
    			<?php
  include "config/koneksi.php";
  $query=mysql_query("select * from banner");
  while($data=mysql_fetch_array($query))
				{
  
  ?>
		<li>
		<img src="/webmti/admin/<?php echo $data['nama_gambar'] ?>" alt="image01" class="responsiveslide">
		<div class="ei-title">
			<h2><?php echo $data['judul_banner'] ?></h2>
		</div>
		</li>
        
  <?php }?>
	</ul>
	<!-- slider-thumbs -->
	<ul class="ei-slider-thumbs">
		<li class="ei-slider-element">Current</li>
        <?php
  include "config/koneksi.php";
  $query=mysql_query("select * from banner");
  while($data=mysql_fetch_array($query))
				{
  
  ?>
		<li><a href="#">Slide 1</a><img src="/webmti/admin/<?php echo $data['nama_gambar'] ?>" class="slideshowthumb" alt="thumb01"/></li>
        <?php }?>
	</ul>	
</div>
<div class="minipause">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 "Vision is the art of seeing what is invisible to others" - Jonathan Swift
			</p>
		</div>
	</div>
</div>
<!-- ANIMATED COLUMNS 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<ul class="ca-menu">
			<li>
			<a href="#">
			<span class="ca-icon">F</span>
			<div class="ca-content">
				<h2 class="ca-main">Responsive<br/> Design</h2>
				<h3 class="ca-sub">Across all major devices</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="#">
			<span class="ca-icon">H</span>
			<div class="ca-content">
				<h2 class="ca-main">Friendly<br/> Documentation</h2>
				<h3 class="ca-sub">Straight to the point</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="#">
			<span class="ca-icon">N</span>
			<div class="ca-content">
				<h2 class="ca-main">Alternate<br/> Home Pages</h2>
				<h3 class="ca-sub">Full slider, boxed or none</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="#">
			<span class="ca-icon">K</span>
			<div class="ca-content">
				<h2 class="ca-main">Filterable<br/> Portofolio</h2>
				<h3 class="ca-sub">Isotop & PrettyPhoto</h3>
			</div>
			</a>
			</li>
		</ul>
	</div>
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<div class="centersectiontitle">
			<h4>What we do</h4>
		</div>
	</div>
	<div class="four columns">
		<h5>Photography</h5>
		<p>
			 Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.
		</p>
		<p>
			<a href="#" class="readmore">Learn more</a>
		</p>
	</div>
	<div class="four columns">
		<h5>Artwork</h5>
		<p>
			 Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.
		</p>
		<p>
			<a href="#" class="readmore">Learn more</a>
		</p>
	</div>
	<div class="four columns">
		<h5>Logos</h5>
		<p>
			 Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.
		</p>
		<p>
			<a href="#" class="readmore">Learn more</a>
		</p>
	</div>
</div>
<div class="hr">
</div>
<!-- TESTIMONIALS 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<div id="testimonials">
			<blockquote>
				<p>
					 "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis." <cite>Martin - NY</cite>
				</p>
			</blockquote>
			<blockquote>
				<p>
					 "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco." <cite>Sandra - LA</cite>
				</p>
			</blockquote>
			<blockquote>
				<p>
					 "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco." <cite>Jason - MA</cite>
				</p>
			</blockquote>
		</div>
		<!--end testimonials-->
	</div>
</div>