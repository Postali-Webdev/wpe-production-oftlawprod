<?php
/**
 * Template Name: Sitemap
 *
 * @package Postali Child
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<?php get_template_part('block', 'banner-interior');?>
</section>

<section>
	<?php if (have_posts()) : 
		while (have_posts()) : the_post(); ?>
            <div class="container">
				<div class="columns-main">
                <div class="column-half-left">
					<h2>Pages</h2> 
					<ul class="single">
						<?php wp_list_pages("title_li=" ); ?>
					</ul> 
				</div>
				<div class="column-half-right">
					<h2>Blog Posts</h2> 
					<ul class="single">
						<?php wp_get_archives('type=postbypost'); ?>
					</ul>
				</div>
			</div>
	</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact');?>
</section>

<?php get_footer(); ?>