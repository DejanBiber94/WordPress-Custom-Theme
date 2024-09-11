<section class="footer_section">
	<div class="container footer_container">
		<div class="footer_row_flex">
			<div class="footer_col_flex footer_col_flex_0">
				<?php if ( pll_current_language() == 'sr' ) { ?>
					<a href="/" class="a_for_footer_logo">
						<img class="logo footer_logo"
						     src="<?php bloginfo( "template_url" ); ?>/images/logo_light_bg.png" alt="logo" width="200"
						     height="auto">
					</a>
				<?php } else { ?>
					<a href="/en/homepage/" class="a_for_footer_logo">
						<img class="logo footer_logo"
						     src="<?php bloginfo( "template_url" ); ?>/images/logo_light_bg.png" alt="logo" width="200"
						     height="auto">
					</a>
				<?php } ?>
			</div>
			<div class="footer_col_flex footer_col_flex_3">
				<?php dynamic_sidebar( 'contact' ) ?>
			</div>
			<div class="footer_col_flex footer_col_flex_2">
				<?php dynamic_sidebar( 'policy' ) ?>
			</div>
			<div class="footer_col_flex footer_col_flex_1">
				<?php dynamic_sidebar( 'menu-footer' ) ?>
			</div>
		</div>
	</div>
	<div class="footer_copyright">
		<?php dynamic_sidebar( 'copyright' ) ?>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- MENU - open/close -->
<script>
	(function ( $ ) {
		$( document ).ready( function () {
			$( '#nav-icon1' ).click( function () {
				$( this ).toggleClass( 'open' );
			} );
		} );
	})( jQuery );
</script>

<!-- PRODUCTS - heights -->
<script>
	$( window ).on(
		'load',
		function () {
			//height of timeline
			if ( $( '.products_advantages_repeater_div' ).length && $( '.products_advantages_timeline' ).length && $( '.advantage' ).length ) {
				let productsAdvantagesRepeaterDiv_height = $( '.products_advantages_repeater_div' ).outerHeight();
				let advantageArray                       = document.getElementsByClassName( 'advantage' );
				let advantage_first_height               = advantageArray[0].offsetHeight;
				console.log( 'first timeline advantage height: ' + advantage_first_height );
				let advantage_last_height = advantageArray[advantageArray.length - 1].offsetHeight;
				console.log( 'last timeline advantage height: ' + advantage_last_height );

				$( '.products_advantages_timeline' ).css(
					'top',
					advantage_first_height / 2
				);
				$( '.products_advantages_timeline' ).css(
					'height',
					productsAdvantagesRepeaterDiv_height - advantage_first_height / 2 - advantage_last_height / 2
				);
			}

			// heights of products_type_of_bags cards
			if ( $( '.products_types_of_bags_col_inside' ).length ) {
				let maxHeight = Math.max.apply(
					null,
					$( '.products_types_of_bags_col_inside' ).map( function () {
						return $( this ).height();
					} ).get()
				);
				console.log( '.products_types_of_bags_col_inside MAX height: ' + maxHeight );
				if ( screen.availWidth > 767 ) {
					$( '.products_types_of_bags_col_inside' ).height( maxHeight );
				} else {
					$( '.products_types_of_bags_col_inside' ).css(
						'height',
						'auto'
					);
				}
			}
		}
	);
</script>

<!-- HOMEPAGE - heights -->
<script>
	$( window ).on(
		'load',
		function () {
			// height of image in home_products_section
			let home_products_col_text_height = $( '.home_products_col_text' ).outerHeight();
			$( '.home_products_div_image' ).height( home_products_col_text_height );

			// heights of homepage's cards
			if ( $( '.one_card' ).length ) {
				let maxHeight = Math.max.apply(
					null,
					$( '.one_card' ).map( function () {
						return $( this ).height();
					} ).get()
				);
				console.log( '.one_card MAX height: ' + maxHeight );
				if ( screen.availWidth > 575 ) {
					$( '.one_card' ).height( maxHeight );
				} else {
					$( '.one_card' ).css(
						'height',
						'auto'
					);
				}
			}
		}
	);
</script>

<!--FAQ accordion-->
<script>
	var acc                = document.getElementsByClassName( 'accordion' );
	var i;
	acc[0].style.borderTop = 'none';
	for ( i = 0; i < acc.length; i++ ) {
		acc[i].addEventListener(
			'click',
			function () {
				this.classList.toggle( 'active' );
				var panel = this.nextElementSibling;

				if ( panel.style.maxHeight ) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + 'px';
				}
			}
		);
	}
</script>
<?php wp_footer(); ?>
</body>
</html>

