<?php
/**
 * archive - Blog
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<div class="banner-interior">
    <div class="breadcrumbs"><p id="breadcrumbs"><span><span><a href="/">Homepage</a> &gt; <span class="breadcrumb_last" aria-current="page">Case Results</span></span></span></p></div>
    <div class="container">
        <div class="columns-main">
            <div class="column-half">
                <h1>Case Results</h1>
                <span class="spacer-30"></span>
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
                            'post_type'              => 'posts',
                            'posts_per_page'         => -1,
                            'order'                  => 'ASC',
                            'orderby'                => 'date',
                        );
                        $recent_news = new WP_Query( $args );
                        ?>
                        <div class="results-container">
                        <?php while( $recent_news->have_posts() ) :  $recent_news->the_post(); 
                            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                            ?>  
                                <div class="single-result">
                                    <div class="single-result-content">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="highlight"><?php the_date(); ?></p>
                                        <span><a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="recent-news_link">View Full Result</a></span>
                                    </div>
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