<?php
/**
 * 404 Page Not Found.
 *
 * @package Postali Child
 * @author Postali LLC
**/
get_header(); ?>

<section id="page-banner-interior">
<div class="banner-interior">
    <div class="breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
    <div class="container">
        <div class="columns-main">
            <div class="column-half">
                <h1>Page Not Found</h1>
                <div class="header-contact">
                    <span class="emerald">PH: </span><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a><br>
                    <span class="emerald">EM: </span><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a>
                </div>
            </div>
            <div class="column-half">
                <p><?php the_field('right_copy'); ?></p>
            </div>
        </div>
    </div>
</div>
</section>

<section id="error404">
	<div class="container">
		<div class="columns-main">
			<div class="column-half">
				<p>We apologize but the page you're looking for could not be found. Perhaps you're looking for one of these pages?</p>
				<ul class="single">
					<li><a href="/about/" >About the Firm</a></li>
						<li ><a href="/" >Cases We Handle</a>
							<ul class="children">
								<li ><a href="/e-coli/">E. Coli Lawyers</a></li>
								<li><a href="/hepatitis-a/">Hepatitis A Lawyers</a></li>
								<li><a href="/cyclospora/">Lawyers for Cyclospora Outbreaks</a></li>
								<li><a href="/listeria/">Listeria Outbreak Lawyers</a></li>
								<li><a href="/personal-injury/">Minnesota Personal Injury Lawyers</a></li>
								<li><a href="/wrongful-death/">Minnesota Wrongful Death Lawyers</a></li>
								<li><a href="/salmonella/">Salmonella Outbreak Lawyers</a></li>
							</ul>
						</li>
							<li><a href="current-outbreaks/">Recent Outbreaks</a></li>
							<li><a href="blog/">Legal Blog</a></li>
							<li><a href="contact/">Contact Us </a></li>
				</ul>
				<p>If not, <a class="link-404" href="/">click here</a> to return to the homepage.</p>
				<!-- TODO: Do we need this? Leaving it commented out for now -->
				<?php // get_search_form(); ?>
			</div>
			<div class="column-half">
				<img src="/wp-content/uploads/2019/09/404.jpg" title="Page Not Found!">
			</div>
		</div>
	</div>
</section>

<section id="footer-contact">
	<?php get_template_part('block', 'footer-contact');?>
</section>

<!-- #content -->

<?php get_footer();
