<?php
/*
Plugin Name:  WPBeginner Plugin Tutorial
Plugin URI:   https://www.wpbeginner.com
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area.
Version:      1.0
Author:       WPBeginner
Author URI:   https://www.wpbeginner.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/
?>

<?php
function wpb_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 
// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles
 
$content .= '<div><p class="follow-us">Add links to all posts via a custom plugin <a href="https://www.linkedin.com/in/semenenkomaria/" title="Linkedin" target="_blank" rel="nofollow">Linkedin</a> and <a href="https://www.facebook.com/wpbeginner" title="WPBeginner on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p></div>';

 
}
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'wpb_follow_us');







function wpb_plugin_enqueue_styles() {
    wp_enqueue_style('wpb-plugin-style', plugins_url('wpb-plugin-style.css', __FILE__));

}
add_action('wp_enqueue_scripts', 'wpb_plugin_enqueue_styles'); 

