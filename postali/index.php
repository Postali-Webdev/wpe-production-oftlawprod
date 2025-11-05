<?php
/**
 * archive - Recent Outbreaks
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<div class="banner-interior">
    <div class="breadcrumbs"><p id="breadcrumbs"><span><span><a href="/">Homepage</a> &gt; <span class="breadcrumb_last" aria-current="page">Current Outbreaks</span></span></span></p></div>
    <div class="container">
        <div class="columns-main">
            <div class="column-half">
                <h1>Current Outbreaks</h1>
                <div class="header-contact">
                    <span class="emerald">PH: </span><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a><br>
                    <span class="emerald">EM: </span><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a>
                </div>
            </div>
            <div class="column-half">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus nisi id porttitor faucibus. Fusce sit amet blandit urna. Pellentesque tincidunt at quam nec pellentesque.</p>
            </div>
        </div>
    </div>
</div>
</section>


	


        <section id="left-content-block">
            <div class="container">
                <div class="columns-main">
                    <div class="column">

                    <!-- current outbreaks -->

                    <?php 
                        $args = array (
                            'post_type'              => 'recentoutbreaks',
                            'posts_per_page'         => -1,
                            'order'                  => 'ASC',
                            'orderby'                => 'date',
                            'meta_key'		         => 'outbreak_status',
	                        'meta_value'	         => 'current'
                        );
                        $recent_news = new WP_Query( $args );
                        ?>
                        <p class="highlight">Current Outbreaks</p>
                        <div class="outbreaks-container">
                        <?php while( $recent_news->have_posts() ) :  $recent_news->the_post(); 
                            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                            ?>  
                                <div class="single-outbreak">
                                    <div class="single-outbreak-content">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="highlight"><?php the_date(); ?></p>
                                        <span><a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="recent-news_link">View Full Article</a></span>
                                    </div>
                                    <div class="single-outbreak-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></div>
                                </div>

                        <?php endwhile; wp_reset_postdata(); ?>
                        </div>

                        <div class="spacer-60"></div>

                        <!-- past outbreaks -->

                        <?php 
                        $args = array (
                            'post_type'              => 'posts',
                            'posts_per_page'         => -1,
                            'order'                  => 'ASC',
                            'orderby'                => 'date',
                        );
                        $recent_news = new WP_Query( $args );
                        ?>
                        <p class="highlight">Past Outbreaks</p>
                        <div class="outbreaks-container">
                        <?php while( $recent_news->have_posts() ) :  $recent_news->the_post(); 
                            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                            ?>  
                                <div class="single-outbreak">
                                    <div class="single-outbreak-content">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="highlight"><?php the_date(); ?></p>
                                        <span><a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="recent-news_link">View Full Article</a></span>
                                    </div>
                                    <div class="single-outbreak-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></div>
                                </div>

                        <?php endwhile; wp_reset_postdata(); ?>
                        </div>

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