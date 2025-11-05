<?php
/**
 * Template Name: Interior
 *
 * @package Postali Child
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<?php get_template_part('block', 'banner-interior');?>
</section>

<section id="left-content-block">
        <div class="container">
			<div class="columns-main">
                <div class="column">
                    <?php the_content(); ?>
                </div> 
				<div class="column">
                    <?php get_template_part('block', 'sidebar-cta');?>
				</div>
				
			</div>
        </div>
    </section>



<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact');?>
</section>

<?php get_footer(); ?>