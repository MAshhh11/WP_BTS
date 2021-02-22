<?php

/**
 * Template Name: sav
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
    <div class="row sav-main-img" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>)">
        <div class="col-12 col-lg-4 quote p-5">
            <div class="row">
                <p class="">"Faire simple est probablement l’objectif le plus sophistiqué du monde"</p>
            </div>
            <div class="row col-12 col-lg-2">
                <p class="author">Steve Jobs</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 bg-white main">
            <div class="container">
                <div class="row mt-5 ml-3">
                    <h2>UN PROBLÈME À RÉSOUDRE ?</h2>
                </div>
                <div class="row ml-5">
                    <img src="<?php echo $asset ?>icone_titre.png" alt="logo_titre">
                </div>
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <?= the_content(); ?>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 sav-card p-5">
                        <div class="bloc-title bg-lightBlue p-3">
                            <h3>PAR TÉLÉPHONE</h3>
                        </div>
                        <div class="bloc-body bg-white py-3 px-3">
                            <img class="picto mt-3 mb-3" class="col-12 mx-auto" src="<?php echo $asset ?>sav_icone_tel@2x.png" alt="sav-tel">
                            <h4>+33 (0)5 56 79 03 28</h4>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 button bg-lightBlue mx-auto mb-3 mt-5 p-3">
                                <a href=""><i class="fas fa-caret-right"></i> DEMANDE DE RAPPEL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 sav-card mx-auto p-5">
                        <div class="bloc-title bg-blue p-3">
                            <h3>NOUS PRENONS LA MAIN À DISTANCE</h3>
                        </div>
                        <div class="bloc-body bg-white py-3 px-3">
                            <img class="picto mt-3 mb-3" src="<?php echo $asset ?>sav_icone_assistance@2x.png" alt="sav-tel">
                            <p>Savez-vous que 70% des SAV peuvent-être résolus à distance ?</p>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 button bg-lightBlue mx-auto mb-3 mt-5 p-3">
                                <a href=""><i class="fas fa-caret-right"></i> TELEMAINTENANCE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 bg-grey BlocSav">
        </div>
    </div>


</div>



<?php
get_footer();
