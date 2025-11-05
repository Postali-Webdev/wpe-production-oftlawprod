<?php
/**
 * Sidebar CTA
 * @package Postali Parent
 * @author Postali LLC
 */

?>
<div class="sidebar-checklist">
<p>Signs of Food Poisoning &amp; Contamination</p>

<ul>
<li>Diarrhea </li>
<li>Nausea </li>
<li>Headache</li>
<li>Severe Abdominal pain </li>
<li>Vomiting </li>
<li>Hot and cold flashes </li>
<li>fever</li>
</ul>
</div>

<div class="sidebar-cta-container">
    <img src="/wp-content/uploads/2024/09/sidebar-cta.jpg" alt="Contact OFT Today">
    <div class="sidebar-cta">
        <?php if ( is_page (array( 443, 551 ))): ?>
            <p>If you or a loved one has been injured, <a class="emerald italic" href="/contact/" alt="Contact OFT Law Today">contact us today.</a></p>
        <?php else: ?>
            <p>If you’re experiencing signs of food poisoning, <a class="emerald italic" href="/contact/" alt="Contact OFT Law Today">contact us today.</a></p>
        <?php endif; ?>
        <p><span class="emerald">PH</span> | <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call OFT Law Today"><?php the_field('global_phone','options'); ?></a><br>
        <span class="emerald">EM</span> | <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email OFT Law Today"><?php the_field('global_email','options'); ?></a></p>
    </div>
    <div class="best-lawyers"><img src="/wp-content/uploads/2020/11/OFT-BestLawyers-2.png" alt="Best Lawyers 2021"></div>
</div>