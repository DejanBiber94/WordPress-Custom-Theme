<?php

get_header(); ?>



<section id="post-section" class="container">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <h2><?php the_title(); ?></h2>

            <div class="post-content-mb-4">
                <?php the_content(); ?>
            </div>
    
            <?php if (function_exists('get_field')) :
                $gallery = get_field('gallery_post');
                 if ($gallery) : ?>
                    <div class="row g-3 post-gallery">
                        <?php foreach ($gallery as $image) : ?>
                            <?php
                            $image_url = $image['url'];
                            $image_alt = $image['alt'];
                            $image_thumb = $image['sizes']['medium'];
                            ?>
                            <div class="col-md-4 col-sm-6 post-gallery-item">
                                <a href="<?php echo esc_url($image_url); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($image_alt); ?>">
                                    <img src="<?php echo esc_url($image_thumb); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="img-fluid rounded border">
                                </a>
                            </div>
                        <?php endforeach; ?>
                     </div>
                <?php endif; ?>
            <?php endif; ?>
    <?php endwhile; endif; ?>
</section>

<?php get_footer();