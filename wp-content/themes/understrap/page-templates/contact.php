<?php

/**
 * Template Name: contact
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
    <div class="row contact-main-img" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>)">
        <div class="col-12 quote">
            <div class="row">
                <p class="">"C’est au contact d’autrui que l’Homme apprend ce qu’il sait"</p>
            </div>
            <div class="row col-12">
                <p class="author">Euripide</p>
            </div>
        </div>
    </div>
    <?php $contact = get_field('imagecontact'); ?>
    <div class="row BlockContact">
        <div class="col-12 bg-white main">
            <div class="container">
                <div class="row mt-5 ml-3">
                    <h2>NOUS CONTACTER</h2>
                </div>
                <div class="row ml-5">
                    <img src="<?php echo $asset ?>icone_titre.png" alt="logo_titre">
                </div>
                <div class="container mt-5 d-flex justify-content-center main-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 form p-5">
                            <?= the_content(); ?>
                        </div>
                        <div id="footer-bottom" class="col-12 col-md-12 col-lg-6 p-0" class="col-12 col-md-6 col-lg-6">
                            <img class="contactimg" src="<?= $contact['url'] ?>" alt="img-contact">
                            <div class="footer-contact bg-lightBlue d-flex justify-content-center">
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
    <div class="row bg-darkGrey BlockContact2">

    </div>


</div>



<?php
get_footer();
