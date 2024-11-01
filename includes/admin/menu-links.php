<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Task Management Menu Link Function Handler
 */

// add task management menu under contact form 7 menu.
add_action( 'admin_menu', 'cf7tmrb_admin_menu', 20 );
/**
 * Admin Task Management Menu Handler
 */
function cf7tmrb_admin_menu() {
	add_submenu_page( 'wpcf7', __( 'Task Management 7', 'contact-form-7' ), __( 'Task Management 7', 'contact-form-7' ), 'wpcf7_edit_contact_forms', 'task_management_7', 'task_management_7' );
}

// add task management setting under plugin page.
add_filter( 'plugin_action_links', 'cf7tmrb_plugin_settings_link', 10, 2 );
/**
 * Admin Plugin Setting Link Handler
 *
 * @param  array  $links Add the link to plugin page.
 * @param string $file get the file name from plugin page.
 */
function cf7tmrb_plugin_settings_link( $links, $file ) {
	if ( 'task-management-7/task-management-7-contact-form-7-plugin-for-restyaboard.php' == $file ) {
		$settings_link = '<a href="admin.php?page=task_management_7">' . __( 'Settings', 'PTP_LOC' ) . '</a>';
		array_unshift( $links, $settings_link );
	}
	return $links;
}
