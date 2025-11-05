<?php
/**
 * Single - Recent Outbreaks
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<div class="banner-interior">
    <div class="breadcrumbs"><p id="breadcrumbs"><span><span><a href="/">Homepage</a> &gt; <span class="breadcrumb_last" aria-current="page">Current Outbreaks</span></span></span></p></div>
    <div class="container">
        <div class="skinny">
            <div class="columns-main">
                <div class="column-three-fourths">
                    <p class="highlight"><?php the_date(); ?></p>
                    <h1><?php the_title(); ?></h1>
                    <h3>If you have been affected by this outbreak, please get in touch with us for a free consultation.</h3>
                    <a class="anchor-button" href="#case-details">
                        <span>Jump To Case Details</span>
                        <span class="icon-drw-chevron-down"></span>
                    </a>
                </div>
                <div class="column-fourth">
                    <div class="header-contact">
                        <p class="highlight">by phone or email</p>
                        <span class="emerald">PH: </span><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a><br>
                        <span class="emerald">EM: </span><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a><br>
                                <a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a>
                    </div>
                </div>

                <div class="spacer-30"></div>
                <div class="outbreak-form-holder"><p class="highlight">HAVE YOU BEEN AFFECTED BY THIS OUTBREAK? CONTACT US.</p><?php echo do_shortcode("[gravityform id='1' title='false']"); ?></div>
            </div>
        </div>
    </div>
</div>
</section>


<section id="left-content-block">
    <span id="case-details"></span>
    <div class="container">
        <div class="columns-main">
            <div class="column">
                <p class="highlight">Outbreak Summary</p>
                <div class="spacer-30"></div>
                <span class="outbreak-summary"><?php the_field('outbreak_summary'); ?></span>
            </div>
            <div class="column">
                <?php get_template_part('block', 'sidebar-cta');?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <p class="highlight separator">More Details</p>
        <div class="spacer-60"></div>
        <div class="skinny">
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
            <div class="recent-news-featured-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">&nbsp;</div>
            <div class="caption-box">
                <?php the_field('photo_caption'); ?>
            </div>
            <div class="spacer-60"></div>
            <h2 class="bigger"><?php the_title(); ?></h2>
            <div class="spacer-30"></div>
            <?php the_content(); ?>
        </div>
    </div>
</section>


<section id="recoveries" class="lightgray">
	<div class="container">
		<?php get_template_part('block', 'notable-results');?>
	</div>
</section>


<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact');?>
</section>

<?php get_footer(); ?>