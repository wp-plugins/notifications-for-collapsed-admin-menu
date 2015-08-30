<?php
/**
 * Plugin Name: Notifications for Collapsed Admin Menu
 * Version:     1.2.1
 * Plugin URI:  http://coffee2code.com/wp-plugins/notifications-for-collapsed-admin-menu/
 * Author:      Scott Reilly
 * Author URI:  http://coffee2code.com/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: Highlights the comments and plugins icons in the collapsed admin sidebar menu when notifications are pending.
 *
 * Compatible with WordPress 2.8 through 4.3+.
 *
 * =>> Read the accompanying readme.txt file for instructions and documentation.
 * =>> Also, visit the plugin's homepage for additional information and updates.
 * =>> Or visit: https://wordpress.org/plugins/notifications-for-collapsed-admin-menu/
 *
 * @package Notifications_for_Collapsed_Admin_Menu
 * @author  Scott Reilly
 * @version 1.2.1
 */

/*
 * TODO:
 * - Explore other methods of notification (i.e. numeric count)
 * - Don't assign tooltip to comment icon if it has submenus (and thus WP would show pending comments count)
 */

/*
	Copyright (c) 2010-2015 by Scott Reilly (aka coffee2code)

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined( 'ABSPATH' ) or die();

if ( is_admin() && ! class_exists( 'c2c_NotificationsForCollapsedAdminMenu' ) ) :

	class c2c_NotificationsForCollapsedAdminMenu {

		/**
		 * Returns version of the plugin.
		 *
		 * @since 1.1.1
		 */
		public static function version() {
			return '1.2.1';
		}

		/**
		 * Initialization (primarily hooking actions).
		 */
		public static function init() {
			add_action( 'admin_enqueue_scripts', array( __CLASS__, 'add_css' ) );
			add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_js' ) );
		}

		/**
		 * Echoes CSS within style tag.
		 */
		public static function add_css() {
			global $wp_version;

			$admin_color = get_user_option( 'admin_color' );

			if ( version_compare( $wp_version, '3.7.99', '>' ) ) {
				switch ( $admin_color ) {
					case 'fresh':
						$default_color = '#444';
						break;
					case 'light':
						$default_color = '#ccc';
						break;
					default:
						$default_color = '#7c7976';
				}
			} elseif ( version_compare( $wp_version, '3.1.99', '>' ) ) {
				$default_color = $admin_color == 'fresh' ? '#7c7976' : '#5589aa';
			} elseif ( version_compare( $wp_version, '2.9.99', '>' ) ) {
				$default_color = $admin_color == 'fresh' ? '#787878' : '#e66f00';
			} else {
				$default_color = '#e66f00';
			}

			$color = apply_filters( 'c2c_collapsed_admin_menu_icon_highlight_color', $default_color );

			echo <<<HTML
			<style type="text/css">
			.folded #adminmenu li.collapsed-with-pending {
				background-color:$color;
				border-left-color:$color;
				border-right-color:$color;
			}
			</style>

HTML;
		}

		/**
		 * Enqueues javascript.
		 */
		public static function enqueue_js() {
			$base = 'notifications-for-collapsed-admin-menu';
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( $base, plugins_url( basename( dirname( __FILE__ ) ) . '/' . $base . '.js' ), array( 'jquery' ), '1.0', true );
		}
	}
	c2c_NotificationsForCollapsedAdminMenu::init();

endif;
