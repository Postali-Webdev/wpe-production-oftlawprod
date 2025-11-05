<?php
/**
 * award scroller
 * @package Postali Parent
 * @author Postali LLC
 */

?>
<P class="highlight">Awards & Accolades</p>

        <div id="awards-slides">
        <?php if( have_rows('firm_awards','options') ): ?>
    <?php while( have_rows('firm_awards','options') ):
            the_row();
    ?>
            <div class="slide">
                <div class="award-container">
                    <img src="<?php the_sub_field('badge_image'); ?>" alt="<?php the_sub_field('award_title'); ?>">
                    <p class="award-title"><?php the_sub_field('award_title'); ?></p>
                    <p><?php the_sub_field('award_description'); ?></p>
                </div>
            </div>
        
    <?php endwhile; ?>
<?php endif; ?>
</div>
<div class="prev-next-container"><div id="awards-slides-prev"><span class="icon-drw-chevron-left"></span></div><div id="awards-slides-next"><span class="icon-drw-chevron-right"></span></div></div>
