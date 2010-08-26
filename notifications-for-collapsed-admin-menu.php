<?php
/**
 * @package Notifications_for_Collapsed_Admin_Menu
 * @author Scott Reilly
 * @version 1.0
 */
/*
Plugin Name: Notifications for Collapsed Admin Menu
Version: 1.0
Plugin URI: http://coffee2code.com/wp-plugins/notifications-for-collapsed-admin-menu/
Author: Scott Reilly
Author URI: http://coffee2code.com
Description: Highlights the comments and plugins icons in the collapsed admin sidebar menu when notifications are pending.

Compatible with WordPress 2.8+, 2.9+, 3.0+.

=>> Read the accompanying readme.txt file for instructions and documentation.
=>> Also, visit the plugin's homepage for additional information and updates.
=>> Or visit: http://wordpress.org/extend/plugins/notifications-for-collapsed-admin-menu/

*/

/*
Copyright (c) 2010 by Scott Reilly (aka coffee2code)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy,
modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR
IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

if ( is_admin() && !class_exists( 'c2c_NotificationsForCollapsedAdminMenu' ) ) :

	class c2c_NotificationsForCollapsedAdminMenu {

		/**
		 * Initialization (primarily hooking actions)
		 *
		 * @return void
		 */
		function init() {
			add_action( 'admin_head', array( __CLASS__, 'add_css' ) );
			add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_js' ) );
		}

		/**
		 * Echoes CSS within style tag.
		 *
		 * @return void (Text will be echoed.)
		 */
		function add_css() {
			global $wp_version;
			$default_color = version_compare( $wp_version, '2.9.99', '>' ) ? '#787875' : '#e66f00';
			$color = apply_filters( 'c2c_collapsed_admin_menu_icon_highlight_color', $default_color );
			echo <<<CSS
			<style type="text/css">
			.collapsed-with-pending {
				background-color:$color !important;
				border-right-color:$color !important;
				border-left-color:$color !important;
			}
			#menu-comments.collapsed-with-pending {
				border-bottom-color:$color !important;
			}
			</style>

CSS;
		}

		/**
		 * Enqueues javascript.
		 *
		 * @return void
		 */
		function enqueue_js() {
			$base = 'notifications-for-collapsed-admin-menu';
			wp_enqueue_script( $base, plugins_url( basename( dirname( __FILE__ ) ) . '/' . $base . '.js' ), array( 'jquery' ), '1.0', true );
		}
	}
	c2c_NotificationsForCollapsedAdminMenu::init();

endif;

?>