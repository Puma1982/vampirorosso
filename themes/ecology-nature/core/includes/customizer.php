<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'ecology-nature' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'ecology_nature_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'ecology-nature' ),
	) );

	// Scroll Top

	Kirki::add_section( 'ecology_nature_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'ecology-nature' ),
	    'description'    => esc_html__( 'Scroll To Top', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	// COLOR SECTION

	Kirki::add_section( 'ecology_nature_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'ecology-nature' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_global_colors',
		'section'     => 'ecology_nature_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'ecology_nature_global_color',
		'label'       => __( 'choose your Appropriate Color', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_color',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'ecology_nature_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_color',
		'default'     => '',
	] );

	// POST SECTION

	Kirki::add_section( 'ecology_nature_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'ecology-nature' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_post_heading',
		'section'     => 'ecology_nature_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_post_ex_number_heading',
		'section'     => 'ecology_nature_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_post_excerpt_number',
		'label'       => esc_html__( 'Post Contant Range', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'ecology_nature_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'ecology-nature' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_phone_number_heading_1',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'ecology_nature_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'ecology-nature' ),
		'section'  => 'ecology_nature_section_header',
		'default'  => 'dashicons dashicons-controls-volumeon',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_phone_number_heading',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_phone_number_text',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_header_phone_number',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_phone_number_heading_2',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'ecology_nature_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'ecology-nature' ),
		'section'  => 'ecology_nature_section_header',
		'default'  => 'dashicons dashicons-airplane',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_email_address_heading',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_email_address_text',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_header_email_address',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_header_button_heading',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_button_text',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    => esc_html__( 'Button URL', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_button_url',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );   

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_search',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_socail_link',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'ecology_nature_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'ecology-nature' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'ecology-nature' ),
		'settings'     => 'ecology_nature_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'ecology-nature' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'ecology-nature' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'ecology-nature' ),
				'description' => esc_html__( 'Add the social icon url here.', 'ecology-nature' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'ecology_nature_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'ecology-nature' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'ecology-nature' ),
        'panel'          => 'ecology_nature_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_heading',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_title_enable',
		'label'       => esc_html__( 'Title Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_text_enable',
		'label'       => esc_html__( 'Text Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_slide_button_enable',
		'label'       => esc_html__( 'Button Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_slider_heading',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'ecology_nature_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'ecology_nature_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'ecology-nature' ),
		'priority'    => 10,
		'choices'     => ecology_nature_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_excerpt_slide_number',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_slider_button_heading',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_slider_button_text',
		'section'  => 'ecology_nature_blog_slide_section',
		'default'  => 'Read More',
		'priority' => 10,
	] );


	// ABOUT US SECTION

	Kirki::add_section( 'ecology_nature_about_section', array(
        'title'          => esc_html__( 'About Us Settings', 'ecology-nature' ),
        'description'    => esc_html__( 'You have to select page to show about us.', 'ecology-nature' ),
        'panel'          => 'ecology_nature_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_enable_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_about_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_about_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_page_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'ecology_nature_about_us',
		'section'     => 'ecology_nature_about_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_button_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_about_button_text',
		'section'  => 'ecology_nature_about_section',
		'default'  => 'Read More',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_excerpt_number_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_about_excerpt_number',
		'label'       => esc_html__( 'About Content Range', 'ecology-nature' ),
		'section'     => 'ecology_nature_about_section',
		'default'     => 50,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'ecology_nature_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'ecology-nature' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'ecology-nature' ),
        'panel'          => 'ecology_nature_panel_id',
        'priority'       => 180,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_footer_text_heading',
		'section'     => 'ecology_nature_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_footer_text',
		'section'  => 'ecology_nature_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_footer_enable_heading',
		'section'     => 'ecology_nature_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );	
}