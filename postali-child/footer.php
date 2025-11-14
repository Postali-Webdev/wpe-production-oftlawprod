<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

<!-- footer panels, social media, etc -->

<section class="footer-details">
	<div class="columns-main">
		<div class="column-full"><img src="/wp-content/uploads/2019/09/logo-header.png" title="Osterholm, Flaherty & Torvik"><br>
		<p><span class="emerald">PH</span> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a> &nbsp; &nbsp; &nbsp;<br><span class="emerald">EM</span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a></p>
		</div>
		<div class="spacer-30"></div>
		<div class="column-third"><?php the_field('contact_block_content','options'); ?></div>
		<div class="column-third" id="footer-menu">
            <nav role="navigation">
			<?php
				$args = array(
					'container'      => false,
					'theme_location' => 'footer-nav',
				);
				wp_nav_menu( $args );
			?>
            </nav>
		</div>
		<div class="column-third">
            <?php the_field('footer_copy_block','options'); ?>
            <?php if(is_page_template('front-page.php')) { ?>
            <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:10px 0;"></a>
            <?php } ?>
        </div>
	</div>
</section>

<section class="footer-social">
	<a href="https://www.facebook.com/oftlaw/" title="OFT Facebook" target="_blank" rel="noopener noreferrer"><span class="icon-RS_facebook"></span></a>
	<a href="https://twitter.com/OFTLaw" title="OFT Twitter"><span class="icon-RS_twitter" target="_blank"></span></a>
	<a href="https://www.linkedin.com/company/oftlaw/" title="OFT LinkedIn"><span class="icon-RS_linkedIn" target="_blank"></span></a>
</section>

<!-- #front-page -->

</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/820320407/07e214cefc5bfb707bd1/12/swap.js"></script>
</body>
</html>


