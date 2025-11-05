<?php
/**
 * archive - Results
 * Template Name: Case Results Landing
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
                <p>Our clients put their faith in us. That’s why every case, always gets our undivided attention and advocacy. Here is a sampling of results we’ve achieved.</p>
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
                            'post_type'              => 'results',
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
                                        <div class="column-three-fourths">
                                            <h3 class="emerald"><?php the_field('result_headline'); ?></h3>
                                            <span class="result-details"><?php the_field('result_snippet'); ?></span>
                                            <p><?php the_content(); ?></p>
                                            <p class="practice-area"><?php the_field('practice_area'); ?></p>
                                        </div>
                                        <div class="column-fourth">
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
                        </div>

                        <div class="spacer-60"></div>
                        <p class="disclaimer"><strong>Please note this is not a comprehensive list of our successes.</strong> The outcome of an individual case depends on a variety of factors unique to that case. Case results do not guarantee or predict a similar result in any similar or future case.</p>



                        </div> 
                        <div class="column">
                            <?php get_template_part('block', 'sidebar-cta');?>
                        </div>
                </div>
            </div>
        </section>


<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact-pi');?>
</section>

<?php get_footer(); ?>