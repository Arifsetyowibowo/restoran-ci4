<?= $this->extend('front/template/head') ?>

<?= $this->section('content') ?>
<main>


	<div class="tm-paging-links" style="margin-top:50px;">
		<nav>
			<ul>
				<?php foreach ($kategori as $kat => $kat1) : ?>
					<li class="tm-paging-item"><a href="<?= $kat1['idkategori'] ?>" class="tm-paging-link active"><?= $kat1['kategori'] ?></a></li>
				<?php endforeach ?>

			</ul>
		</nav>
	</div>


	<!-- Gallery -->
	<div class="row tm-gallery">
		<?php foreach ($kategori as $key => $value) : ?>
			<!-- gallery page 1 -->
			<div id="tm-gallery-page-<?= $value['kategori'] ?>" class="tm-gallery-page ">
				<?php foreach ($menu as $key => $data) : ?>
					<?php if ($data['idkategori'] === $value['idkategori']) { ?>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" >
							<figure>
								<img src="<?= base_url('/upload/' . $data['gambar'] . '') ?>" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title"><?= $data['menu'] ?></h4>
									<p class="tm-gallery-description"><?= $data['harga'] ?></p>
									<p class="pbaru">
										<a href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>" style="text-decoration:none;" class="tm-gallery-price">+ ADD TO CART</a>
									</p>
								</figcaption>
							</figure>
						</article>
					<?php } ?>
				<?php endforeach ?>
			</div> 
		<?php endforeach ?>
	</div>
	<div class="tm-section tm-container-inner">
		<div class="row">
			<div class="col-md-6">
				<figure class="tm-description-figure">
					<img src="<?= base_url('asset/img/img-01.jpg')?>" alt="Image" class="img-fluid" />
				</figure>
			</div>
			<div class="col-md-6">
				<div class="tm-description-box">
					<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
					<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
					<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
				</div>
			</div>
		</div>
	</div>
</main>



<?= $this->endSection() ?>