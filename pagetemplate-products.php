<?php
/* Template Name: Products */

get_header(); ?>

<section class="first_section first_section_products">
    <div class="first_section_bg_image first_section_products_bg_image" style="background-image: url(<?php the_field('first_section_image');?>);">
        <div class="first_section_overlay"></div>
    </div>
    <div class="container first_section_container">
        <h1 class="headline headline_products"><?php the_field('first_section_headline');?></h1>
        <div class="headline_text_under"><?php the_field('first_section_subtitle');?></div>
        <?php if(get_field('first_section_button_text')): ?>
            <div class="button_wrapper">
                <a href="<?php the_field('first_section_button_url');?>" class="button headline_button"><?php the_field('first_section_button_text');?></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="dual_module products_jumbo_bags_section">
    <div class="container-fluid dual_module_container_fluid products_jumbo_bags_container_fluid">    <!-- relative for .dual_module_container  -->
        <div class="row dual_module_row_big products_jumbo_bags_row_big">
            <div class="col-md-5 dual_module_col_left products_jumbo_bags_col_left"></div>
            <div class="col-md-7 dual_module_col_right products_jumbo_bags_col_right"></div>
        </div>
        <div class="container dual_module_container">  <!-- absolute  -->
            <div class="row dual_module_row products_jumbo_bags_row">
                <div class="col-md-4 dual_module_col_small products_jumbo_bags_col_small">
                    <div class="dual_module_col_small_image  products_jumbo_bags_col_small_image" style="background-image: url(<?php the_field('dual_module_image');?>);">
                    </div>
                </div>
                <div class="col-md-8 dual_module_col_large products_jumbo_bags_col_large">
                    <div class="dual_module_headline products_jumbo_bags_headline"><?php the_field('dual_module_headline');?></div>
                    <div class="dual_module_col_large_text_left products_jumbo_bags_col_large_text_left">
                        <?php the_field('dual_module_text_left');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products_advantages_section">
    <div class="container products_advantages_container">
        <div class="products_advantages_headline"><?php the_field('products_advantages_headline');?></div>
        <div class="products_advantages_repeater_div">
            <?php
            if( have_rows('advantages') ):
                $loop_num = 0;
                while( have_rows('advantages') ) : the_row();
                    if ($loop_num % 2 == 0) { ?>
                        <?php if(get_sub_field('advantage')): ?>
                            <div class="advantage advantage_left">
                                <?= get_sub_field('advantage') ?>
                            </div>
                        <?php endif; ?>
                    <?php } else { ?>
                        <?php if(get_sub_field('advantage')): ?>
                            <div class="advantage advantage_right">
                                <?= get_sub_field('advantage') ?>
                            </div>
                        <?php endif; ?>
                    <?php }
                    $loop_num++;
                    endwhile; endif;?>
            <div class="products_advantages_timeline"></div>
        </div>
    </div>
</section>

<section class="products_types_of_bags_section">
    <div class="container dual_module_container products_types_of_bags_container">
        <div class="row dual_module_row products_types_of_bags_row">
            <div class="col-12 dual_module_headline types_of_bags_headline"><?php the_field('types_of_bags_headline');?></div>
            <div class="col-md-6 dual_module_col products_types_of_bags_col">
                <div class="products_types_of_bags_col_inside">
                    <div class="types_of_bags_left_title"><?php the_field('types_of_bags_left_title');?></div>
                    <?php if(get_field('types_of_bags_left_image')): ?>
                        <div class="types_of_bags_left_image_div" style="background-image: url(<?php the_field('types_of_bags_left_image');?>);">
                        </div>
                    <?php endif; ?>
                    <div class="types_of_bags_left_list">
                        <ul>
                            <?php
                            if( have_rows('types_of_bags_left_list_repeater') ):
                                while( have_rows('types_of_bags_left_list_repeater') ) : the_row();?>
                                    <li>
                                        <?= get_sub_field('description') ?>
                                    </li>
                                <?php
                                endwhile; ?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 dual_module_col products_types_of_bags_col">
                <div class="products_types_of_bags_col_inside">
                    <div class="types_of_bags_right_title"><?php the_field('types_of_bags_right_title');?></div>
                    <?php if(get_field('types_of_bags_right_image')): ?>
                        <div class="types_of_bags_right_image_div" style="background-image: url(<?php the_field('types_of_bags_right_image');?>);">
                        </div>
                    <?php endif; ?>
                    <div class="types_of_bags_right_list">
                        <ul>
                            <?php
                            if( have_rows('types_of_bags_right_list_repeater') ):
                                while( have_rows('types_of_bags_right_list_repeater') ) : the_row();?>
                                    <li>
                                        <?= get_sub_field('description') ?>
                                    </li>
                                <?php
                                endwhile; ?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home_products_section products_bags_section">
    <div class="container home_products_container products_bags_container">
        <div class="row home_products_row products_bags_row">
            <div class="col-md-7 home_products_col_text products_bags_col_text">
                <div class="home_products_text products_bags_text"><?php the_field('products_bags_text');?></div>
                <?php
                if( have_rows('products_bags_repeater') ):
                    while( have_rows('products_bags_repeater') ) : the_row();?>
                        <div class="products_bag_description_div">
                            <div class="products_bag"><?= get_sub_field('bag') ?></div>
                            <div class="products_description"><?= get_sub_field('description') ?></div>
                        </div>
                    <?php
                    endwhile; ?>
                <?php endif;?>
            </div>
            <div class="col-md-5 home_products_col_image products_bags_col_image">
                <div class="home_products_div_image products_bags_div_image" style="background-image: url(<?php the_field('products_bags_image');?>);">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Check rows exists.
if( have_rows('faq_repeater') ): ?>
    <section class="faq_section products_faq_section">
        <div class="container faq_container">
            <h1 class="types_of_bags_headline faq_h1"><?= get_field("faq_title"); ?></h1>
            <div class="row accordion_div">
<!--                // Loop through rows.-->
                <?php while( have_rows('faq_repeater') ) : the_row();?>
                    <?php
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    ?>
                    <div class="accordion_single_wrapper">
                        <button class="accordion">
                            <?php echo($question);?>
                            <span></span>
                        </button>
                        <div class="panel">
                            <div class="faq_line"></div>
                            <p><?php echo($answer);?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif;?>

<section class="types_of_bags_content_bottom_section">
    <div class="container">
        <div class="types_of_bags_content_bottom">
            <div class="text_bottom"><?php the_field('types_of_bags_text_bottom');?></div>
            <div class="types_of_bags_bottom_list">
                <ul>
                    <?php
                    if( have_rows('types_of_bags_bottom_list_repeater') ):
                        while( have_rows('types_of_bags_bottom_list_repeater') ) : the_row();?>
                            <li>
                                <?= get_sub_field('item') ?>
                            </li>
                        <?php
                        endwhile; ?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

