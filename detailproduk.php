<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 Detail Product
			</p>
		</div>
	</div>
</div>
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
<br/>
            <h4>
            	Detail
            </h4>
            <hr/>
            <br/>

<div class="row">
	<div class="twelve columns">
		<!-- CATEGORIES-->
	</div>
</div>

		
<div id="portofolio" class="row">
								
								<?php 
										$id=$_GET['id'];
									  include "config/koneksi.php";
									  $query=mysql_query("select * from produk where id_produk='$id'");
									  while($data=mysql_fetch_array($query)){  
								?>
	<!-- Project 1-->
	<div class="six columns category trains">
		<h5><?php $njing=$data['id_produk']; echo $data['nama_produk'] ?></h5>
        <p>
        	<?php echo $data['tipe_produk'] ?>
        </p>
		<div class="portofoliothumb">
			<img src="/admin/<?php echo $data['nama_gambar'] ?>" alt="">
		</div>
        
	</div>
        <?php }?>
        <div class="six columns category trains">
        	<h5>
        		Spesification : 
            	</h5>
                <br/>
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
        </div>
	<!-- Project 3--><!-- Project 4--></div>
<div class="hr">
</div>
</p>
		</div>
	</div>