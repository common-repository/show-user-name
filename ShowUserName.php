<?php
/**
* Plugin Name: Show user name
* Plugin URI: https://wordtune.me
* Description: Use the shortcode [name] on any page ore post to show logged in user name.
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function show_user_name (){
global $current_user; wp_get_current_user();
 if ( is_user_logged_in() ) {
 echo esc_attr ($current_user->display_name . "\n"); }
else { wp_loginout(); }
}
add_shortcode ( 'name', 'show_user_name' );
?>
