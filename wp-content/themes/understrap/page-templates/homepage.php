<?php

/**
 * Template Name: home Page Template
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

// $args = array(
// 		'numberposts'      => 4,
// 		'post_type'        => 'materiel',
// );

// $materiels = get_posts( $args );

// var_dump($materiels);
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
					<div class="col-lg-6 mx-auto main-content mt-3 p-5">
						<?= the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$priorities = get_field('priorities');
	?>
	<div class="row bg-darkGrey priorities p-5">
		<div class="col-12 mt-5">
			<div class="container mt-5">
				<div class="row mt-5">
					<div class="col-12 col-lg-3">
						<h2>NOS PRIORITÉS</h2>
						<div class="row ml-5">
							<img src="<?php echo get_site_url(); ?>/assets/img/icone_titre.png" alt="logo_titre">
						</div>
					</div>
					<?php foreach ($priorities as $priority) : ?>
						<div class="col-12 col-lg-3 mx-auto">
							<img class="pic-priorities mt-3 mb-3" src="<?= $priority['icone']['url']; ?>" style="width:30%;" alt="img_priorities">
							<p><?= $priority['content']; ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5">
			<p>Nos métiers : L’expertise bureautique et informatique, ainsi que les télécommunications.</p>
			<p>
				<a href="">Et vous ? Parlez-nous de votre quotidien !</a>
			</p>
		</div>
	</div>
	<?php
	$solutions = get_field('solutions');
	?>
	<div class="row bg-blue nos-solutions">
		<div class="col-12">
			<div class="container">
				<div class="row mt-5 ml-3">
					<h2>NOS SOLUTIONS</h2>
				</div>
				<div class="row ml-5 mb-5">
					<img src="<?php echo $asset ?>icone_titre.png" alt="logo_titre">
				</div>
				<div class="row">
				</div>
				<div class="row solutionRow">
					<div class="col-12 col-lg-6 solutionBloc1 pr-0">
						<div class="solutionContainer" style="background: url(<?= $solutions[0]['image']['url']; ?>)">
							<div class="solutionTitle">
								<h2><?= $solutions[0]['title']; ?></h2>

							</div>
							<div class="solutionHover">
								<p><?= $solutions[0]['texte']; ?></p>
								<a href="<?= $solutions[0]['page']; ?>"><i class="fas fa-caret-right"></i> VOIR LA RUBRIQUE</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 solutionBloc2 pl-0">
						<div class="solutionContainer" style="background: url(<?= $solutions[1]['image']['url']; ?>)">
							<div class="solutionTitle">
								<h2><?= $solutions[1]['title']; ?></h2>

							</div>
							<div class="solutionHover">
								<p><?= $solutions[1]['texte']; ?></p>
								<a href="<?= $solutions[1]['page']; ?>"><i class="fas fa-caret-right"></i> VOIR LA RUBRIQUE</a>
							</div>
						</div>
						<div class="solutionContainer" style="background: url(<?= $solutions[2]['image']['url']; ?>)">
							<div class="solutionTitle">
								<h2><?= $solutions[2]['title']; ?></h2>

							</div>
							<div class="solutionHover">
								<p><?= $solutions[2]['texte']; ?></p>
								<a href="<?= $solutions[2]['page']; ?>"><i class="fas fa-caret-right"></i> VOIR LA RUBRIQUE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $contact = get_field('imgcontact'); ?>
	<div class="row bg-darkGrey BlockHomepage3">
		<div class="col-12">
			<div class="container">
				<div class="row mt-5 ml-3">
					<h2>NOUS CONTACTER</h2>
				</div>
				<div class="row ml-5">
					<img src="<?php echo $asset ?>icone_titre.png" alt="logo_titre">
				</div>
				<div class="row">
					<div class="col-12">
						<div class="container mt-5 d-flex justify-content-center main-content">
							<div class=" col-12 col-lg-6 form p-5">
								<p class="accroche">Vous recherchez un partenaire de confiance et vous avez besoin d’une réponse rapide
									concernant l’achat, la location ou l’optimisation de votre parc bureautique ?</p>
								<p>
									Nos conseillers vous répondent.
								</p>
								<?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire de contact 1"]'); ?>
							</div>
							<div class=" col-12 col-lg-6 position-relative">
								<img class="contactimg position-absolute" src="<?= $contact['url'] ?>" alt="img-contact">
								<div class="footer-contact bg-lightBlue d-flex justify-content-center position-absolute">
									<div class="my-auto mx-auto">
										<!-- picto-manquant -->
										<p>Téléphone</p>
										<p><i class="fas fa-caret-right"></i> +33 (0)5 56 79 03 28</p>
									</div>
									<div class="my-auto mx-auto">
										<!-- picto-manquant -->
										<p>Adresse</p>
										<p><i class="fas fa-caret-right"></i> 3 Avenue de Marsaou
											33610 Canéjan</p>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row bg-darkGrey BlockHomepage4 bg-white">

	</div>
</div>


<?php
get_footer();
