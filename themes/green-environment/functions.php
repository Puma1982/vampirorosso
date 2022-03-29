<?php

if ( ! defined( 'ECOLOGY_NATURE_BUY_NOW' ) ) {
	define( 'ECOLOGY_NATURE_BUY_NOW', 'https://www.misbahwp.com/themes/environmental-wordpress-theme/' );
}
if ( ! defined( 'ECOLOGY_NATURE_THEME_NAME' ) ) {
	define( 'ECOLOGY_NATURE_THEME_NAME', esc_html__( 'Upgrade to Green Environment PRO', 'green-environment' ));
}

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('green_environment_enqueue_scripts')) {

	function green_environment_enqueue_scripts() {

	    $my_theme = wp_get_theme();
	    $version = $my_theme['Version'];

	    wp_enqueue_style(
			'bootstrap-css',
				esc_url( get_template_directory_uri() ) . '/css/bootstrap.css',
				array(),'4.5.0'
			);

	    wp_enqueue_style( 'ecology-nature-style', get_template_directory_uri() . '/style.css' );

	    wp_enqueue_style( 'green-environment-style', get_stylesheet_directory_uri() . '/style.css', array('ecology-nature-woocommerce-css'), $version );

	    wp_enqueue_style( 'green-environment-style', get_stylesheet_directory_uri() . '/style.css', array('ecology-nature-style'), $version );

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	}

	add_action( 'wp_enqueue_scripts', 'green_environment_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('green_environment_after_setup_theme')) {

	function green_environment_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( "responsive-embeds" );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'ffffff'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'green_environment_after_setup_theme', 999 );

}

if (!function_exists('green_environment_widgets_init')) {

	function green_environment_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','green-environment'),
			'id'   => 'ecology-nature-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'green-environment'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','green-environment'),
			'id'   => 'ecology-nature-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'green-environment'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'green_environment_widgets_init' );

}

/*-----------------------------------------------------------------------------------*/
/* Customizer */
/*-----------------------------------------------------------------------------------*/

if ( class_exists("Kirki")){

	// FEATURES SECTION

	Kirki::add_section( 'green_environment_features_section', array(
    'title'          => esc_html__( 'Our Features Settings', 'green-environment' ),
    'description'    => esc_html__( 'You have to select category to show features.', 'green-environment' ),
    'panel'          => 'ecology_nature_panel_id',
    'priority'       => 170,
	) );

  Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_heading',
		'section'     => 'green_environment_features_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Features',  'green-environment' ) . '</h3>',
		'priority'    => 10,
	] );

  Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'green_environment_features_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'green-environment' ),
		'section'     => 'green_environment_features_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'green-environment' ),
			'off' => esc_html__( 'Disable',  'green-environment' ),
		],
	] );
    
  Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_environment_features_heading',
		'section'     => 'green_environment_features_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Features Section ',  'green-environment' ) . '</h3>',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
    'type'        => 'number',
    'settings'    => 'green_environment_features_counter',
    'label'       => esc_html__( 'Features Counter Section',  'green-environment' ),
    'section'     => 'green_environment_features_section',
    'default'     => 0,
    'choices'     => [
        'min'  => 3,
        'max'  => 3,
        'step' => 1,
    ],
	] );

  $features_image = get_theme_mod('green_environment_features_counter','');
    for ( $i = 1; $i <= $features_image; $i++ ) :

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'dashicons',
			'settings' => 'green_environment_features_icon_setting'.$i,
			'label'    => esc_html__( 'Features Icon ', 'green-environment' ).$i,
			'section'  => 'green_environment_features_section',
			'priority' => 10,
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'text',
			'settings' => 'green_environment_features_title_text'.$i,
			'label'    => esc_html__( 'Features Title Text ', 'green-environment' ).$i,
			'section'  => 'green_environment_features_section',
			'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
			'type'     => 'textarea',
			'settings' => 'green_environment_features_content_text'.$i,
			'label'    => esc_html__( 'Features Content ', 'green-environment' ).$i,
			'section'  => 'green_environment_features_section',
			'priority' => 10,
    ] );

	endfor;
}

function green_environment_remove_my_action() {
	remove_action( 'admin_menu','ecology_nature_getting_started' );
	remove_action( 'after_setup_theme','ecology_nature_notice' );
}
add_action( 'init', 'green_environment_remove_my_action');