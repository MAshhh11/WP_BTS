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
</div>


<?php
get_footer();
