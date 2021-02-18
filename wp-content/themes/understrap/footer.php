<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$asset = get_site_url() . '/assets/img/';

?>

</main>
<footer class="container-fluid bg-blue">
	<div class="row">
		<div class="col-12">
			<div class="container footer mt-5 mb-5">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						logo
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<h4>NOUS RENCONTRER</h4>
						<p><i class="fas fa-caret-right"></i> 3 Avenue de Marsaou
							33610 Canéjan</p>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<h4>NOUS CONTACTER</h4>
						<p><i class="fas fa-caret-right"></i> +33 (0)5 56 79 03 28</p>
						<p><i class="fas fa-caret-right"></i> Par Mail</p>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<h4>NOUS RETROUVER</h4>
						<img class="linkd" src="<?php echo $asset ?>icone_linkedin@2x.png" style="width:10%;" alt="linkedin">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="<?= get_site_url() . "/assets/js/owl.carousel.min.js"; ?>"></script>
<script src="<?= get_site_url() . "/assets/js/main.js"; ?>"></script>
</body>

</html>