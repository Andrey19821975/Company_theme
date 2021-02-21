<?php 
remove_filter( 'the_content', 'wpautop' );
//linking styles and scripts
add_action('wp_enqueue_scripts', 'agc_scripts_connect');
function agc_scripts_connect()
{
	wp_enqueue_style('agc-google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&family=Noto+Sans&display=swap');
    wp_enqueue_style('bootstrap-min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('agc-slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
	wp_enqueue_style('agc-theme-style', get_stylesheet_directory_uri() . '/css/style.css',array('bootstrap-min'));
	wp_enqueue_script( 'my-jquery', get_stylesheet_directory_uri().'/assets/js/jquery-3.5.1.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bootstrap-min-js', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'slick-min-js', get_stylesheet_directory_uri().'/assets/js/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'owl-carousel-min-js', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),null , true );
	wp_enqueue_script( 'agc-common-js', get_stylesheet_directory_uri().'/js/common.js', array('jquery'), null, true );
}

add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	$classes[] = 'menu__item';

	return $classes;
}

//register new post type
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'agc_sliders', [
		'label'  => null,
		'labels' => [
			'name'               => 'Sliders',
			'singular_name'      => 'Sliser', 
			'add_new'            => 'Add Slider', 
			'add_new_item'       => 'Adding Slider', 
			'edit_item'          => 'Edit Slider', 
			'new_item'           => 'New Slider', 
			'view_item'          => 'Show Slider',
			'search_items'       => 'Search Slider',
			'not_found'          => 'Not_found', 
			'not_found_in_trash' => 'Not_found_in_trash', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Sliders',
		], 
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => false, 
		// 'exclude_from_search' => null, 
		// 'show_ui'             => true, 
		// 'show_in_nav_menus'   => null, 
		'show_in_menu'        => true, 
		// 'show_in_admin_bar'   => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-images-alt2',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post',
		//'map_meta_cap'      => null, 
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats',
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'agc_portfolios', [
		'label'  => null,
		'labels' => [
			'name'               => 'Portfolios',
			'singular_name'      => 'Portfolio', 
			'add_new'            => 'Add Portfolio', 
			'add_new_item'       => 'Adding Portfolio', 
			'edit_item'          => 'Edit Portfolio', 
			'new_item'           => 'New Portfolio', 
			'view_item'          => 'Show Portfolio',
			'search_items'       => 'Search Portfolio',
			'not_found'          => 'Not_found', 
			'not_found_in_trash' => 'Not_found_in_trash', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Portfolio', 
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, 
		// 'exclude_from_search' => null, 
		// 'show_ui'             => true, 
		// 'show_in_nav_menus'   => null, 
		'show_in_menu'        => true, 
		// 'show_in_admin_bar'   => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-post',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post',
		//'map_meta_cap'      => null, 
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail'], 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats',
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );	
}

//register widgets

function agc_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 1', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="footer__caption">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 2', 'twentytwentyone' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="footer__caption">',
			'after_title'   => '</h3>',
		)
	);register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 3', 'twentytwentyone' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}	
add_action( 'widgets_init', 'agc_widgets_init' );

?>
