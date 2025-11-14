<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<link rel='preload' href='<?php echo $image[0]; ?>' as='image'>
<?php endif; ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FTW6KL');</script>
<!-- End Google Tag Manager -->

<!-- Add JSON Schema here -->
<?php 
// Global Schema
$global_schema = get_field('global_schema', 'options');
if ( !empty($global_schema) ) :
	echo '<script type="application/ld+json">' . $global_schema . '</script>';
endif;

// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
	echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FTW6KL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
                    <nav role="navigation">
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>	
                    </nav>		
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div id="mobile-nav">
			<?php
				$args = array(
					'container'      => false,
					'theme_location' => 'mobile-nav',
				);
				wp_nav_menu( $args );
			?>
		</div>

	</header>

    <div class="practice-area-on-page">
        <div class="container">

        <?php if(is_page_template('page-practiceareas.php')) { ?>
            <div class="on-page-nav collapsed">
                <div class="on-page-nav_title"><h3>On This Page</h3><span></span></div>
                <div class="on-page-nav_content">
                <?php if( have_rows('on-page_nav_menu_items') ): ?>    
                    <?php while( have_rows('on-page_nav_menu_items') ): the_row(); ?>  
                        <a class="nav-link" data-scroll href="#<?php the_sub_field('menu_item_link'); ?>" title="<?php the_sub_field('menu_item_name'); ?>"><?php the_sub_field('menu_item_name'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        <?php } ?>

        </div>
    </div>


<?php

$outbreaks = array (
	'post_type'              => 'recentoutbreaks',
    'meta_key'		         => 'outbreak_status',
	'meta_value'	         => 'current'
);
$recent_news = new WP_Query( $outbreaks );
$total_posts_found = $recent_news->found_posts;
$blogs = new WP_Query( $outbreaks );

?>

<?php if($total_posts_found > 0){ ?>

<div class="header-cta-container">
	<a class="header-phone" href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><span class="icon-phone"></span> Call Today &nbsp; | &nbsp; <?php the_field('global_phone','options'); ?></a>
</div>

<?php } ?>