<?php

/**
 * Template Name: informatique
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$asset = get_site_url() . '/assets/img/';

get_header();

?>
<div class="container-fluid">
	<div class="row main-image" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>)">
		<div class="col-4 offset-8  quote position-relative">
			<div class="row">
				<p class="position-absolute">"Lorem ipsum dolor sit, amet consectetur armor elit"</p>
			</div>
			<div class="row col-2 offset-10">
				<p class="author position-absolute">Auteur</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 bg-white main">
			<div class="container">
				<div class="row mt-5 ml-3">
					<h2><?= the_title() ?></h2>
				</div>
				<div class="row ml-5">
					<img src="<?php echo $asset ?>icone_titre.png" alt="logo_titre">
				</div>
				<div class="row mt-2 ">
					<div class="col-12 col-lg-6 mx-auto main-content mt-3 p-5">
						<?= the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$serviceinfos = get_field('serviceinfo');
	$serviceinfo2 = get_field('serviceinfo2')
	?>
	<div class="row">
		<div class="col-12 bg-grey BlockInfo p-5 mx-auto">
			<div class="container col-12 d-flex justify-content-center mt-5 mx-auto">
				<div class="row mt-5">
					<h3 class=" mx-auto mb-5">DÉCOUVREZ NOTRE OFFRE DE SERVICES INFORMATIQUES</h3>
					<div class="container">
						<div class="row">
							<!-- SERVICES INFO -->
							<ul class="nav nav-pills mb-3 position-relative" id="pills-tab" role="tablist">
								<li class="nav-item active col-12 col-lg-4 imgservices" role="presentation">
									<a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
										<img src="<?= $serviceinfos[0]['image']['url'] ?>" alt="service info">
										<div class="position-absolute title">
											<h4><?= $serviceinfos[0]['titre']; ?></h4>
										</div>
									</a>
								</li>
								<li class="nav-item col-12 col-lg-4 position-relative imgservices" role="presentation">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
										<img src="<?= $serviceinfos[1]['image']['url'] ?>" alt="service info">
										<div class="position-absolute title">
											<h4><?= $serviceinfos[1]['titre']; ?></h4>
										</div>
									</a>
								</li>
								<li class="nav-item col-12 col-lg-4 position-relative imgservices" role="presentation">
									<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
										<img src="<?= $serviceinfos[2]['image']['url'] ?>" alt="service info">
										<div class="position-absolute title">
											<h4><?= $serviceinfos[2]['titre']; ?></h4>
										</div>
									</a>
								</li>
							</ul>
							<!-- CONTENT SERVICES -->
							<div class="tab-content blocservices" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="container">
										<div class="row">
											<div class="gallerie col-12 col-lg-4">
												<div class="owl-carousel owl-carouselinfo owl-theme">
													<div class="item">
														<img src="<?= $serviceinfo2[0]['gallerie'][0]['url'] ?>" alt="service info">
													</div>
													<div class="item">
														<img src="<?= $serviceinfo2[0]['gallerie'][1]['url'] ?>" alt="service info">
													</div>
													<div class="item">
														<img src="<?= $serviceinfo2[0]['gallerie'][2]['url'] ?>" alt="service info">
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-8 bg-blue p-4">
												<p class="service-info"><?= $serviceinfo2[0]['texte']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade blocservices" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="container">
										<div class="row">
											<div class="gallerie col-12 col-lg-4">
												<div class="owl-carousel owl-carouselinfo owl-theme">
													<div class="item">
														<img src="<?= $serviceinfo2[1]['gallerie'][0]['url'] ?>" alt="service info">
													</div>
													<div class="item">
														<img src="<?= $serviceinfo2[1]['gallerie'][1]['url'] ?>" alt="service info">
													</div>
													<div class="item">
														<img src="<?= $serviceinfo2[1]['gallerie'][2]['url'] ?>" alt="service info">
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-8 bg-blue p-4">
												<p class="service-info"><?= $serviceinfo2[1]['texte']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade blocservices" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
									<div class="container">
										<div class="row">
											<div class="gallerie col-12 col-lg-4">
												<div class="owl-carousel owl-carouselinfo owl-theme">
													<div class="item">
														<img src="<?= $serviceinfo2[2]['gallerie'][0]['url'] ?>" alt="service info">
													</div>
													<div class="item">
														<img src="<?= $serviceinfo2[2]['gallerie'][1]['url'] ?>" alt="service info">
													</div>
													<div class="item">
														<img src="<?= $serviceinfo2[2]['gallerie'][2]['url'] ?>" alt="service info">
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-8 bg-blue p-4">
												<p class="service-info"><?= $serviceinfo2[2]['texte']; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- FIN SERVICES INFO -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 bg-darkGrey BlockInfo2 d-flex justify-content-center p-5">
		</div>
	</div>
</div>

<?php
get_footer();
