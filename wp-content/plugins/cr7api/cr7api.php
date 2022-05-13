<?php
/**
 * Plugin Name: CF7 Form Trap
 * Plugin URI: https://github.com/yttechiepress/cf7-trap-api
 * Author: Techiepress
 * Author URI: https://github.com/yttechiepress/cf7-trap-api
 * Description: Get CF7 Data and send to API
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: cf7-trap-api
*/

defined( 'ABSPATH' ) or die( 'Unauthorized access!' );

add_action( 'cfdb7_before_save', 'pabau_cf7_data' );

function pabau_cf7_data( $form_data ) {

    $upload_dir = home_url( 'wp-content/uploads/cfdb7_uploads/' );

    $data = [
        'api_key' => $form_data['MTAwNjc06c939651250603f2137b69c2e172c47'],
        'redirect_link' => $form_data['https://www.pabau.com'],
        'Fname' => $form_data['Fname'],
        'Lname' => $form_data['Lname'],
    ];

    $url = 'https://recruitment.pabau.me/OAuth2/leads/lead-curl.php';

    $args = [
        'method' => 'POST',
        'body'   => $data,
    ];

    wp_remote_post( $url, $args );
     
}