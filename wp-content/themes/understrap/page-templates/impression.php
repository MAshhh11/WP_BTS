<?php

/**
 * Template Name: impression
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
        <div class="col-6 offset-6  quote position-relative">
            <div class="row">
                <p class="position-absolute">"Nous sommes ce que nous répétons chaque jour"</p>
            </div>
            <div class="row col-2 offset-10">
                <p class="author position-absolute">Aristote</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 bg-white main">
            <div class="container">
                <div class="row mt-5 ">
                    <div class="col-lg-6 mx-auto main-content mt-5 p-5">
                        <?= the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 BlockImpression bg-grey">
            <div class="row mt-5">
                <h3 class=" mx-auto mt-5 mb-3">DÉCOUVREZ NOS MATÉRIELS D’IMPRESSION ADAPTÉS À VOTRE MÉTIER </h3>
            </div>
            <div class="row mx-auto ">
                <div class="col-3 button bg-lightBlue mx-auto mb-5 mt-5 p-3">
                    <a href=""><i class="fas fa-caret-right"></i> BESOIN D'UNE REPONSE RAPIDE ?</a>
                </div>
            </div>
            <?php
            $serviceimpression = get_field('serviceimpression');
            $serviceimpression2 = get_field('serviceimpression2')
            ?>
            <div class="container">
                <div class="row">
                    <!-- SERVICES IMPRESSION -->
                    <ul class="nav nav-pills mb-3 position-relative" id="pills-tab" role="tablist">
                        <li class="nav-item active col-3 imgservice" role="presentation">
                            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                <img src="<?= $serviceimpression[0]['image']['url'] ?>" alt="service imp">
                                <div class="position-absolute title">
                                    <h4><?= $serviceimpression[0]['title']; ?></h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col-3 position-relative imgservice" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <img src="<?= $serviceimpression[1]['image']['url'] ?>" alt="service imp">
                                <div class="position-absolute title">
                                    <h4><?= $serviceimpression[1]['title']; ?></h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col-3 position-relative imgservice" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <img src="<?= $serviceimpression[2]['image']['url'] ?>" alt="service imp">
                                <div class="position-absolute title">
                                    <h4><?= $serviceimpression[2]['title']; ?></h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item col-3 position-relative imgservice" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <img src="<?= $serviceimpression[3]['image']['url'] ?>" alt="service imp">
                                <div class="position-absolute title">
                                    <h4><?= $serviceimpression[3]['title']; ?></h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- CONTENT SERVICES IMPRESSION -->
                    <div class="tab-content blocservices" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 bg-blue p-4 align-middle">
                                        <p class="service-info"><?= $serviceimpression2[0]['texte']; ?></p>
                                    </div>
                                    <div class="gallerie col-8">
                                        <div class="owl-carousel owl-carouselinfo owl-theme">
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[0]['galerie'][0]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[0]['galerie'][1]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[0]['galerie'][2]['url'] ?>" alt="service imp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade blocservices" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 bg-blue p-4">
                                        <p class="service-info"><?= $serviceimpression2[1]['texte']; ?></p>
                                    </div>
                                    <div class="gallerie col-8">
                                        <div class="owl-carousel owl-carouselinfo owl-theme">
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[1]['galerie'][0]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[1]['galerie'][1]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[1]['galerie'][2]['url'] ?>" alt="service imp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade blocservices" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 bg-blue p-4">
                                        <p class="service-info"><?= $serviceimpression2[2]['texte']; ?></p>
                                    </div>
                                    <div class="gallerie col-8">
                                        <div class="owl-carousel owl-carouselinfo owl-theme">
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[2]['galerie'][0]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[2]['galerie'][1]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[2]['galerie'][2]['url'] ?>" alt="service imp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade blocservices" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 bg-blue p-4">
                                        <p class="service-info"><?= $serviceimpression2[3]['texte']; ?></p>
                                    </div>
                                    <div class="gallerie col-8">
                                        <div class="owl-carousel owl-carouselinfo owl-theme">
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[3]['galerie'][0]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[3]['galerie'][1]['url'] ?>" alt="service imp">
                                            </div>
                                            <div class="item">
                                                <img src="<?= $serviceimpression2[3]['galerie'][2]['url'] ?>" alt="service imp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 BlockImpression2 bg-darkGrey">
        </div>
    </div>


    <?php
    get_footer();
