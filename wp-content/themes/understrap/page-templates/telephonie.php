<?php

/**
 * Template Name: telephonie
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
		<div class="col-4 quote">
			<div class="row">
				<p class="">"Lorem ipsum dolor sit, amet consectetur armor elit"</p>
			</div>
			<div class="row col-2">
				<p class="author ">Auteur</p>
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
					<div class="col-12 col-sm-12 col-md-10 col-lg-6 mx-auto main-content mt-3 p-5">
						<?= the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$partenairesicones = get_field('partenaires-icones');
	?>
	<div class="row">
		<div class="col-12 bg-darkGrey TelephonieBlock p-5">
			<div class="container mt-5 p-5">
				<div class="row mx-auto bg-white">
					<?php foreach ($partenairesicones as $partenairesicone) : ?>
						<div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center mx-auto blockPartenaires">
							<img src="<?= $partenairesicone['image']['url'] ?>" style="width:140px;" alt="partenaire icone">
						</div>
					<?php endforeach; ?>
					<div class="col-12 col-lg-12 bg-blue blockPartenaires2">
						<p>
							<?= get_field('content') ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-md-6 col-lg-4 button bg-lightBlue mx-auto mt-5 p-3">
						<a href=""><i class="fas fa-caret-right"></i> N’HÉSITEZ PAS À NOUS CONTACTER</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
