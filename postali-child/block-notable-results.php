<?php
/**
 * CPT Block
 * @package Postali Parent
 * @author Postali LLC
 */
// WP_Query arguments
			$custom_query = new WP_Query( 
			    array(
					'post_type' => 'results', 
					'post_status' => 'publish',
			    ) 
			);
         ?>
            
    <h2 class="bigger">Notable Recoveries</h2>
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
