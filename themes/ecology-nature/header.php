<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php $icon1 = get_theme_mod( 'ecology_nature_dashicons_setting_1', 'dashicons dashicons-controls-volumeon' ); ?>
<?php $icon2 = get_theme_mod( 'ecology_nature_dashicons_setting_2', 'dashicons dashicons-airplane' ); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ecology-nature' ); ?></a>

<div class="top-header text-center text-md-left py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 align-self-center">
		    		<div class="logo text-center text-md-center text-lg-left">
			    		<div class="logo-image mr-3">
			    			<?php echo esc_url( the_custom_logo() ); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('ecology_nature_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_attr(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('ecology_nature_display_header_text', true) == true ) :
					      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-5 col-md-8 align-self-center">
				<div class="row">
					<div class="col-lg-6 col-md-6 align-self-center">
						<?php if ( get_theme_mod('ecology_nature_header_phone_number') || get_theme_mod('ecology_nature_header_phone_number_text') ) : ?>
							<div class="row contact-box">
								<div class="col-lg-3 col-md-3 align-self-center">
									<span class="dashicons dashicons-<?php echo esc_attr( $icon1 ); ?>"></span>
								</div>
								<div class="col-lg-9 col-md-9 align-self-center">
									<h6 class="mb-0"><?php echo esc_html( get_theme_mod('ecology_nature_header_phone_number_text' ) ); ?></h6>
									<p class="mb-0"><?php echo esc_html( get_theme_mod('ecology_nature_header_phone_number' ) ); ?></p>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-lg-6 col-md-6 align-self-center">
						<?php if ( get_theme_mod('ecology_nature_header_email_address') || get_theme_mod('ecology_nature_header_email_address_text') ) : ?>
							<div class="row contact-box">
								<div class="col-lg-3 col-md-3 align-self-center">
									<span class="dashicons dashicons-<?php echo esc_attr( $icon2 ); ?>"></span>
								</div>
								<div class="col-lg-9 col-md-9 align-self-center">
									<h6 class="mb-0"><?php echo esc_html( get_theme_mod('ecology_nature_header_email_address_text' ) ); ?></h6>
									<p class="mb-0"><?php echo esc_html( get_theme_mod('ecology_nature_header_email_address' ) ); ?></p>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 align-self-center py-4 py-md-0 text-md-right">
				<?php if ( get_theme_mod('ecology_nature_header_button_url') || get_theme_mod('ecology_nature_header_button_text') ) : ?>
					<a href="<?php echo esc_url( get_theme_mod('ecology_nature_header_button_url' ) ); ?>" class="shop-btn"><?php echo esc_html( get_theme_mod('ecology_nature_header_button_text' ) ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left">
	<div class="container">
		<div class="row">
		    	<div class="col-lg-9 col-md-8 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'ecology-nature' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-1 col-md-1 col-3 align-self-center">
                <div class="header-search text-center py-3 py-md-0">
                	<?php if ( get_theme_mod('ecology_nature_search_box_enable', true) == true ) : ?>
                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div class="search-form"><?php get_search_form();?></div>
                	<?php endif; ?>
                	
                </div>
			</div>
			<div class="col-lg-2 col-md-3 col-9 align-self-center">
				<?php $ecology_nature_settings = get_theme_mod( 'ecology_nature_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($ecology_nature_settings) || is_object($ecology_nature_settings) ){ ?>
					    	<?php foreach( $ecology_nature_settings as $ecology_nature_setting ) { ?>
						        <a href="<?php echo esc_url( $ecology_nature_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $ecology_nature_setting['link_text'] ); ?> mr-3"></i>
						        </a>
					    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</header>