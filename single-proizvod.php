<?php

get_header();

$phone  = get_field('phone');
$email  = get_field('email');
$images = get_field('gallery');
$size   = 'full'; // (thumbnail, medium, large, full or custom size)
?>
	<section class="dual_module">
		<div class="container">
			<div class="row dual_module_row pt-5 pb-3">
				<div class="col-md-7 row dual_module_row dual_module_col_small dual_module_col_small_products">	
					<div class="col-md-2">
        				<div class="concordtest-nav-slider">
           					 <?php foreach ($images as $image): ?>
                				<div class="slider-item">
                    				<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
							 </div>
            				<?php endforeach; ?>
        				</div>
    				</div>
						<div class="col-md-10">
							<div class="concordtest-main-slider">
								<?php foreach ($images as $image): ?>
									<div class="slider-item">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
									</div>
								<?php endforeach; ?>
							</div>
						</div>
				</div>	
				<div class="col-md-5 dual_module_col_small dual_module_col_small_products">
					<div class="info-block">
						<h1><?php the_title(); ?></h1>
						<svg xmlns="http://www.w3.org/2000/svg" width="400" height="2" viewBox="0 0 418 2" fill="none">
							<path d="M0 1H418" stroke="#B3B3B3" stroke-dasharray="6 6"/>
						</svg>
						<a href="phone:<?= $phone; ?>" class="phone-button">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
							     fill="none">
								<path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z"
								      stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg> <?= $phone; ?></a>
						<a href="mailto:<?= $email; ?>" class="email-button">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
							     fill="none">
								<path d="M22.25 6.75V17.25C22.25 17.8467 22.0129 18.419 21.591 18.841C21.169 19.2629 20.5967 19.5 20 19.5H5C4.40326 19.5 3.83097 19.2629 3.40901 18.841C2.98705 18.419 2.75 17.8467 2.75 17.25V6.75M22.25 6.75C22.25 6.15326 22.0129 5.58097 21.591 5.15901C21.169 4.73705 20.5967 4.5 20 4.5H5C4.40326 4.5 3.83097 4.73705 3.40901 5.15901C2.98705 5.58097 2.75 6.15326 2.75 6.75M22.25 6.75V6.993C22.25 7.37715 22.1517 7.75491 21.9644 8.0903C21.7771 8.42569 21.5071 8.70754 21.18 8.909L13.68 13.524C13.3252 13.7425 12.9167 13.8582 12.5 13.8582C12.0833 13.8582 11.6748 13.7425 11.32 13.524L3.82 8.91C3.49292 8.70854 3.22287 8.42669 3.03557 8.0913C2.84827 7.75591 2.74996 7.37815 2.75 6.994V6.75"
								      stroke="#212529" stroke-width="1.5" stroke-linecap="round"
								      stroke-linejoin="round"/>
							</svg> <?= $email; ?></a>
					</div>
					<div class="related-items">
						<h4 class="related-title">Ostali proizvodi</h4>
						<?php
						$related_products = get_related_products(get_the_ID(),'category','proizvod');
						if ($related_products && $related_products->have_posts()) : ?>
							<div class="related-products-slider">
								<?php while ($related_products->have_posts()) : $related_products->the_post(); ?>
								<div class="related-items">
									<a href="<?php the_permalink(); ?>">
										<?php if (has_post_thumbnail()) : ?>
											<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title();?>">
										<?php endif; ?>
										<h5><?php the_title(); ?></h5>
									</a>
								</div>
								<?php endwhile; ?>
							</div>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="descripton-block">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>