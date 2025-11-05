<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div id="front-page">

<!-- header banner -->

<section class="lightgray" id="hero-header">
	<div class="container">
		<div class="columns-main">
			<div class="column-half">
				<h1><?php the_field('hero_section_title'); ?></h1>
				<div class="hero-headline"><?php the_field('hero_section_headline'); ?></div>
				<div class="cta-contact">
					<div class="cta-phone">
						<p class="highlight">Give us a call</p>
						<div class="hero-cta">
							<a href="tel:<?php the_field('global_phone','options'); ?>" title="Call us today!"><?php the_field('global_phone','options'); ?></a><br>
							<a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a>
						</div>
					</div>
					<div class="cta-email">
						<p class="highlight">Email</p>
						<div class="hero-cta"> <a href="mailto:advice@oftlaw.com" title="Email us today!"><?php the_field('global_email','options'); ?></a></div>
					</div>
				</div>
			</div>
			<div class="column-half">
				<?php the_field('hero_right_column'); ?>
			</div>
		</div>
	</div>
</section>

<!-- recent outbreaks block -->

<section class="recent-cases">
	<?php get_template_part('block', 'recent-news');?>
</section>

<!-- our promise -->

<section class="taller">
	<div class="container">
	<p class="highlight"><?php the_field('promise_section_title'); ?></p>
	<h2><?php the_field('promise_section_headline'); ?></h2>
	<div class="spacer-60"></div>
		<div class="columns-main">
			<div class="column-third">
				<img src="<?php the_field('promise_left_column_image'); ?>" alt="<?php the_field('promise_left_column_image_alt'); ?>" class="left-image">
			</div>
			<div class="column-two-thirds">
				<?php the_field('promise_right_column'); ?>
			</div>
		</div>
	</div>
</section>

<!-- badges / awards block -->

<section class="hp_awards_block">
	<div class="container">
		<div class="columns-main">
            <?php if( have_rows('hp_awards_block') ): ?>
            <?php while( have_rows('hp_awards_block') ): the_row(); ?>  
                <div class="column-third">
                    <?php 
                    $image = get_sub_field('award_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?> 
		</div>
	</div>
</section>

<!-- begin attorneys content -->

<section class="smaller" id="attorneys">
	<div class="container">
		<p class="highlight centered"><?php the_field('attorneys_section_title'); ?></p>
		<h2 class="centered no-margin"><?php the_field('attorneys_section_headline'); ?></h2>
	</div>
</section>

<!-- attorneys content - rollover boxes -->

<div class="attorney-content">
<section class="our-team">
	<div class="container">
		<div class="bio-buttons">
			<?php the_field('attorneys_button_content'); ?>
		</div>
	</div>
</section>

<!-- attorneys content - bios & full images -->

<section>
	<div class="container">
		<div id="tab-1" class="bio-content current">
			<div class="columns-main">
				<div class="column-half">
					<?php the_field('attorney_bio_content_osterholm'); ?>
				</div>
				<div class="column-half">
					<img src="<?php the_field('attorney_headshot_osterholm'); ?>" alt="Ryan Osterholm">
				</div>
			</div>
		</div>

		<div id="tab-2" class="bio-content">
			<div class="columns-main">
				<div class="column-half">
					<?php the_field('attorney_bio_content_flaherty'); ?>
				</div>
				<div class="column-half">
					<img src="<?php the_field('attorney_headshot_flaherty'); ?>" alt="Brendan Flaherty">
				</div>
			</div>
		</div>

		<div id="tab-3" class="bio-content">
			<div class="columns-main">
				<div class="column-half">
					<?php the_field('attorney_bio_content_torvik'); ?>
				</div>
				<div class="column-half">
					<img src="<?php the_field('attorney_headshot_torvik'); ?>" alt="Bart Torvik">
				</div>
			</div>
		</div>

		<div id="tab-4" class="bio-content">
			<div class="columns-main">
				<div class="column-half">
					<?php the_field('attorney_bio_content_gray'); ?>
				</div>
				<div class="column-half">
					<img src="<?php the_field('attorney_headshot_gray'); ?>" alt="Elanor Gray">
				</div>
			</div>
		</div>

	</div>
</section>
</div>

<!-- practice areas -->

<section class="lightgray" id="practiceareas">
	<div class="container">
		<div class="columns-main">
			<div class="column-third">
				<?php the_field('practice_left_column'); ?>
			</div>
			<div class="column-two-thirds">
				<p class="highlight"><?php the_field('practice_section_title'); ?></p>
				<h2 class="bigger"><?php the_field('practice_section_headline'); ?></h2>
				<?php the_field('practice_right_column'); ?>
			</div>
		</div>
	</div>
</section>

<!-- recent outbreaks block - second -->

<section class="recent-cases" id="second">
	<?php get_template_part('block', 'recent-news-2');?>
</section>

<!-- additional practice areas - top section -->

<section>
	<div class="container">
		<div class="columns-main">
			<div class="column-third">
				<img src="<?php the_field('additional_panel_2_left_image'); ?>" alt="<?php the_field('additional_panel_2_left_image_alt'); ?>" class="left-image">
			</div>
			<div class="column-two-thirds">
				<?php the_field('additional_panel_2_right_column'); ?>
			</div>
		</div>
	</div>
</section>

<!-- additional practice areas - bottom section -->

<section class="smaller">
	<div class="container">
		<h2 class="centered no-margin bigger"><?php the_field('additional_section_title'); ?></h2>
	</div>
</section>
<section class="lightgray">
	<div class="container">
		<div class="columns-main">
			<div class="column-half">
				<?php the_field('additional_left_column'); ?>
			</div>
			<div class="column-half">
				<?php the_field('additional_right_column'); ?>
			</div>
		</div>
	</div>
</section>

<!-- our promise -->

<section>
	<div class="container">
	<p class="highlight"><?php the_field('poisoning_section_title'); ?></p>
	<h2><?php the_field('poisoning_section_headline'); ?></h2>
	<div class="spacer-60"></div>
		<div class="columns-main">
			<div class="column-third">
				<img src="<?php the_field('poisoning_left_column_image'); ?>" alt="<?php the_field('poisoning_left_column_image_alt'); ?>" class="left-image">
			</div>
			<div class="column-two-thirds">
				<?php the_field('poisoning_right_column'); ?>
			</div>
		</div>
	</div>
</section>

<!-- accordions -->

<section class="lightgray">
    <div class="container">
	<h2 class="centered"><?php the_field('faq_section_title'); ?></h2>
	<div class="spacer-30"></div>
    <?php if( have_rows('foodborne_illness_faq') ): $count = 0;?>
    <?php while( have_rows('foodborne_illness_faq') ):
            the_row();
			$count++;
    ?>
            <div class="accordions">
                <ul>
                    <li><input aria-labelledby="accordion-title-<?php echo $count; ?>" checked="checked" type="checkbox"><i></i><br>
                    <h2 id="accordion-title-<?php echo $count; ?>" class="smaller"><?php the_sub_field('faq_question'); ?></h2>
                        <p>
                           <?php the_sub_field('faq_answer'); ?><br>
                        </p>
                    </li>
                </ul>
            </div>

    <?php endwhile; ?>
<?php endif; ?>
    </div>
</section>

<!-- bottom trust panel -->

<section>
	<div class="container">
	<p class="highlight"><?php the_field('trust_highlight'); ?></p>
	<h2><?php the_field('trust_section_title'); ?></h2>
	<div class="spacer-60"></div>
		<div class="columns-main">
			<div class="column-third">
				<img src="<?php the_field('trust_left_column_image'); ?>" alt="<?php the_field('trust_left_column_image_alt'); ?>" class="left-image">
			</div>
			<div class="column-two-thirds">
				<?php the_field('trust_content'); ?>
			</div>
		</div>
	</div>
</section>

<!-- contact section -->

<section class="contact">
	<div class="columns-main">
		<div class="column-first">
			<div class="column-inner">
				<?php the_field('contact_left_column'); ?>
			</div>
		</div>
		<div class="column-second" id="contact">
			<div class="column-inner">
				<?php the_field('contact_right_column'); ?>
			</div>	
		</div>
</section>

<?php get_footer();?>