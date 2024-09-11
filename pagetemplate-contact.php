<?php
/* Template Name: Contact */

get_header(); ?>

<section class="first_section first_section_contact">
    <div class="first_section_bg_image first_section_bg_image_contact" style="background-image: url(<?php the_field('first_section_image');?>);">
        <div class="first_section_overlay"></div>
    </div>
    <div class="container first_section_container">
        <h1 class="headline headline_contact"><?php the_field('first_section_headline');?></h1>
    </div>
</section>

<section class="contact_section">
    <div class="container contact_container">
        <div class="row contact_row">
            <div class="col-md-5 contact_col_left">
                <div class="contact_image_div">
                    <img class="contact_image" src="<?php the_field('contact_image');?>" alt="image">
                </div>
                <div class="contact_data">
                    <div class="footer_col_text">
                        <a href="mailto:office@packsolution.rs">
<!--                        <a href="--><?php //the_field('mailto');?><!--">-->
                            <p><?php the_field('email');?></p>
                        </a>
                        <a href="tel:+381698242017">
<!--                        <a href="--><?php //the_field('tel');?><!--">-->
                            <p><?php the_field('phone');?></p>
                        </a>
                        <p><?php the_field('address');?></p>
                        <p><?php the_field('town');?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 contact_col_right">
                <?php echo do_shortcode(get_field('form_shortcode'));?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

