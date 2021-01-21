<?php
/**
* Plugin Name: Add Subscribers to Contributors
* Plugin URI:  https://github.com/RenderbitTechnologies/Add-Subscribers-to-Contributors
* Description: WordPress plugin to add subscribers as authors for pages & plugins
* Version:     1.0.0
* Author:      Renderbit Technologies
* Author URI:  https://renderbit.com
* License:     GPLv2
* Text Domain: add-subscribers-to-contributors
*
* @link    https://github.com/RenderbitTechnologies/Add-Subscribers-to-Contributors
*
* @package Add_Subscribers_To_Contributors
* @version 1.0.0
*
*/

add_filter( 'wp_dropdown_users_args', 'add_subscribers_to_dropdown', 10, 2 );

function add_subscribers_to_dropdown( $query_args, $r ) {
	$query_args['who'] = '';
	return $query_args;
}
