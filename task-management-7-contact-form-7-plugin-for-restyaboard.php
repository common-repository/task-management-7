<?php
/**
 * Plugin Name: Task Management 7 - Contact Form 7 plugin for Restyaboard, the open source Trello alternative
 * Plugin URI: https://agileshoppe.com/
 * Description: Connects WordPress with your Restyaboard instance through Contact Form7 plugin. Restyaboard is an open source Trello alternative to manage todos, tasks, supports, etc. Using the integration, you can feed user submissions to Restyaboard to manage them on a visual kanban board. Capture customer feedback, inquiries, order requests, etc from your WordPress, but manage them through Restyaboard to bring workflow and process management to your business.
 * Author: AgileShoppe
 * Author URI: https://agileshoppe.com/
 * License: GPLv2
 * Version: 0.1.1
 *
 * @package Task Management 7 - Contact Form 7 plugin for Restyaboard, the open source Trello alternative
 */

// plugin variable: cf7tmrb.

/**
 * Plugin Setup (On Activate)
 * Activation hook
 * Register plugin activation hook.
 */
register_activation_hook( __FILE__, 'cf7tmrb_activate' );
/**
 * Plugin Setup (On Deactivate)
 * Deactivation hook
 * Register plugin deactivation hook.
 */
register_deactivation_hook( __FILE__, 'cf7tmrb_deactivate' );
/**
 * Plugin Setup (On Uninstall)
 * Does the drop tables in the database and
 * uninstall  plugin options.
 */
register_uninstall_hook( __FILE__, 'cf7tmrb_uninstall' );

/**
 * Plugin Setup Activation hook call back
 * Initial setup of the plugin setting default options
 * and database tables creations.
 */
function cf7tmrb_activate() {
	$cf7tmrb_options = array(
		'base_url'     => '',
		'access_token' => '',
		'board_name'   => 'Inquiries',
		'list_name'    => 'Todo',
	);
	$cf7tmrb_board_id = array(
		'id' => '',
	);
	$cf7tmrb_list_id = array(
		'id' => '',
	);
	add_option( 'cf7tmrb_board_id', $cf7tmrb_board_id );
	add_option( 'cf7tmrb_list_id', $cf7tmrb_list_id );
	add_option( 'cf7tmrb_options', $cf7tmrb_options );
}
/**
 * Plugin Setup (On Deactivation)
 * Does the drop tables in the database and
 * delete  plugin options.
 */
function cf7tmrb_deactivate() {
	delete_option( 'cf7tmrb_board_id' );
	delete_option( 'cf7tmrb_list_id' );
}
/**
 * Plugin Setup (On Uninstall)
 *
 * Does the drop tables in the database and
 * uninstall  plugin options.
 */
function cf7tmrb_uninstall() {
}
/**
 * Include require files
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
	// Includes plugin functions.
	include_once( plugin_dir_path( __FILE__ ) . 'includes/functions.php' );
	// Includes plugin SwaggerClient files.
	include_once( plugin_dir_path( __FILE__ ) . 'includes/php-client/SwaggerClient-php/vendor/autoload.php' );
	// Includes plugin admin Settings.
	include_once( plugin_dir_path( __FILE__ ) . 'includes/admin/settings-page.php' );
	// Includes plugin admin menu.
	include_once( plugin_dir_path( __FILE__ ) . 'includes/admin/menu-links.php' );
	// register jquery and style on initialization.
	if ( is_admin() ) {
		add_action( 'init', 'register_script' );
	}
	/**
	 * To Add The Css and Js files
	 */
	function register_script() {
		// Includes admin menu Css.
		wp_register_style( 'cf7tmrb_admin_css', plugins_url( '/assets/css/admin.css', __FILE__ ), false, false );
		wp_enqueue_style( 'cf7tmrb_admin_css' );
		// Includes admin js.
		wp_register_script( 'cf7tmrb_admin_js', plugins_url( '/assets/js/admin.js', __FILE__ ), array( 'jquery' ), false );
		wp_enqueue_script( 'cf7tmrb_admin_js' );
	}
	/**
	 * Plugin Setup (On Install)
	 *
	 * Insert tables in the database and
	 * Active plugin options.
	 */
	add_action( 'wpcf7_init', 'cf7tmrb_add_task_management_form' );
} else {
	/**
	 * Plugin Setup (On Notification to Admin)
	 *
	 * The Contact Form 7 plugin Not Installed
	 * Notification Send to plugin page.
	 */
	function cf7tmrb_my_admin_notice() {
		?>
		<div class="error">
			<p>
			<?php _e( '<b>Plugin Name: Task Management 7 - Contact Form 7 plugin for Restyaboard, the open source Trello alternative :</b> Contact Form 7 is not installed and / or active! Please install <a target="_blank" href="https://wordpress.org/plugins/contact-form-7/">Contact Form 7</a>.', 'cf7tmrb' ); ?>
			</p>
		</div>
		<?php
	}
	add_action( 'admin_notices', 'cf7tmrb_my_admin_notice' );
}
