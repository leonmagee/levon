<?php

/**
 * Generate endpoint for REST API
 */
add_action( 'rest_api_init', 'cr_register_rest_endpoint' );

/**
 * Just sports/basketball/nba questions
 */
function cr_register_rest_endpoint() {

	register_rest_route( 'quizian', '/sports/basketball/nba', array(
		'methods'  => 'GET',
		'callback' => 'levon_rest_api_sports_bb_nba'
	) );
}

function levon_rest_api_sports_bb_nba() {
	/**
	 * Get Professional Basketball Data
	 */


	global $wpdb;

	$table = $wpdb->prefix . 'quizian';
	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `sub_sub_cat` = 'nba'";
	$data = $wpdb->get_results($query);

	return $data;

//	$data_array = array(
//		array(
//			'q' => 'What number was worn by NBA great Larry Bird?',
//			'c' => '33',
//			'i' => array( '23', '34', '35' ),
//			'm' => array(
//				'c' => 'sports',
//				'sc' => 'basketball',
//				'ssc' => 'nba'
//			)
//		)
//	);
//
//
//	return $data_array;
}

