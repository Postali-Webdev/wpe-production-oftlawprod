<?php
/**
 * CPT Block
 * @package Postali Parent
 * @author Postali LLC
 */
// WP_Query arguments
$args = array (
	'post_type'              => 'recentoutbreaks',
	'posts_per_page'         => -1,
	'order'                  => 'DESC',
    'orderby'                => 'date',
    'meta_key'		         => 'outbreak_status',
	'meta_value'	         => 'current'
);
$recent_news = new WP_Query( $args );
?>
    <div class="recent-news">
    <div id="recent-news-slides-2">
        
    <?php $totalposts =  $recent_news->found_posts; ?>
        <?php $counter = 1; ?>
        <?php while( $recent_news->have_posts() ) :  $recent_news->the_post(); 
        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        ?>
                
                <div class="slide">
                    <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>">
                    <span class="slide-container">
                        <span class="recent-news-featured-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">&nbsp;</span>
                        <span class="recent-news_content">
                            <span class="recent-news-title">Current Outbreaks</span>
                            <p><?php the_title(); ?></p>
                            <span class="counter-container">
                                <?php echo $counter; ?> / <?php echo $totalposts ?>
                            </span>
                            <?php $counter++; ?>
                        </span>
                    </span> 
                </a>
                </div>
                
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="prev-next-container"><div id="news-slides-prev-2"><span class="icon-drw-chevron-left"></span></div><div id="news-slides-next-2"><span class="icon-drw-chevron-right"></span></div></div>
    </div>
