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
        <div class="col-12 col-lg-4 quote p-5">
            <div class="row">
                <p class="">"Nous sommes ce que nous répétons chaque jour"</p>
            </div>
            <div class="row col-12 col-lg-4">
                <p class="author">Aristote</p>
            </div>
        </div>
    </div>

    <!-- TAB START -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="tab-page nav-item">
            <a class="nav-link active" id="materiel-tab" data-toggle="tab" href="#materiel" role="tab" aria-controls="materiel" aria-selected="true">MATÉRIEL D’IMPRESSION</a>
        </li>
        <li class=" tab-page nav-item">
            <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution" role="tab" aria-controls="solution" aria-selected="false">SOLUTIONS</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="materiel" role="tabpanel" aria-labelledby="materiel-tab">

            <!-- MATERIEL TAB CONTENT-->

            <div class="row">
                <div class="col-12 bg-white main">
                    <div class="container">
                        <div class="row mt-5 ">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-6 mx-auto main-content mt-5 p-5">
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
                        <div class="col-6 col-lg-3 button bg-lightBlue mx-auto mb-5 mt-5 p-3">
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
                                <li class="nav-item active col-12 col-sm-6 ol-md-6 col-lg-3 imgservice" role="presentation">
                                    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <img src="<?= $serviceimpression[0]['image']['url'] ?>" alt="service imp">
                                        <div class="position-absolute title">
                                            <h4><?= $serviceimpression[0]['title']; ?></h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item col-12 col-sm-6 col-md-6 col-lg-3 position-relative imgservice" role="presentation">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <img src="<?= $serviceimpression[1]['image']['url'] ?>" alt="service imp">
                                        <div class="position-absolute title">
                                            <h4><?= $serviceimpression[1]['title']; ?></h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item col-12 col-sm-6 col-md-6 col-lg-3 position-relative imgservice" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <img src="<?= $serviceimpression[2]['image']['url'] ?>" alt="service imp">
                                        <div class="position-absolute title">
                                            <h4><?= $serviceimpression[2]['title']; ?></h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item col-12 col-sm-6 col-md-6 col-lg-3 position-relative imgservice" role="presentation">
                                    <a class="nav-link" id="pills-last-tab" data-toggle="pill" href="#pills-last" role="tab" aria-controls="pills-last" aria-selected="false">
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
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 bg-blue p-5">
                                                <p class="service-info"><?= $serviceimpression2[0]['texte']; ?></p>
                                            </div>
                                            <div class="gallerie col-12 col-sm-12 col-md-8 col-lg-8">
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
                                            <div class="col-12 col-sm-12 col-lg-4 bg-blue p-5">
                                                <p class="service-info"><?= $serviceimpression2[1]['texte']; ?></p>
                                            </div>
                                            <div class="gallerie col-12 col-sm-12 col-lg-8">
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
                                            <div class="col-12 col-sm-12 col-lg-4 bg-blue p-5">
                                                <p class="service-info"><?= $serviceimpression2[2]['texte']; ?></p>
                                            </div>
                                            <div class="gallerie col-12 col-sm-12 col-lg-8">
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
                                <div class="tab-pane fade blocservices" id="pills-last" role="tabpanel" aria-labelledby="pills-last-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 bg-blue p-5">
                                                <p class="service-info"><?= $serviceimpression2[3]['texte']; ?></p>
                                            </div>
                                            <div class="gallerie col-12 col-sm-8 col-md-8 col-lg-8">
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

            <!-- END MATERIEL TAB CONTENT-->
        </div>
        <div class="tab-pane fade" id="solution" role="tabpanel" aria-labelledby="solution-tab">

            <!-- SOLUTION TAB CONTENT-->

            <?php $solutions = get_field('solutions'); ?>
            <div class="row">
                <div class="col-12 bg-white mainsolution">
                    <div class="container">
                        <div class="row mt-5 ">
                            <div class="col-12 col-md-8 col-lg-6 mx-auto main-content mt-5 p-5">
                                <p>
                                    <?= $solutions ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-grey ImpressionSolutions">
                <!-- SERVICES SOLUTIONS -->
                <?php $servicesolution = get_field('servicesolution'); ?>
                <?php $servicesolution2 = get_field('servicesolution2'); ?>
                <?php $servicesolution3 = get_field('servicesolution3'); ?>
                <?php $servicesolution4 = get_field('servicesolution4'); ?>
                <div class="container mt-5">
                    <div class="row mt-5">
                        <ul class="nav nav-pills mb-3 position-relative" id="pills-tab" role="tablist">
                            <li class="nav-item active col-12 col-sm-6 col-md-6 col-lg-6 imgservices mt-5" role="presentation">
                                <a class="nav-link" id="pills-ged-tab" data-toggle="pill" href="#pills-ged" role="tab" aria-controls="pills-ged" aria-selected="true">
                                    <img src="<?= $servicesolution[0]['image']['url'] ?>" alt="service info">
                                    <div class="position-absolute title">
                                        <h4><?= $servicesolution[0]['title']; ?></h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-sm-6 col-md-6 col-md-3 col-lg-6 position-relative imgservices mt-5" role="presentation">
                                <a class="nav-link" id="pills-logiciel-tab" data-toggle="pill" href="#pills-logiciel" role="tab" aria-controls="pills-logiciel" aria-selected="false">
                                    <img src="<?= $servicesolution[1]['image']['url'] ?>" alt="service info">
                                    <div class="position-absolute title">
                                        <h4><?= $servicesolution[1]['title']; ?></h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- CONTENT SERVICES -->
                        <div class="tab-content blocservices" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-ged" role="tabpanel" aria-labelledby="pills-ged-tab">
                                <div class="container col-12">
                                    <div class="row bg-blue p-5">
                                        <div class="">
                                            <p class="p1"><?= $servicesolution3[0]['texte'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center bg-white p-5">

                                        <?php foreach ($servicesolution2 as $soluce2) : ?>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                                <div class="col-12">
                                                    <img class="picto-soluce" src="<?= $soluce2['picto']['url'] ?>" alt="picto" style="width:50%;">
                                                </div>
                                                <div class="col-12">
                                                    <p class="p3 mt-3"><?= $soluce2['textepicto']; ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="row p-5 bg-blue">
                                        <div class="">
                                            <p class="p1"><?= $servicesolution3[0]['texte2'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade blocservices" id="pills-logiciel" role="tabpanel" aria-labelledby="pills-logiciel-tab">
                                <div class="container">
                                    <div class="row bg-blue p-5">
                                        <div class="">
                                            <p class="p1"><?= $servicesolution3[1]['texte'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row bg-white justify-content-center p-5">

                                        <?php foreach ($servicesolution4 as $soluce4) : ?>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                                <div class="col-12">
                                                    <img class="picto-soluce" src="<?= $soluce4['picto']['url'] ?>" alt="picto" style="width:50%;">
                                                </div>
                                                <div class="col-12">
                                                    <p class="p3 mt-3"><?= $soluce4['textepicto']; ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="row bg-blue p-5">
                                        <div class="">
                                            <p class="p1"><?= $servicesolution3[1]['texte2'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto ">
                        <div class="col-6 button bg-lightBlue mx-auto mb-5 mt-5 p-3">
                            <a href=""><i class="fas fa-caret-right"></i> QUELLE EST CELLE QUI VOUS CONVIENDRA ?</a>
                        </div>
                    </div>
                </div>
                <!-- FIN SERVICES SOLUTIONS -->
            </div>

            <div class="row bg-darkGrey ImpressionSolutions2">

            </div>

            <!-- END MATERIEL TAB CONTENT-->
        </div>
    </div>

    <!-- TAB END -->

</div>



<?php
get_footer();
