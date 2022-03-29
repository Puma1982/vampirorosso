<?php

add_action( 'admin_menu', 'ecology_nature_getting_started' );
function ecology_nature_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'ecology-nature'), esc_html__('Get Started', 'ecology-nature'), 'edit_theme_options', 'ecology-nature-guide-page', 'ecology_nature_test_guide');   
}

function ecology_nature_admin_enqueue_scripts() {
	wp_enqueue_style( 'ecology-nature-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'ecology_nature_admin_enqueue_scripts' );

if (! defined( 'ECOLOGY_NATURE_DOCS_FREE' ) ){	
define('ECOLOGY_NATURE_DOCS_FREE',__('https://www.misbahwp.com/docs/ecology-nature-free-docs/','ecology-nature'));
}
if (! defined( 'ECOLOGY_NATURE_DOCS_PRO' ) ){
define('ECOLOGY_NATURE_DOCS_PRO',__('https://www.misbahwp.com/docs/ecology-nature-pro-docs','ecology-nature'));
}
if (! defined( 'ECOLOGY_NATURE_BUY_NOW' ) ){
define('ECOLOGY_NATURE_BUY_NOW',__('https://www.misbahwp.com/themes/ecology-nature-wordpress-theme/','ecology-nature'));
}
if (! defined( 'ECOLOGY_NATURE_SUPPORT_FREE' ) ){
define('ECOLOGY_NATURE_SUPPORT_FREE',__('https://wordpress.org/support/theme/ecology-nature','ecology-nature'));
}
if (! defined( 'ECOLOGY_NATURE_REVIEW_FREE' ) ){
define('ECOLOGY_NATURE_REVIEW_FREE',__('https://wordpress.org/support/theme/ecology-nature/reviews/#new-post','ecology-nature'));
}
if (! defined( 'ECOLOGY_NATURE_DEMO_PRO' ) ){
define('ECOLOGY_NATURE_DEMO_PRO',__('https://www.misbahwp.com/demo/ecology-nature/','ecology-nature'));
}
if (! defined( 'ECOLOGY_NATURE_THEME_NAME' ) ){
define('ECOLOGY_NATURE_THEME_NAME',__('Upgrade to Ecology Nature PRO','ecology-nature'));
}

function ecology_nature_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( ECOLOGY_NATURE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'ecology-nature' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'ecology-nature' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( ECOLOGY_NATURE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'ecology-nature' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( ECOLOGY_NATURE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'ecology-nature' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','ecology-nature'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'ecology-nature'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','ecology-nature'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','ecology-nature'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','ecology-nature'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Secton Reordering','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple HomePage','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','ecology-nature'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'ecology-nature' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','ecology-nature'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( ECOLOGY_NATURE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'ecology-nature' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ECOLOGY_NATURE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'ecology-nature' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ECOLOGY_NATURE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'ecology-nature' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
