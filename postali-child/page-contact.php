<?php
/**
 * ContactTemplate
 * Template Name: Contact
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner-interior">
	<?php get_template_part('block', 'banner-contact');?>
</section>


<section id="contact-us">
    <div class="container">
        <div class="contact-form">
            <h2 class="bigger centered">Send us a Message</h2>
            <?php echo do_shortcode("[gravityform id='2' title='false']"); ?>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.3899945649287!2d-93.27733008445882!3d44.9763880790982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b3330b62e8e86f%3A0x7f311e740f62f3ce!2sOFT%20Food%20Safety%20%26%20Injury%20Lawyers!5e0!3m2!1sen!2sus!4v1675783997144!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php get_footer(); ?>
