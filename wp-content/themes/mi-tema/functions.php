	<?php 

	function register_enqueue_style(){
		$theme_data = wp_get_theme();

		wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Alice|Crimson+Text|Playball');

		wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');

		wp_register_style('style-css', get_theme_file_uri ('assets/css/style.css'), null, null, 'screen');

		wp_enqueue_style('fonts');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('style-css');

	}



	add_action('wp_enqueue_scripts', 'register_enqueue_style');




	function register_enqueue_scripts(){
		$theme_data = wp_get_theme();

		wp_deregister_script('jQuery');
		wp_deregister_script('jquery-migrate');
	//wp_deregister_script('script.js');

		wp_register_script('jquery-3', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, '3.3.1', true );

		wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery-3'), '1.14.3', true );

		wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery-3'), '4.1.3', true );

		wp_register_script('script', get_theme_file_uri('assets/js/script.js'), array('jquery-3'), null, true );


		wp_enqueue_script('jquery-3');
		wp_enqueue_script('popper');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('script');

	}

	add_action('wp_enqueue_scripts', 'register_enqueue_scripts');


	
	/*fin mi functions*/

// register menus  //
	function menus_setup(){
		register_nav_menus(
			array(
				'header-menu'=>__ ('Header Menu'),
				'footer-menu'=>__('footer Menu'),
			)
		);

	}

	add_action ('after_setup_theme','menus_setup');

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'galery'		=> __( 'Tamaño del galery' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' ),
		'portafolio'	=> __( 'Tamaño de la foto de perfil' ),
		'main_image'	=> __( 'Tamaño de la foto principal' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'galery', 800, 600, true );			// Personalización del tamaño del slideshow
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo
	add_image_size( 'portafolio', 120, 120, true );			// Personalización del tamaño del logo
	add_image_size( 'main_image', 512, 512, true );			// Personalización del tamaño del logo

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}

// Register Custom Post Type objetivos
function objetivos_post_type() {

	$labels = array(
		'name'                  => _x( 'objetivos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'objetivo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'editar elemento', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'foto principal', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'objetivo', 'text_domain' ),
		'description'           => __( 'personalización de objetivos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'objetivos', $args );

}
add_action( 'init', 'objetivos_post_type', 0 );

remove_action('shutdown', 'wp_ob_end_flush_all',1);

?>