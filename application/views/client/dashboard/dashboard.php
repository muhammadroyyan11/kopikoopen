<!-- Slide1 -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<?php foreach ($home as $key => $data) { ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url() ?>assets/img/uploads/slide/<?= $data->gambar_name ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							kopi dari Malang
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							TOKO KOPI KOOPEN
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="<?= site_url('shop') ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
							</dv>
						</div>
					</div>

				</div>
			<?php } ?>

		</div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<b>
						<h3 class="m-text5 t-center">Kedai Kopi Koopen</h3>
					</b><br>
					<p align="justify">Nama toko ini diambil dari bahasa Belanda “Koopen” yang artinya membeli. Alasan pemilik toko memberi nama dengan bahasa Belanda, karena Malang memiliki kaitan sejarah yang erat dengan Belanda pada masanya. Bahkan sampai saat ini banyak pengunjung dari negeri Belanda yang tertarik untuk merasakan kenikmatan kopi lokal sambil menikmati keindahan Kota Malang.</p><br>
					<p align="justify">Selain itu, Anda dapat memilih sendiri biji kopi yang telah disusun dalam toples ketika akan memesan. Harga kopi disini sangat terjangkau. Mulai dari Rp10.000,00 saja, Anda dapat menikmati seduhan kopi dengan nuansa heritage.</p>
				</div>
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3457037925755!2d112.62350611415637!3d-7.96317998156597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629bdff033567%3A0xfbbfda9bd7b03474!2sKopi%20Koopen%20Ijen!5e0!3m2!1sid!2sid!4v1652893988189!5m2!1sid!2sid" width="570" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
						<img src="<?= base_url() ?>assets/img/uploads/koopen.jpg" alt="" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======= Services Section ======= -->
	<div id="services" class="bg5 p-b-55 services-area area-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 70px;">
					<div class="section-headline services-head text-center">
						<h2>THE BEST COFFEE SHOP</h2><br>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<!-- Start Left services -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- end col-md-4 -->
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#">
									<img src="<?= base_url() ?>assets/client/images/icons/icon-1.png" alt="">
								</a>
								<h4>Local Coffe Beens</h4>
								<p>
									Kami memilih biji kopi local berkualitas , sehingga menghasilkan cita rasa yang tidak mengecewakan
								</p>
							</div>
						</div>
						<!-- end about-details -->
					</div>
				</div>
				<!-- End Left services -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- end col-md-4 -->
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#">
									<img src="<?= base_url() ?>assets/client/images/icons/icon-2.png" alt="">
								</a>
								<h4>Best Quality</h4>
								<p>
									Kualitas Menu di Koopen sangat bagus, karena seluruh proses nya terjaga
								</p>
							</div>
						</div>
						<!-- end about-details -->
					</div>
				</div>
				<!-- End Left services -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- end col-md-4 -->
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#">
									<img src="<?= base_url() ?>assets/client/images/icons/icon-3.png" alt="">
								</a>
								<h4>Perfect Blend Coffe</h4>
								<p>
									Fokus untuk menciptakan pengalaman minum kopi yang tiada duanya.
								</p>
							</div>
						</div>
						<!-- end about-details -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Services Section -->

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Product
				</h3>>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php foreach ($barang as $key => $data) { ?>
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="<?= base_url() ?>assets/img/uploads/produk/<?= $data->gambar_name ?>" alt="IMG-PRODUCT" width="150" height="300">

									<div class="block2-overlay trans-0-4">

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="<?= site_url("shop/detail/$data->seo_name") ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Detail
											</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?= site_url("shop/detail/$data->seo_name") ?>" class="block2-name dis-block s-text3 p-b-5">
										<b><?= character_limiter($data->name, 31) ?></b>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?= "Rp " . number_format($data->harga, 2, ',', '.'); ?>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="<?= base_url() ?>assets/img/uploads/kopikoopen.jpg" alt="IMG-BANNER" width="100" height="427">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Find Us
							</span>

							<h3 class="l-text1 fs-35-sm">
								Outlets
							</h3>

							<a href="#" class="s-text4 hov2 p-t-20 ">
								View Outlets
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="<?= base_url() ?>assets/img/uploads/275715489_384141570202484_402096620504865871_n.jpg" alt="IMG-BANNER" width="100" height="427">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Check Now 
							</span>

							<h3 class="l-text1 fs-35-sm">
								Our Event
							</h3>

							<a href="<?= site_url('event	')?>" class="s-text4 hov2 p-t-20 ">
								View event
							</a>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our New Blog
				</h3>
			</div>

			<div class="row">
				<?php foreach ($limit as $key => $data) {
					$dateMasuk = new DateTime($data->date);
				?>
					<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
						<!-- Block3 -->
						<div class="block3">
							<a href="<?= base_url("blog/read/$data->seo_judul") ?>" class="block3-img dis-block hov-img-zoom">
								<img src="<?= base_url() ?>assets/img/uploads/artikel/<?= $data->gambar_name ?>" alt="IMG-BLOG" width="100" height="240">
							</a>

							<div class="block3-txt p-t-14">
								<h4 class="p-b-7">
									<a href="<?= base_url("blog/read/$data->seo_judul") ?>" class="m-text11">
										<?= $data->judul ?>
									</a>
								</h4>

								<span class="s-text6">By</span> <span class="s-text7">Admin</span>
								<span class="s-text6">on</span> <span class="s-text7"><?= $dateMasuk->format('d F Y') ?></span>

								<?= character_limiter($data->konten, 200) ?>
								<br>
								<a href="<?= base_url("blog/read/$data->seo_judul") ?>" class="s-text20">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<!-- Instagram -->
	<!--  -->

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					𝐌𝐚𝐧𝐮𝐚𝐥 𝐁𝐫𝐞𝐰𝐢𝐧𝐠
				</h4>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					𝗦𝗲𝗻𝗶𝗻 - 𝗠𝗶𝗻𝗴𝗴𝘂 : 𝟬𝟳.𝟬𝟬 - 𝟮𝟯.𝟬𝟬</h4>
				<h4 class="m-text12 t-center">𝗝𝘂𝗺’𝗮𝘁 : 𝟭𝟯.𝟬𝟬 - 𝟮𝟯.𝟬𝟬</h4>


				<span class="s-text11 t-center">

				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					𝐒𝐞𝐝𝐢𝐚 𝐁𝐢𝐣𝐢 𝐊𝐨𝐩𝐢 (𝐑𝐨𝐚𝐬𝐭 𝐁𝐞𝐚𝐧)
				</h4>
			</div>
		</div>
	</section>