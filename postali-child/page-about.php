<?php
/**
 * AboutTemplate
 * Template Name: About
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<?php get_template_part('block', 'banner-interior');?>
</section>


<?php the_content(); ?>


<?php if( have_rows('content_block_left_image') ): ?>
    <?php while( have_rows('content_block_left_image') ):
            the_row();
    ?>

    <section id="right-content-block">
        <div class="container">
			<p class="highlight"><?php the_sub_field('highlight'); ?></p>
			<h2><?php the_sub_field('headline'); ?></h2>
			<div class="columns-main">
				<div class="column">
					<img src="<?php the_sub_field('left_image'); ?>" alt="<?php the_sub_field('photo_caption'); ?>">
					<div class="caption-box"><?php the_sub_field('photo_caption'); ?></div>
					<div class="best-lawyers">
						<img src="/wp-content/uploads/2021/11/oft-best-law-firms-2.png" alt="Best Lawyers 2021">
						<img src="/wp-content/uploads/2021/11/about-page-attorney-at-law-badge.png" alt="Attorney at law magazine law firm of the month">
					</div>
				</div>
				<div class="column">
					<?php the_sub_field('main_content_block'); ?>
				</div>
			</div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>

<section id="recoveries" class="lightgray">
	<div class="container">
		<?php get_template_part('block', 'notable-results');?>
	</div>
</section>

<?php if( have_rows('content_block_2_left_image') ): ?>
    <?php while( have_rows('content_block_2_left_image') ):
            the_row();
    ?>

    <section id="right-content-block">
        <div class="container">
			<h2 class="bigger"><?php the_sub_field('headline'); ?></h2>
			<h2><?php the_sub_field('subheadline'); ?></h2>
			<div class="columns-main">
				<div class="column">
					<img src="<?php the_sub_field('left_image'); ?>">
					<div class="caption-box"><?php the_sub_field('photo_caption'); ?></div>
				</div>
				<div class="column">
					<?php the_sub_field('main_content_block'); ?>
				</div>
			</div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>

<section id="award-scroller">
    <div class="container">
        <?php get_template_part('block', 'award-scroller');?>
    </div>
</section>

<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact-pi');?>
</section>

<?php get_footer(); ?>