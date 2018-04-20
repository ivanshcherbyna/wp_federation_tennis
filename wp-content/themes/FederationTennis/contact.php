<?php
/*
 * Template Name: Contact form
 */
get_header();
global $mytheme;
?>
<main role="main">
<div class="contact-wrap">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

       <div class="contact-content">
           <div class="contact-section"><?php the_content(); // Dynamic Content ?></div>
       </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="contact-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10707.793201011758!2d35.094172835997945!3d47.85996451723425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc66c57017b5eb%3A0x6455431f9311fd8b!2z0KHQvtGG0LPQvtGA0L7QtCwg0JfQsNC_0L7RgNC-0LbRjNC1LCDQl9Cw0L_QvtGA0L7QttGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2OTAwMA!5e0!3m2!1sru!2sua!4v1523220249817" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--        <div class="contact-heading">--><?php //echo $mytheme['contact-head-text'];?><!--</div>-->
<!--        <div class="contact-subheading">--><?php //echo $mytheme['contact-subhead-text'];?><!--</div>-->
        <div class="inputs-wrap">
            <?php
            echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]');
            ?>
        </div>
    </div>

</div>

</main>
<?php

get_footer();
?>
