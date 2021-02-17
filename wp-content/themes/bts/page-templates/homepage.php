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
defined( 'ABSPATH' ) || exit;

$asset = get_site_url().'/assets/img/';

get_header();

$args = array(
		'numberposts'      => 4,
		'post_type'        => 'materiel',
);

$materiels = get_posts( $args );

var_dump($materiels);
?>
<div class="container-fluid">
	<div class="row" style="background-image:url(<?= get_the_post_thumbnail_url();?>)">
		<div class="col-12">

		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<h2>Notre Société</h2>
					<div class="">
						<?= the_content();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		$priorities = get_field('priorities');
	 ?>
	<div class="row bg-darkGrey">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3">
						<h2>Priorités</h2>
					</div>
					<?php foreach ($priorities as $priority ): ?>
						<div class="col-12 col-lg-3">
							<img src="<?= $priority['icone']['url'];?>" alt="">
							<p><?= $priority['content'];?></p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<?php
		$solutions = get_field('solutions');
	 ?>
	<div class="row bg-blue">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Nos solutions</h2>
					</div>
				</div>
				<div class="row solutionRow">
					<div class="col-12 col-lg-6 solutionBloc1 pr-0">
						<div class="solutionContainer" style="background: url(<?= $solutions[0]['image']['url'];?>)">
							<div class="solutionTitle">
								<p><?= $solutions[0]['title'];?></p>

							</div>
							<div class="solutionHover">
								<p><?= $solutions[0]['texte'];?></p>
								<a href="<?= $solutions[0]['page'];?>">Voir la rubriques</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 solutionBloc2 pl-0">
						<div class="solutionContainer" style="background: url(<?= $solutions[1]['image']['url'];?>)">
							<div class="solutionTitle">
								<p><?= $solutions[1]['title'];?></p>

							</div>
							<div class="solutionHover">
								<p><?= $solutions[1]['texte'];?></p>
								<a href="<?= $solutions[1]['page'];?>">Voir la rubriques</a>
							</div>
						</div>
						<div class="solutionContainer" style="background: url(<?= $solutions[2]['image']['url'];?>)">
							<div class="solutionTitle">
								<p><?= $solutions[2]['title'];?></p>

							</div>
							<div class="solutionHover">
								<p><?= $solutions[2]['texte'];?></p>
								<a href="<?= $solutions[2]['page'];?>">Voir la rubriques</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row bg-darkGrey">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Nous contacter</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<div class="col-12">
						formulaire contact
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
