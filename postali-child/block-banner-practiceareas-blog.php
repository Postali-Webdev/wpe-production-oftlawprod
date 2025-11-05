<?php
/**
 * Banner Styles
 * @package Postali Parent
 * @author Postali LLC
 */

$args = array (
	'post_type'              => 'post',
	'posts_per_page'         => -1,
	'order'                  => 'DESC',
    'orderby'                => 'date',
);
$blogs = new WP_Query( $args );

?>


<div class="recent-cases">

    <div class="banner-interior">
        <div class="breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
            <div class="container">
                <div class="columns-main">
                <h1><?php the_title(); ?></h1>
                    <div class="column-half">
                        <div class="header-contact">
                            <div class="cta-contact">
                                <div class="cta-phone">
                                    <p class="highlight">Give us a call</p>
                                    <div class="hero-cta"> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call us today!"><?php the_field('global_phone','options'); ?></a><br>
							<a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a>
                                    </div>
                                </div>
                                <div class="cta-email">
                                    <p class="highlight">Email</p>
                                    <div class="hero-cta"> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email us today!"><?php the_field('global_email','options'); ?></a></div>
                                </div>
                            </div>
                            <p><?php the_field('right_copy'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="recent-news">
        <div id="recent-news-slides-2">
                    
            <?php $totalposts =  $blogs->found_posts ?>
            <?php $counter = 1 ?>
            <?php while( $blogs->have_posts() ) :  $blogs->the_post(); 
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            ?>         
                <div class="slide">
                    <div class="slide-container">
                        <div class="recent-news-featured-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">&nbsp;</div>
                        <div class="recent-news_content">
                            <div class="recent-news-title">Recent Posts</div>
                            <p><a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="recent-news_link"><?php the_title(); ?></a></p>
                            <div class="counter-container">
                                <?php echo $counter; ?> / <?php echo $totalposts ?>
                            </div>
                            <?php $counter++; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <div class="prev-next-container"><div id="news-slides-prev-2"><span class="icon-drw-chevron-left"></span></div><div id="news-slides-next-2"><span class="icon-drw-chevron-right"></span></div></div>
    </div>
</div>