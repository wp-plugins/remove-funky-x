=== Remove Funky X ===
Contributors: ionoff
Donate link: http://sixthsen.se/wpplugins/#remove_funky_x
Tags: x, ×, &#215;, remove, wptexturize, funky x, sanitize
Requires at least: 2.6
Tested up to: 2.9.1
Stable tag: trunk

Replaces #×# with #x#: This plugin removes the funky X's that wordpress adds on #x# patterns in titles and posts. (# is any digit).

== Description ==

Don't you hate it when your posts get things like 1&#215;01 and wish it was easy to make it do 1x01 without editing the wordpress code?
This plugin does just that. This plugin removes the funky X's that wordpress adds on #x# patterns in titles and posts. (# is any digit).

== Installation ==

1. Upload `remove_funky_x.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Do I need to do anything else? =

Nope, it will do the rest without any config.



== Screenshots ==

1. Quick Example, Before and After
2. This is a screenshot of a site not using the plugin.  Notice how it breaks links, it also messes up some RSS readers.
3. This is a screenshot of a site using the plugin.  Notice how it just works and shows up as expected.

== Changelog ==

= 2.0.0 =
* Released Jan 5, 2010
* Provided Update to make compatible with WP Upgrade 2.9.1
* This was a rewrite to detour function, call function, and then replace value.
* The old method of just detouring the function needed the script updated every-time wordpress made any significant changes to its functions, more specifically wptexturize.
* This should make it more resilient to wordpress upgrades.
* This is the first public release.

= 1.0.5 =
* Provided Update to make compatible with WP Upgrade 2.8.6

= 1.0.4 =
* Provided Update to make compatible with WP Upgrade 2.8.5

= 1.0.3 =
* Provided Update to make compatible with WP Upgrade 2.8.1

= 1.0.2 =
* Provided Update to make compatible with WP Upgrade 2.7

= 1.0.1 =
* Provided Update to make compatible with WP Upgrade 2.6

= 1.0.0 =
* Initial Release

