<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function ecology_nature_enqueue_google_fonts() { 
	wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'ecology_nature_enqueue_google_fonts' );

if (!function_exists('ecology_nature_enqueue_scripts')) {

	function ecology_nature_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			esc_url( get_template_directory_uri() ) . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			esc_url( get_template_directory_uri() ) . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			esc_url( get_template_directory_uri() ) . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('ecology-nature-style', get_stylesheet_uri(), array() );

		wp_enqueue_style(
			'ecology-nature-media-css',
			esc_url( get_template_directory_uri() ) . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'ecology-nature-woocommerce-css',
			esc_url( get_template_directory_uri() ) . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'ecology-nature-navigation',
			esc_url( get_template_directory_uri() ) . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			esc_url( get_template_directory_uri() ) . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'ecology-nature-script',
			esc_url( get_template_directory_uri() ) . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				.top-header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'ecology-nature-style', $css );

	}

	add_action( 'wp_enqueue_scripts', 'ecology_nature_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ecology_nature_after_setup_theme')) {

	function ecology_nature_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'ecology-nature' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
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

		add_theme_support( 'wp-block-styles' );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'ecology_nature_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*----------------------------------------------------------------------------------*/
/* Enqueue theme logo style. */
/*-----------------------------------------------------------------------------------*/

function ecology_nature_logo_resizer() {

    $theme_logo_size_css = '';
    $ecology_nature_logo_resizer = get_theme_mod('ecology_nature_logo_resizer');

	$theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($ecology_nature_logo_resizer).'px !important;
			width: '.esc_attr($ecology_nature_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'ecology-nature-style',$theme_logo_size_css );	

}
add_action( 'wp_enqueue_scripts', 'ecology_nature_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function ecology_nature_global_color() {

    $theme_color_css = '';
    $ecology_nature_global_color = get_theme_mod('ecology_nature_global_color');
    $ecology_nature_global_color_2 = get_theme_mod('ecology_nature_global_color_2');

	$theme_color_css = '
		a.shop-btn, p.slider_btn a,#main-menu ul.children li a:hover,#main-menu ul.sub-menu li a:hover,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.ecology-nature-pagination span.current,.ecology-nature-pagination span.current:hover,.ecology-nature-pagination span.current:focus,.ecology-nature-pagination a span:hover,.ecology-nature-pagination a span:focus,.comment-respond input#submit,.comment-reply a,.sidebar-widget h4.title,.sidebar-area .tagcloud a,.searchform input[type=submit],.searchform input[type=submit]:hover ,.searchform input[type=submit]:focus,.menu-toggle,.dropdown-toggle,button.close-menu,nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.scroll-up a {
			background: '.esc_attr($ecology_nature_global_color).';
		}
		a:hover,a:focus,.contact-box span,.contact-box h6,.logo a:hover,.logo a:focus,.social-links a:hover,#main-menu a:hover,#main-menu ul li a:hover,#main-menu li:hover > a,#main-menu a:focus,#main-menu ul li a:focus,#main-menu li.focus > a,#main-menu li:focus > a,#main-menu ul li.current-menu-item > a,#main-menu ul li.current_page_item > a,#main-menu ul li.current-menu-parent > a,#main-menu ul li.current_page_ancestor > a,#main-menu ul li.current-menu-ancestor > a,.social-links a:hover,.post-meta i,.woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price {
			color: '.esc_attr($ecology_nature_global_color).';
		}
		.slider .owl-carousel button.owl-dot {
			border-color: '.esc_attr($ecology_nature_global_color).';
		}
		span.onsale,.box-content a.button:hover,.box .box-content,.woocommerce a.button:hover,.scroll-up a:hover,nav.woocommerce-MyAccount-navigation ul li:hover,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.comment-respond input#submit:hover, .comment-reply a:hover,.woocommerce .cart .button:hover,.woocommerce a.button.alt:hover,a.shop-btn:hover,.woocommerce button.button.alt:hover,p.slider_btn a:hover,.woocommerce button.button:hover,.sidebar-area .tagcloud a:hover,footer.footer-panel,.woocommerce a.added_to_cart:hover,.woocommerce #respond input#submit:hover {
			background: '.esc_attr($ecology_nature_global_color_2).';
		}
		a,h1,h2,h3,h4,h5,.tab-product ins span.woocommerce-Price-amount.amount bdi,.woocommerce div.product p.price {
			color: '.esc_attr($ecology_nature_global_color_2).';
		}
		.slider .owl-carousel button.owl-dot.active,.sidebar-area h4.title  {
			border-color: '.esc_attr($ecology_nature_global_color_2).';
		 }
	';
    wp_add_inline_style( 'ecology-nature-style',$theme_color_css );
    wp_add_inline_style( 'ecology-nature-woocommerce-css',$theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'ecology_nature_global_color' );


/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ecology_nature_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function ecology_nature_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'ecology-nature'); 
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'ecology-nature'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'ecology-nature'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'ecology-nature' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'ecology-nature'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for ecology_nature_comment()

if (!function_exists('ecology_nature_widgets_init')) {

	function ecology_nature_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','ecology-nature'),
			'id'   => 'ecology-nature-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'ecology-nature'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','ecology-nature'),
			'id'   => 'ecology-nature-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'ecology-nature'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'ecology_nature_widgets_init' );

}

function ecology_nature_get_categories_select() {
	$teh_cats = get_categories();
	$results;
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'ecology_nature_loop_columns', 999);
if (!function_exists('ecology_nature_loop_columns')) {
	function ecology_nature_loop_columns() {
		return 3; // 3 products per row
	}
}

function ecology_nature_remove_sections( $wp_customize ) {
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_setting('display_header_text');
}
add_action( 'customize_register', 'ecology_nature_remove_sections');

function ecology_nature_notice(){
	global $getstarted;
    $theme_name_td = wp_get_theme();
    if ( is_admin() && ('themes.php' == $getstarted) && isset( $_GET['activated'] ) && $theme_name_td->get( 'TextDomain' ) === 'ecology-nature' ) {
   		wp_safe_redirect( admin_url("themes.php?page=ecology-nature-guide-page") );
   	}
}
add_action('after_setup_theme', 'ecology_nature_notice');

add_action( 'wp_enqueue_scripts', 'ecology_nature_load_dashicons_front_end' );
	function ecology_nature_load_dashicons_front_end() {
	  wp_enqueue_style( 'dashicons' );
}

?>