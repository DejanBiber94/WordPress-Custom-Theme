<?php
/* Template Name: Home */

get_header(); ?>

<section class="first_section home_intro_section">
    <div class="first_section_bg_image" style="background-image: url(<?php the_field('first_section_image');?>);">
        <div class="first_section_overlay"></div>
    </div>
    <div class="container first_section_container">
        <h1 class="headline"><?php the_field('first_section_headline');?></h1>
        <div class="headline_text_under"><?php the_field('first_section_subtitle');?></div>
        <?php if(get_field('first_section_button_text')): ?>
            <div class="button_wrapper">
                <a href="<?php the_field('first_section_button_url');?>" class="button headline_button"><?php the_field('first_section_button_text');?></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="dual_module products_section">
    <div class="container-fluid dual_module_container_fluid">
        <div class="row dual_module_row_big">
            <div class="col-md-7 dual_module_col_left dual_module_col_left_products"></div>
            <div class="col-md-5 dual_module_col_right dual_module_col_right_products"></div>
        </div>
        <div class="container dual_module_container">
            <div class="row dual_module_row">
                <div class="col-md-7 dual_module_col_large dual_module_col_large_products">
                    <div class="dual_module_col_large_text_left"><?php the_field('home_products_text');?></div>
                    <ul>
                        <?php
                        if( have_rows('home_products_repeater') ):
                            while( have_rows('home_products_repeater') ) : the_row();?>
                                <li>
                                    <p class="dual_module_col_large_item1_left"><?php the_sub_field('home_product');?></p>
                                    <ul>
                                        <?php
                                        if( have_rows('home_products_under_repeater') ):
                                            while( have_rows('home_products_under_repeater') ) : the_row();?>
                                                <li>
                                                    <p class="dual_module_col_large_item1_left"><?php the_sub_field('home_products_under');?></p>
                                                </li>
                                            <?php
                                            endwhile; ?>
                                        <?php endif;?>
                                    </ul>
                                </li>
                            <?php
                            endwhile; ?>
                        <?php endif;?>
                    </ul>
                    <?php if(get_field('home_products_button_text')): ?>
                        <div class="button_wrapper">
                            <a href="<?php the_field('home_products_button_url');?>" class="button dual_module_button"><?php the_field('home_products_button_text');?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-5 dual_module_col_small dual_module_col_small_products">
                    <div class="dual_module_col_small_image dual_module_col_small_image_products" style="background-image: url(<?php the_field('home_products_image');?>);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cards_section">
    <div class="container">
        <div class="row">
            <?php
            if( have_rows('cards_repeater') ):
                while( have_rows('cards_repeater') ) : the_row();?>
                    <div class="col-lg-4 col-sm-6 one_card_div">
                        <div class="one_card">
                            <div class="card_image_div">
                                <img class="card_image" src="<?= get_sub_field('card_image') ?>" alt="image">
                            </div>
                            <div class="card_title"><?= get_sub_field('card_title') ?></div>
                            <div class="card_text"><?= get_sub_field('card_text') ?></div>
                        </div>
                    </div>
                <?php
                endwhile; ?>
            <?php endif;?>
        </div>
    </div>
</section>

<?php
// Check rows exists.
if( have_rows('faq_repeater') ): ?>
<section class="faq_section">
    <div class="container faq_container">
        <h2 class="types_of_bags_headline faq_h1"><?= get_field("faq_title"); ?></h2>
        <div class="row accordion_div">
<!--            // Loop through rows.-->
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

<section class="dual_module advantages_section">
    <div class="container-fluid dual_module_container_fluid">
        <div class="row dual_module_row_big">
            <div class="col-md-5 dual_module_col_left dual_module_col_left_advantages"></div>
            <div class="col-md-7 dual_module_col_right dual_module_col_right_advantages"></div>
        </div>
        <div class="container dual_module_container">
            <div class="row dual_module_row">
                <div class="col-md-5 dual_module_col_small dual_module_col_small_advantages">
                    <div class="dual_module_col_small_text text_left_advantages">
                        <?php the_field('advantages_text_left');?>
                    </div>
                </div>
                <div class="col-md-7 dual_module_col_large dual_module_col_large_advantages">
                    <ul>
                        <?php
                        if( have_rows('advantages_repeater') ):
                            while( have_rows('advantages_repeater') ) : the_row();?>
                                    <li>
                                        <?= get_sub_field('advantage') ?>
                                    </li>
                            <?php
                            endwhile; ?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
