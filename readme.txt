=== Notifications for Collapsed Admin Menu ===
Contributors: coffee2code
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6ARCFJ9TX3522
Tags: admin, sidebar, menu, comments, moderation, pending, plugins, update, notification, highlight, coffee2code
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 2.8
Tested up to: 4.3
Stable tag: 1.2.1

Highlights the comments and plugins icons in the collapsed admin sidebar menu when notifications are pending.


== Description ==

In the WordPress admin, when the left sidebar menu is expanded WordPress presents you with a highlighted number within the menu itself indicating the number of pending comments (i.e. comments in moderation) and a separate number for the number of plugins with updates.

However, if you collapse the sidebar menu, then there are *no* visual indications that either types of updates are available.  You can view the count of updated plugins by hovering on the plugins icon, but you must manually do that to learn of updates.  No such hovering count exists for the comments icon, so the only ways to find out about pending comments are to visit the dashboard, visit the comments admin page, or expand the menu

This plugin enhances the sidebar menu to display a visual indication that comments are in moderation and/or there are plugin updates available.  It does so by using a different colored background for the icon (see the screenshot).  Additionally, if you hover over the comments icon, it will indicate the count of pending comments.  (The plugins icon already provides a count of updated plugins when you hover over it.)  The visual indication is also updated when AJAX-based requests are made (so doing an in-line approval of the last pending comment will cause the comments icon background color to return to its non-highlighted color).

By default, the plugin utilizes WordPress's pending/update count background highlight color, which for WP 2.8/2.9 is #e66f00 and for WP 3.0 is #787875.

*NOTE:* As the plugin's name suggests, this plugin only takes effect if the admin sidebar menu is collapsed.  Also, the admin user must have JavaScript enabled.

Links: [Plugin Homepage](http://coffee2code.com/wp-plugins/notifications-for-collapsed-admin-menu/) | [Plugin Directory Page](https://wordpress.org/plugins/notifications-for-collapsed-admin-menu/) | [Author Homepage](http://coffee2code.com)


== Installation ==

1. Download the file notifications-for-collapsed-admin-menu.zip and unzip it into your /wp-content/plugins/ directory (or install via the built-in WordPress plugin installer).
1. Activate the plugin through the 'Plugins' admin menu in WordPress


== Frequently Asked Questions ==

= Why doesn't this plugin apply when the admin sidebar menu is expanded? =

There is no need for this plugin to do anything in this situation because WordPress already presents a visible count of pending comments and plugins with updates.

= Can I change the background color used to highlight the comments/plugins icons? =

You can customize the background color used by applying a filter to 'c2c_collapsed_admin_menu_icon_highlight_color'.  For example, in your theme's functions.php file, you can add this line (but replace "#f5f500" with the color you want):

`add_filter( 'c2c_collapsed_admin_menu_icon_highlight_color', create_function( '', 'return "#f5f500";' ) );`


== Screenshots ==

1. A comparison of a collapsed admin sidebar menu for a stock WordPress installation, with the plugin activated under WP 2.8+/2.9+, and under WP 3.x+ and WP 4.x+.


== Changelog ==

= () =
* Update: Note compatibility through WP 4.3+

= 1.2.1 (2015-02-25) =
* Reformat plugin header
* Minor code reformatting (spacing, bracing)
* Change documentation links to wp.org to be https
* Minor documentation spacing changes throughout
* Note compatibility through WP 4.1+
* Update copyright date (2015)
* Add plugin icon

= 1.2 (2013-12-18) =
* Detect WP 3.8 and determine default background colors based on the chosen admin color theme
* Minor code tweaks (spacing)
* Note compatibility through WP 3.8+
* Update copyright date (2014)
* Change donate link
* Update banner image to reflect WP 3.8 admin refresh
* Update screenshot to reflect WP 3.8 admin refresh

= 1.1.3 =
* Add check to prevent execution of code if file is directly accessed
* Note compatibility through WP 3.5+
* Update copyright date (2013)
* Move screenshot into repo's assets directory

= 1.1.2 =
* Re-license as GPLv2 or later (from X11)
* Add 'License' and 'License URI' header tags to readme.txt and plugin file
* Remove ending PHP close tag
* Update screenshot for WP 3.4
* Minor readme.txt changes
* Note compatibility through WP 3.4+

= 1.1.1 =
* Hook 'admin_enqueue_scripts' action instead of 'admin_head' to output CSS
* Add version() to return plugin version
* Note compatibility through WP 3.3+
* Add link to plugin directory page to readme.txt
* Update copyright date (2012)

= 1.1 =
* Add admin color scheme-specific color defaults
* Improve CSS by making selector more specific in order to eliminate !important clauses
* Detect changed id/class selectors in jQuery and use WP 3.2 appropriate ids/classes
* Explicitly enqueue jQuery
* Note compatibility through WP 3.2+
* Minor documentation reformatting in readme.txt
* Fix plugin homepage and author links in description in readme.txt

= 1.0.1 =
* Fix bug with incorrect pending comment count when comment menu has submenu item(s)
* Explicitly declare all class function public static
* Note compatibility through WP 3.1+
* Update copyright date (2011)

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.2.1 =
Trivial update: noted compatibility through WP 4.1+ and updated copyright date (2015)

= 1.2 =
Minor update: better background color defaults under WP 3.8; updated banner and screenshot images; noted compatibility through WP 3.8+

= 1.1.3 =
Trivial update: noted compatibility through WP 3.5+

= 1.1.2 =
Trivial update: noted compatibility through WP 3.4+; explicitly stated license

= 1.1.1 =
Trivial update: noted compatibility through WP 3.3+ and minor tweaks (not related to functionality)

= 1.1 =
Minor update: added admin color scheme-specific color defaults; noted compatibility through WP 3.2+

= 1.0.1 =
Minor update: minor bugfix, noted compatibility with WP 3.1+, and updated copyright date.

= 1.0 =
Official initial release!
