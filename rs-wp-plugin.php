<?php
/*
Plugin Name: RS WP Plugin
Description: Multipurpose WordPress plugin development.
Plugin URI:  https://wp.wittyplex.com/plugins
Author:      Mozahidur Rahman Rousnay
Version:     1.0
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/

*/

// #using action hook with init hook & wp_mail();
// function rs_wp_email()
// {
//     wp_mail('test@email.com', 'Subject', 'Message...');
// }
// add_action('init', 'rs_wp_email');


// #using filter hook with the_content hook;
// function rs_filter_test($content)
// {
//     $content = $content . '<p>Custom content.. </p>';
//     return $content;
// }
// add_filter('the_content', 'rs_filter_test');


// do stuff with activation hook
// function myplugin_on_activation()
// {
//     if (!current_user_can('activate_plugins')) return;
//     add_option('myplugin_posts_per_page', 10);
//     add_option('myplugin_show_welcome_page', true);
// }
// register_activation_hook(__FILE__, 'myplugin_on_activation');


// do stuff with deactivation hook
// function myplugin_on_deactivation()
// {
//     if (!current_user_can('activate_plugins')) return;
//     flush_rewrite_rules();
// }
// register_deactivation_hook(__FILE__, 'myplugin_on_deactivation');


// do stuff with uninstall hook
// function myplugin_on_uninstall()
// {
//     if (!current_user_can('activate_plugins')) return;
//     delete_option('myplugin_posts_per_page', 10);
//     delete_option('myplugin_show_welcome_page', true);
// }
// register_uninstall_hook(__FILE__, 'myplugin_on_uninstall');

// // pluggable function
// function wp_logout() {
// 	wp_destroy_current_session();
// 	wp_clear_auth_cookie();
// 	myplugin_custom_logout();
// 	do_action( 'wp_logout' );
// }
// // customize logout function
// function myplugin_custom_logout() {
// 	// do something when the user logs out..
// }