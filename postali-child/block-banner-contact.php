<?php
/**
 * Banner Styles
 * @package Postali Parent
 * @author Postali LLC
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<div class="banner-interior">
    <div class="breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
    <div class="container">
        <div class="columns-main">
            <div class="column-two-thirds">
                <h1><?php the_title(); ?></h1>
                <h3>Call, text, or email us for a 100% free, no obligation consultation.   </h3>
            </div>
            <div class="column-third">
                <div class="header-contact">
                    <p class="highlight">Tap to call</p><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a><br>
                    <a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a>
                    <p class="highlight">Email</p><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a>                    
                </div>
            </div>
        </div>
    </div>
</div>