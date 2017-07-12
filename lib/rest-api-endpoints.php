<?php
/**
 * Generate endpoint for REST API
 */
add_action( 'rest_api_init', 'cr_register_rest_endpoint' );

/**
 * Just sports/basketball/nba questions
 */
function cr_register_rest_endpoint() {

	register_rest_route( 'quizian', '/questions', array(
		'methods'  => 'GET',
		'callback' => 'levon_rest_api_questions'
	) );

	register_rest_route( 'quizian', '/sports/basketball/nba/(?P<num>\d+)', array(
		'methods'  => 'GET',
		'callback' => 'levon_rest_api_sports_bb_nba'
	) );
}

function levon_rest_api_questions() {
	/**
	 * Get Professional Basketball Data
	 */
	global $wpdb;

	$table = $wpdb->prefix . 'quizian';
	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `cat` = 'history'";
	$data  = $wpdb->get_results( $query );

	$data_array_history = [];
	foreach ( $data as $item ) {
		$data_array_history[] = array(
			'q' => $item->question,
			'c' => $item->correct,
			'i' => array( $item->incorrect_1, $item->incorrect_2, $item->incorrect_3 ),
		);
	}

	//return $data_array_history;

	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `cat` = 'sports'";
	$data  = $wpdb->get_results( $query );

	$data_array_sports = [];
	foreach ( $data as $item ) {
		$data_array_sports[] = array(
			'q' => $item->question,
			'c' => $item->correct,
			'i' => array( $item->incorrect_1, $item->incorrect_2, $item->incorrect_3 ),
		);
	}


	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `cat` = 'geography'";
	$data  = $wpdb->get_results( $query );

	$data_array_geography = [];
	foreach ( $data as $item ) {
		$data_array_geography[] = array(
			'q' => $item->question,
			'c' => $item->correct,
			'i' => array( $item->incorrect_1, $item->incorrect_2, $item->incorrect_3 ),
		);
	}

	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `cat` = 'music'";
	$data  = $wpdb->get_results( $query );

	$data_array_music = [];
	foreach ( $data as $item ) {
		$data_array_music[] = array(
			'q' => $item->question,
			'c' => $item->correct,
			'i' => array( $item->incorrect_1, $item->incorrect_2, $item->incorrect_3 ),
		);
	}

	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `cat` = 'entertainment'";
	$data  = $wpdb->get_results( $query );

	$data_array_entertainment = [];
	foreach ( $data as $item ) {
		$data_array_entertainment[] = array(
			'q' => $item->question,
			'c' => $item->correct,
			'i' => array( $item->incorrect_1, $item->incorrect_2, $item->incorrect_3 ),
		);
	}

	//return $data_array_sports;

	$data_array[] = array(
		'history'       => $data_array_history,
		'sports'        => $data_array_sports,
		'geography'     => $data_array_geography,
		'music'         => $data_array_music,
		'entertainment' => $data_array_entertainment,
	);

	return $data_array;


}

function levon_rest_api_sports_bb_nba( $param ) {
	/**
	 * Get Professional Basketball Data
	 */
	global $wpdb;

	$table = $wpdb->prefix . 'quizian';
	$query = "SELECT `question`, `correct`, `incorrect_1`, `incorrect_2`, `incorrect_3` from {$table} WHERE `sub_sub_cat` = 'nba' ORDER BY RAND() LIMIT {$param['num']}";
	$data  = $wpdb->get_results( $query );

	$data_array = [];
	foreach ( $data as $item ) {
		$data_array[] = array(
			'q' => $item->question,
			'c' => $item->correct,
			'i' => array( $item->incorrect_1, $item->incorrect_2, $item->incorrect_3 ),
		);
	}

	return $data_array;
}