<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				Kerja Kami
			</p>
		</div>
	</div>
</div>
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">

<br/>
            <h4>
            	Kerja Kami
            </h4>
            <hr/>
            <br/>
<div class="row">
	<div class="twelve columns">
		<!-- CATEGORIES-->
		<section id="options" class="clearfix">
		<ul id="filters" class="option-set clearfix" data-option-key="filter">
			<li><a href="#filter" data-option-value="*" class="portofoliobutton selected">Show all</a></li>
		</ul>
		</section>
	</div>
</div>

		
<div id="portofolio" class="row">
								
								<?php 

									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where tipe_produk='Komponet'");
									  while($data=mysql_fetch_array($query)){  
								?>
	<!-- Project 1-->
	<div class="six columns category trains">
		
		<div class="portofoliothumb">
			<div class="portofoliothumboverlay">
				<div class="viewgallery">
				</div>
				<div class="inner">
                		
                
<a class="projectdetail" href="?page=detailproduk2&id=<?php echo $data['id_produk'] ?>">+ Details &nbsp; <?php echo $data['nama_produk'] ?></a>
				</div>
			</div>
			<!-- image here -->
			
			  <img class="img-responsive" src="admin/<?php echo $data['nama_gambar'] ?>" width="250" height="250" alt="">
		</div>
        
	</div>
        <?php }?>
	<!-- Project 3--><!-- Project 4--></div>
<div class="hr">
</div>
</p>
		</div>
	</div>