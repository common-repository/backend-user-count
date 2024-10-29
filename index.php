<?php
/*
Plugin Name: Backend User Count
Version: 1.1
Plugin URI: https://en.wordpress.org/plugins/backend-user-count
Description: Let non-admin users view your site's user count on their backend.
Author: Dimitris Siakavelis
Author URI: https://dimitris.siakavelis.gr
*/

// generate wp-admin menu 
add_action('admin_menu', 'ds_backend_user_count');
function ds_backend_user_count(){
    add_menu_page( 'Backend User Count', 'Backend User Count', 'edit_posts', 'backend-user-count', 'ds_backend_user_count_settings' );
}


function ds_backend_user_count_settings(){
    include "backend-user-count.php";
}
