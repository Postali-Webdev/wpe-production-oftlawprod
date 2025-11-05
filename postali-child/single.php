<?php
/**
 * Single - Blog Posts
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<div class="banner-interior">
    <div class="breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
    <div class="container">
        <p class="highlight"><?php the_date(); ?></p>
        <div class="columns-main">
        <h1><?php the_title(); ?></h1>
        <span class="spacer-30"></span>
            <div class="column-half">
            <div class="header-contact">
            <div class="cta-contact">
					<div class="cta-phone">
						<p class="highlight">Give us a call</p>
						<div class="hero-cta"> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call us today!"><?php the_field('global_phone','options'); ?></a><br>
							<a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a>
					</div>
					<div class="cta-email">
						<p class="highlight">Email</p>
						<div class="hero-cta"> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email us today!"><?php the_field('global_email','options'); ?></a></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section id="left-content-block">
    <div class="container">
        <div class="columns-main">
            <div class="column">
                <!-- the content! -->
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                    <div class="recent-news-featured-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">&nbsp;</div>
                    <div class="caption-box">
                        <?php the_field('photo_caption'); ?>
                    </div>
                    <div class="spacer-60"></div>
                    <p class="highlight">Posted by: OFT Food Safety & Injury Lawyers</p>
                    <div class="spacer-30"></div>
                    <?php the_content(); ?>
                <!-- end content -->
            </div>
            <div class="column">
                <?php get_template_part('block', 'sidebar-cta');?>
            </div>
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