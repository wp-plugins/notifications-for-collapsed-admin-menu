=== Notifications for Collapsed Admin Menu ===
Contributors: coffee2code
Donate link: http://coffee2code.com/donate
Tags: admin, sidebar, menu, comments, moderation, pending, plugins, update, notification, highlight, coffee2code
Requires at least: 2.8
Tested up to: 3.0.1
Stable tag: 1.0
Version: 1.0

Highlights the comments and plugins icons in the collapsed admin sidebar menu when notifications are pending.


== Description ==

Highlights the comments and plugins icons in the collapsed admin sidebar menu when notifications are pending.

In the WordPress admin, when the sidebar menu is expanded WordPress presents you with a highlighted number within the menu itself indicating the number of pending comments (i.e. comments in moderation) and a separate number for the number of plugins with updates.

However, if you collapse the sidebar menu, then there are *no* visual indications that either types of updates are available.  You can view the count of updated plugins by hovering on the plugins icon, but you must manually do that to learn of updates.  No such hovering count exists for the comments icon, so the only ways to find out about pending comments are to visit the dashboard, visit the comments admin page, or expand the menu

This plugin enhances the sidebar menu to display a visual indication that comments are in moderation and/or there are plugin updates available.  It does so by using a different colored background for the icon (see the screenshot).  Additionally, if you hover over the comments icon, it will indicate the count of pending comments.  (The plugins icon already provides a count of updated plugins when you hover over it.)  The visual indication is also updated when AJAX-based requests are made (so doing an in-line approval of the last pending comment will cause the comments icon background color to return to its non-highlighted color).

By default, the plugin utilizes WordPress's pending/update count background highlight color, which for WP 2.8/2.9 is #e66f00 and for WP 3.0 is #787875.

*NOTE:* As the plugin's name suggests, this plugin only takes effect if the admin sidebar menu is collapsed.  Also, the admin user must have JavaScript enabled.

*ADVANCED:* You can customize the background color used by applying a filter to 'c2c_collapsed_admin_menu_icon_highlight_color'.  For example, in your theme's functions.php file, you can add this line (but replace "#f5f500" with the color you want):

    `add_filter( 'c2c_collapsed_admin_menu_icon_highlight_color', create_function( '', 'return "#f5f500";' ) );`


== Installation ==

1. Download the file notifications-for-collapsed-admin-menu.zip and unzip it into your /wp-content/plugins/ directory (or install via the built-in WordPress plugin installer).
1. Activate the plugin through the 'Plugins' admin menu in WordPress


== Frequently Asked Questions ==

= Why doesn't this plugin apply when the admin sidebar menu is expanded? =

There is no need for this plugin to do anything in this situation because WordPress already presents a visible count of pending comments and plugins with updates.

= Can I change the background color used to highlight the comments/plugins icons? =

Yes.  See the description section for an example of the one-liner you can use to customize the color.


== Screenshots ==

1. A comparison of a collapsed admin sidebar menu for a stock WordPress installation, with the plugin activated under WP 2.8+/2.9+, and under WP 3.0+.


== Changelog ==

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.0 =
Official initial release!