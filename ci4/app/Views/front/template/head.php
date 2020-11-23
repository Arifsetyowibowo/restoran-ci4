<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Restoran ku</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="<?= base_url('asset/css/cart.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('asset/css/templatemo-style.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('fontawesome/css/all.css') ?>" rel="stylesheet" />

</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->

<body>

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('asset/img/simple-house-01.jpg') ?>">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Restoran Ku</h1>

							</div>
						</div>
						<?php
						$jml_keranjang = 0;
						foreach ($cart as $key => $value) {
							$jml_keranjang = $jml_keranjang + $value['qty'];
						}
						?>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="<?= base_url('/home') ?>" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><i class="fas fa-shopping-cart"></i> &nbsp;<a href="<?= base_url('/keranjang') ?>" class="tm-nav-link"> <?= $jml_keranjang ?></a></li>
								<?php if (!empty(session()->get('namapelanggan'))) : ?>
									<li class="tm-nav-li"><i class="fas fa-user"></i> &nbsp;<a class="tm-nav-link"> <?= session()->get('namapelanggan') ?></a>
									</li>
								<?php endif ?>
								<?php if (!empty(session()->get('namapelanggan'))) { ?>
									<li class="tm-nav-li"><i class="ti-power-off"></i><a href="<?= base_url('logout') ?>" class="tm-nav-link">Logout</a></li>
								<?php } else { ?>
									<li class="tm-nav-li"><i class="ti-power-off"></i><a href="<?= base_url('login') ?>" class="tm-nav-link">Login</a></li>
								<?php } ?>
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</div>

		<?= $this->renderSection('content') ?>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Arif Setyo Wibowo</p>
		</footer>
	</div>
	<script src="<?= base_url('asset/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('asset/js/cart.js') ?>"></script>
	<script src="<?= base_url('asset/js/parallax.min.js') ?>"></script>
	<script>
		$(document).ready(function() {
			// Handle click on paging links
			$('.tm-paging-link').click(function(e) {
				e.preventDefault();

				var page = $(this).text();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>

</html>