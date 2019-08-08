<?php 

if ( ! function_exists( 'mrtheme_setup' ) ) :
	
	function mrtheme_setup() {
		// add featured image support
		add_theme_support( 'post-thumbnails' ); 

		// register menu
		register_nav_menu('main-nav',__( 'Main Nav' ));
	}

	function mrtheme_scripts() {
		wp_register_style('mainStyle', get_stylesheet_uri(), array(), '', '');
		wp_register_style('MrStyle', get_template_directory_uri() . '/assets/css/styles.css', array(), '', '');
		
		wp_enqueue_style('mainStyle');
		wp_enqueue_style('MrStyle');
		
		// ------------------------------------
		
		wp_register_script('pluginsJS', get_template_directory_uri() . '/assets/js/plugins.js', array(), '', true);
		wp_register_script('mainJS', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);

		wp_enqueue_script('pluginsJS');
		wp_enqueue_script('mainJS');
	}

	function change_excerpt( $more ) {
	        if(is_single()){
	           return '';
	        }
	     return '...';
	}

	add_filter('excerpt_more', 'change_excerpt');
	add_action('after_setup_theme', 'mrtheme_setup');
	add_action('wp_enqueue_scripts', 'mrtheme_scripts');
endif;
?>