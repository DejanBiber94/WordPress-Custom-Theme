<?php
/* Template Name: About */

get_header(); ?>

<section class="first_section first_section_about">
    <div class="first_section_bg_image first_section_bg_image_about" style="background-image: url(<?php the_field('first_section_image');?>);">
        <div class="first_section_overlay"></div>
    </div>
    <div class="container first_section_container">
        <h1 class="headline headline_about"><?php the_field('first_section_headline');?></h1>
    </div>
</section>

<section class="about_text_section">
    <div class="container about_text_container">
        <div class="about_us_text_img_div">
            <div class="about_us_text_div">
                <?php the_field('about_us_text');?>
            </div>
            <div class="about_us_image_div">
                <img class="about_us_image" src="<?php the_field('about_us_image');?>" alt="image">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
