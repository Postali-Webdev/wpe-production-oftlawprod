<?php
/**
 * Cases Template
 * Template Name: Cases We Handle
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<?php get_template_part('block', 'banner-interior');?>
</section>

<section class="recent-cases">
	<?php get_template_part('block', 'recent-news');?>
</section>

<section class="lightgray">
    <div class="container">
        <h2 class="bigger centered">Foodborne Illness & Safety</h2>
        <div class="practice-areas">

            <!-- foodborne illness categories -->

            <?php if( have_rows('practice_area_foodborne') ): ?>
                <?php while( have_rows('practice_area_foodborne') ):
                    the_row();
                ?>

                    <?php if( get_sub_field('practice_area_link') ): ?>
                        <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>" class="practice-area-buttons"><?php the_sub_field('practice_area_title'); ?></a>
                    <?php else: ?>
                        <span class="practice-area-buttons not-linked"><?php the_sub_field('practice_area_title'); ?></span>
                    <?php endif; ?>           

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <span class="spacer-60"></span>

        <h2 class="bigger centered">Other Practice Areas</h2>
        <div class="practice-areas">

            <!-- foodborne illness categories -->

            <?php if( have_rows('practice_area_other') ): ?>
            <?php while( have_rows('practice_area_other') ):
                    the_row();
            ?>

                <?php if( get_sub_field('practice_area_link') ): ?>
                        <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>" class="practice-area-buttons"><?php the_sub_field('practice_area_title'); ?></a>
                    <?php else: ?>
                        <span class="practice-area-buttons not-linked"><?php the_sub_field('practice_area_title'); ?></span>
                    <?php endif; ?>  

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact');?>
</section>

<?php get_footer(); ?>