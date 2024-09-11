<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

function script_enqueue() {
//bootstrap CSS
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), 20141119 );
//custom CSS
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '1.0' );
//bootstrap js
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '20120206', true );
//custom js
//wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
	wp_enqueue_script( 'assets', get_template_directory_uri() . '/assets/main.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'script_enqueue' );


function enqueue_slick_slider() {
	wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css' );
	wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_slick_slider' );

function enqueue_fancybox() {
    wp_enqueue_style( 'fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3/dist/jquery.fancybox.min.css' );
    wp_enqueue_script( 'fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3/dist/jquery.fancybox.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_fancybox' );



add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

/* Menu */
register_nav_menus( array(
	'header' => __( 'Header Menu' ),
	'footer' => __( 'Footer Menu' ),
) );


// sidebars for widgets (za footer)
function my_sidebar() {
	register_sidebar(
		array(
			'name' => 'Policy',
			'id'   => 'policy',
		)
	);
	register_sidebar(
		array(
			'name' => 'Menu footer',
			'id'   => 'menu-footer',
		)
	);
	register_sidebar(
		array(
			'name' => 'Contact',
			'id'   => 'contact',
		)
	);
	register_sidebar(
		array(
			'name' => 'Copyright',
			'id'   => 'copyright',
		)
	);
}

add_action( 'widgets_init', 'my_sidebar' );

/* za prikaz widgeta u vidu clasic editora  */
add_filter( 'use_widgets_block_editor', '__return_false' );

function wpdocs_kantbtrue_init() {
	$labels = array(
		'name'           => _x( 'Proizvod', 'Post type general name', 'proizvod' ),
		'singular_name'  => _x( 'Proizvod', 'Post type singular name', 'proizvod' ),
		'menu_name'      => _x( 'Proizvod', 'Admin Menu text', 'proizvod' ),
		'name_admin_bar' => _x( 'Proizvod', 'Add New on Toolbar', 'proizvod' ),
		'add_new'        => __( 'Add New', 'proizvod' ),
		'add_new_item'   => __( 'Add New Proizvod', 'recipe' ),
	);
	$args   = array(
		'labels'             => $labels,
		'description'        => 'Recipe custom post type.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'proizvod' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'show_in_rest'       => true
	);

	register_post_type( 'Proizvod', $args );
}

add_action( 'init', 'wpdocs_kantbtrue_init' );

function get_related_products( $post_id, $taxonomy, $post_type ) {
	$terms = wp_get_post_terms( $post_id, $taxonomy );
	if ( $terms ) {
		$term_ids = wp_list_pluck( $terms, 'term_id' );
		$query    = new WP_Query( array(
			'post_type'      => $post_type,
			'tax_query'      => array(
				array(
					'taxonomy' => $taxonomy,
					'field'    => 'id',
					'terms'    => $term_ids,
				),
			),
			'posts_per_page' => -1,
			'post__not_in'   => array( $post_id ),
		) );

		return $query;
	}

	return false;
}


function change_jpeg_to_jpg($file) {
    $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
 
    if ($file_ext === 'jpeg') {
        $file['name'] = preg_replace('/\.jpeg$/', '.jpg', $file['name']);
    }

    return $file;
}
add_filter('wp_handle_upload_prefilter', 'change_jpeg_to_jpg');

