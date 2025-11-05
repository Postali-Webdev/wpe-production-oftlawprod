<?php
/**
 * AboutTemplate
 * Template Name: Practice Areas
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>



<?php if ( is_page (array( 443, 551 ))): ?>
    <section id="page-banner-interior">
        <?php get_template_part('block', 'banner-practiceareas-blog');?>
    </section>
<?php else: ?>
    <section id="page-banner-interior">
        <?php get_template_part('block', 'banner-practiceareas-outbreaks');?>
    </section>
<?php endif; ?>




<?php the_content(); ?>


<?php if( have_rows('content_block_left_image') ): ?>
    <?php while( have_rows('content_block_left_image') ):
            the_row();
    ?>


    <section id="right-content-block">
        <div class="container">

            <?php if( have_rows('on-page_nav_menu_items') ): ?>
                <div class="on-page-nav desktop columns-main">
                    <div class="column-fourth">
                        <h3>On This Page</h3>
                    </div>
                    <div class="column-three-fourths">
                        <ul>
                        <?php while( have_rows('on-page_nav_menu_items') ): the_row(); ?>  
                            <li><a data-scroll href="#<?php the_sub_field('menu_item_link'); ?>" title="<?php the_sub_field('menu_item_name'); ?>"><?php the_sub_field('menu_item_name'); ?></a></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>   
                </div>
            <?php endif; ?> 

            <?php if( get_sub_field('highlight') ): ?>
                <p class="highlight"><?php the_sub_field('highlight'); ?></p>
            <?php endif; ?>

			<h2><?php the_sub_field('headline'); ?></h2>
			<div class="columns-main">
				<div class="column">
					<img src="<?php the_sub_field('left_image'); ?>" alt="left sidebar image">
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

<section id="recoveries" class="lightgray">
	<div class="container">
		<?php get_template_part('block', 'notable-results');?>
	</div>
</section>


<?php if( have_rows('content_block-right_sidebar') ): ?>
    <?php while( have_rows('content_block-right_sidebar') ):
            the_row();
    ?>

    <section id="left-content-block">
        <div class="container">
			<div class="columns-main">
                <div class="column">
                <?php if( have_rows('main_content_block') ): ?>
                <?php while( have_rows('main_content_block') ):
                        the_row();
                ?>
                    <?php the_sub_field('main_content_block_top'); ?>
                    <div class="quote"><?php the_sub_field('quote_block'); ?></div>
                    <?php the_sub_field('main_content_block_bottom'); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                </div> 
				<div class="column">
                    <?php get_template_part('block', 'sidebar-cta');?>
				</div>
				
			</div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php if ( is_page (array( 443, 551 ))): ?>
    <section id="footer-contact">
        <?php get_template_part('block', 'footer-contact-pi');?>
    </section>
<?php else: ?>
    <section id="award-scroller">
        <div class="container">
            <?php get_template_part('block', 'award-scroller');?>
        </div>
    </section>
    <section id="footer-contact">
        <?php get_template_part('block', 'footer-contact-pi');?>
    </section>
<?php endif; ?>


<?php get_footer(); ?>