<?php
/**
* Plugin Name: Inzite Facebook Tab
* Plugin URI: http://inzite.dk
* Description: This plugin adds a tab to show facebook feed (requires "Custom Facebook Feed").
* Version: 1.0.0
* Author: Rasmus Jürs
* Author URI: http://jurs.me
* License: GPL2
*/

function themeslug_enqueue_style() {
	wp_enqueue_style( 'modal-css', plugin_dir_url( __FILE__ ).'css/style.css', false );
}

function themeslug_enqueue_script() {
	wp_enqueue_script( 'modal-js', plugin_dir_url( __FILE__ ).'js/modal.js',  array('jquery'), true );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

add_action( 'wp_footer', 'my_facebook_tags' );

function my_facebook_tags() { ?>



	<div class="facebook-content">
		<div class="facebook-navbar">
			<h3>Facebook</h3>
			<a href="#" class="facebook-close"><i class="fa fa-times"></i></a>
		</div>
		<div class="content">
			<?php echo do_shortcode( '[custom-facebook-feed]' ); ?>
		</div>
	</div>

	<span href="#" class="facebook-trigger">Facebook</span>

<?php } ?>
