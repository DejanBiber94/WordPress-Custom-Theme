<?php get_header(); ?>

<section class="about_text_section page_text_section">
    <div class="container about_text_container page_text_container">
        <div class="about_us_text_img_div page_text_img_div">
            <div class="about_us_text_div page_text_div">
                <?php the_content(); ?>
            </div>
            <?php if(get_field('page_image')): ?>
                <div class="about_us_image_div page_image_div">
                    <img class="about_us_image page_image" src="<?php the_field('page_image');?>" alt="image">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
