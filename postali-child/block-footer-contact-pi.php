<?php
/**
 * Contact footer block
 * @package Postali child
 * @author Postali LLC
 */
?>
<div class="footer-contact-block">
    <div class="columns-main">
        <div class="column-third" id="contact-text">
            <h2>Schedule your <span class="emerald">Free</span> Consultation Today</h2>
            <p>We handle personal injury cases nationwide, offer 100% free consultations. There are no fees unless you recover compensation. </p>
            <div class="footer-contact-info">
                <span class="emerald">PH</span> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a><br>
                <a data-calltrk-noswap href="sms:<?php the_field('global_phone','options'); ?>" title="Text OFT Law" class="header-sms-link">Or Text Us</a><br>
                <span class="emerald">EM</span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a>
            </div>
        </div>
        <div class="column-third" id="contact-image">
            <a href="/contact/" title="Contact OFT Food Safety & Injury Lawyers Today">Contact Us</a>
        </div>
        <div class="column-third" id="about-firm">
            <a href="/about/" title="View Recent Outbreaks">About<br>The Firm</a>
        </div>
    </div>
</div>