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
            <div class="column-half">
                <h1><?php the_title(); ?></h1>
                <div class="header-contact">
                <div class="cta-contact">
					<div class="cta-phone">
						<p class="highlight">Give us a call</p>
						<div class="hero-cta"> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call us today!"><?php the_field('global_phone','options'); ?></a><br>
							<a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a>
                        </div>
					</div>
					<div class="cta-email">
						<p class="highlight">Email</p>
						<div class="hero-cta"> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email us today!"><?php the_field('global_email','options'); ?></a></div>
					</div>
				</div>
                
                </div>
            </div>
            <?php if( get_field('right_copy') ) { ?>
            <div class="column-half">
                <p><?php the_field('right_copy'); ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>