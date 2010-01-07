<?php
/*
Plugin Name: Remove Funky X's
Plugin URI: http://sixthsen.se/wpplugins/#remove_funky_x
Description: This plugin removes the funky X's that wordpress adds on #x# patterns in titles and posts. (# is any digit).  I was tired of wordpress replacing X's and having to edit wptexturize each update, this does it as a plugin.
Version: 2.0.0
Author: Eion O <ionoff@oneddl.com>
Author URI: http://www.oneddl.com/

 You may use this as you wish, but there is no warranty or guarantee, use at your own risk.
 This is licensed under GPL - Terms and License at < http://www.gnu.org/licenses/gpl.html >
 Give me credit if you modify or distribute

Revision History:
2.0.0 Jan 5, 2010
Provided Update to make compatible with WP Upgrade 2.9.1
This was a rewrite to detour function, call function, and then replace value.
The old method of just detouring the function needed the script updated every-time wordpress made any significant changes to its functions, more specifically wp_texturize.
This should make it more resilient to wordpress upgrades.

1.0.5
Provided Update to make compatible with WP Upgrade 2.8.6

1.0.4
Provided Update to make compatible with WP Upgrade 2.8.5

1.0.3
Provided Update to make compatible with WP Upgrade 2.8.1

1.0.2
Provided Update to make compatible with WP Upgrade 2.7

1.0.1
Provided Update to make compatible with WP Upgrade 2.6

1.0.0: Initial Release

*/

function ion_wptexturize($text)
{
        $text = wptexturize($text);
        $text = str_replace('&#215;', 'x', $text);
        return $text;
}

$filters = array(
        'bloginfo',
        'comment_author',
        'comment_text',
        'link_description',
        'link_name',
        'link_notes',
        'list_cats',
        'single_post_title',
        'term_description',
        'term_name',
        'the_content',
        'the_excerpt',
        'the_title',
        'wp_title',
        'the_rss_content',
        'widget_title'
);
foreach ($filters as $filter)
{
        remove_filter($filter, 'wptexturize');
        add_filter($filter, 'ion_wptexturize');
}

?>
