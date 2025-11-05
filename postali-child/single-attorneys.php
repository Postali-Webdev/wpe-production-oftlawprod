<?php
/**
 * Single - Attorneys template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header();?>

<section class="lightgray" id="attorney-bio">
    <div class="breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
    <div class="container">	
        <div class="columns-main">
            <div class="column-half">
                <?php if( get_field('full_portrait') ) : ?>
                    <img src="<?php the_field('full_portrait'); ?>" alt="<?php the_field('title'); ?>" class="desktop-attorney-photo">
                <?php else : ?>
                    <div class="img-placeholder">
                        <p>Photo Coming Soon</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="column-half">
                <h1><?php the_title(); ?></h1>
                <?php if( get_field('full_portrait') ) : ?>
                    <img src="<?php the_field('full_portrait'); ?>" alt="<?php the_field('title'); ?>" class="mobile-attorney-photo">
                <?php else : ?>
                    <div class="img-placeholder mobile-img-placeholder">
                        <p>Photo Coming Soon</p>
                    </div>
                <?php endif; ?>
                <p class="highlight"><?php the_field('attorney_title'); ?></p>
                <div class="attorney-contact-box">
                <div class="columns-main">
                    <div class="column-fourth">
                    <span class="icon-phone"></span> <a href="tel:<?php the_field('phone'); ?>" title="Call OFT Law Today"><?php the_field('phone'); ?></a>
                    </div>
                    <div class="column-three-fourths">
                    <span class="icon-envelope"></span> <a href="mailto:<?php the_field('email'); ?>" title="Email <?php the_title(); ?> Today"><?php the_field('email'); ?></a>
                    </div>
                </div>
                </div>
                <?php the_field('main_bio'); ?>
            </div>
        </div>	
    </div>
</section>

<!-- notable recoveries for individual attorney -->

<section id="recoveries">
    <div class="container">
    <?php
/**
 * CPT Block
 * @package Postali Parent
 * @author Postali LLC
 */
// WP_Query arguments
            $attorney_result = get_field('attorney_results');
			$custom_query = new WP_Query( 
			    array(
					'post_type' => 'results', 
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                //    'tax_query' => array (
                //        array (
                //            'taxonomy' => 'results_attorney',
                //            'field' => 'slug',
                //            'terms' => $attorney_result
                //            ),
                //        ),
			    ) 
			);
         ?>
            
    <h2>Firm Results</h2>
    <div id="notable-results-slides">

        
        <?php if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
        ?>
                
                <div class="slide">
                <div class="slide-container">
                <div class="text-container">
                    <h3 class="emerald"><?php the_field('result_headline'); ?></h3>
                    <span class="result-details"><?php the_field('result_snippet'); ?></span>
                    <p class="practice-area"><?php the_field('practice_area'); ?></p>
                </div>
                <div class="separator"></div>
                <div class="attorney-container">
                <?php $post_object = get_field('attorney'); ?>
						<?php if( $post_object ): ?>
                                <?php $post = $post_object; setup_postdata( $post ); ?>      
                                    <div class="headshot-box" style="background-image:url(<?php the_field('headshot'); ?>);" alt="<?php the_title(); ?>"></div>
                                    <div class="attorney-link"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
                </div>
                </div>
                </div>

                
        <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <div class="prev-next-container"><div id="results-prev"><span class="icon-drw-chevron-left"></span></div><div id="results-next"><span class="icon-drw-chevron-right"></span></div></div>

	</div>
</section>

<!-- accordions -->

<section class="lightgray">
    <div class="container">
    <?php if( have_rows('accordions') ): $count = 0;?>
    <?php while( have_rows('accordions') ):
            the_row();
            $count++;
    ?>
            <div class="accordions">
                <ul>
                    <li><input aria-labelledby="accordion-title-<?php echo $count; ?>" checked="checked" type="checkbox"><i></i><br>
                    <h2 id="accordion-title-<?php echo $count; ?>"><?php the_sub_field('accordion_title'); ?></h2>
                        <p>
                            <?php if( have_rows('accordion_content') ): ?>
                            <?php while( have_rows('accordion_content') ):
                                    the_row();
                            ?>
                            &bull; <?php the_sub_field('accordion_item'); ?><br>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </p>
                    </li>
                </ul>
            </div>

    <?php endwhile; ?>
<?php endif; ?>
    </div>
</section>

<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact-pi');?>
</section>

<?php get_footer(); ?>