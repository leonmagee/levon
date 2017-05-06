<?php

/**
 * Generate endpoint for REST API
 */
add_action( 'rest_api_init', 'cr_register_rest_endpoint' );

function cr_register_rest_endpoint() {

	register_rest_route( 'quizian', '/sports/basketball/nba', array(
		'methods'  => 'GET',
		'callback' => 'levon_rest_api_sports_bb_nba'
	) );

//	register_rest_route( 'cr', '/reservations', array(
//		//'methods'  => WP_REST_Server::READABLE,
//		'methods'  => 'GET',
//		'callback' => 'cr_rest_api_callback_reservations'
//	) );

//	register_rest_route( 'cr', '/email', array(
//		'methods'  => 'POST',
//		'callback' => 'cr_rest_api_send_email'
//	) );

//	register_rest_route( 'cr', '/users_info', array(
//		'methods'  => 'POST',
//		'callback' => 'cr_rest_api_user_authenticate'
//	) );
}

function levon_rest_api_sports_bb_nba() {
	/**
	 * Get Professional Basketball Data
	 */

	$data_array = array(
		array(
			'q' => 'What number was worn by NBA great Larry Bird?',
			'c' => '33',
			'i' => array( '23', '34', '35' ),
			'm' => array(
				'c' => 'sports',
				'sc' => 'basketball',
				'ssc' => 'nba'
			)
		)
	);


	return $data_array;
}

//
//function cr_rest_api_callback_reservations() {
//	/**
//	 * Query Reservation Data
//	 */
//	$args = array( 'post_type' => 'reservation' );
//
//	$restaurant_query = new WP_Query( $args );
//
//	$data_array = array();
//
//	while ( $restaurant_query->have_posts() ) {
//
//		$restaurant_query->the_post();
//
//		$item_array = array();
//
//		$field_array = array(
//			'restaurant',
//			'customer_name',
//			'customer_email',
//			'concierge',
//			'concierge_id'
//			//'number_of_patrons',
//			//'reservation',
//			//'date_time'
//		);
//
//		foreach ( $field_array as $item ) {
//
//			$item_array[ $item ] = get_field( $item );
//		}
//
//		$data_array[] = $item_array;
//
//	}
//
//	return $data_array;
//}

//function cr_rest_api_send_email( $data ) {
//
//	/**
//	 * Data I need
//	 * 1. customer email
//	 * 2. res info (if any?) be nice to leave this out
//	 * 3. discounts / promotions
//	 * 4. discount code? - scan-able qr code
//	 */
//
//	$body         = $data->get_body();
//	$body_decoded = json_decode( $body );
//
//	/**
//	 * what does the data look like?
//	 * 1. restaurant
//	 * 2. barcode image {concierge name - coupon code}
//	 * 3. discounts
//	 * 4. if reservation - date / time / etc... (lets leave this out)
//	 */
//
//	$email          = $body_decoded->email;
//	$name           = $body_decoded->name;
//	$restaurant     = $body_decoded->restaurant;
//	$concierge      = $body_decoded->concierge;
//	$map_url        = $body_decoded->map_url;
//	$website_url    = $body_decoded->website_url;
//	$menu_url       = $body_decoded->menu_url;
//	$google_map_url = $body_decoded->google_map_url;
//
//	$to      = $email;
//	$subject = 'Concierge Reservation - ' . $restaurant;
//
//	$body = '<div style="padding-left: 10px; padding-right: 10px;">
//
//		<h2 style="color: #08C5B1">Concierge Reservation</h2>
//
//		<div>
//			Thank you <strong>' . $name . '</strong> for choosing to dine at <strong>' . $restaurant . '</strong>.
//		</div>
//		<div>
//			<h3 style="border-bottom: 1px solid #EEE; padding-bottom: 3px;">Coupon</h3>
//			<div>Coupon description</div>
//			<div>Coupon barcode</div>
//		</div>
//		<div>
//			<h3 style="border-bottom: 1px solid #EEE; padding-bottom: 3px">' . $restaurant . ' Info</h3>
//			<div style="color: #333; font-weight: bold;" >
//				532 4th Ave<br />
//				San Diego, CA 92101
//			</div>
//			<div style="margin-top: 15px; margin-bottom: 15px;">
//				<a style="text-decoration: none; font-size: 13px; background-color: #08C5B1; color: white; padding: 5px 10px; border-radius: 5px; font-weight: bold; margin-right: 15px;" href="' . $website_url . '">WEBSITE</a>
//				<a style="text-decoration: none; font-size: 13px; background-color: #08C5B1; color: white; padding: 5px 10px; border-radius: 5px; font-weight: bold; margin-right: 15px;" href="' . $menu_url . '">MENU</a>
//				<a style="text-decoration: none; font-size: 13px; background-color: #08C5B1; color: white; padding: 5px 10px; border-radius: 5px; font-weight: bold; margin-right: 15px;" href="' . $google_map_url . '">GOOGLE MAPS</a>
//			</div>
//		</div>
//		<div>
//			<h3 style="margin-bottom: 0">Map to ' . $restaurant . '</h3>
//			<div style="padding-left: 15px; padding-right: 15px">
//				<img src="' . $map_url . '"/>
//			</div>
//		</div>
//	</div>';
//
//	//comgooglemaps://?center=32.710875, -117.161043&zoom=14
//
//	$headers = array(
//		'Content-Type: text/html; charset=UTF-8',
//		'From: Concierge Reservation <thankyou@conciergereservation.com>'
//	);
//
//	wp_mail( $to, $subject, $body, $headers );
//
//	/**
//	 * Return data to the app - indicate success of email?
//	 * I need to test what happends when the email doesn't work - i.e. incorrect address?
//	 */
//	return array(
//		'name'       => $name,
//		'restaurant' => $restaurant,
//		'concierge'  => $concierge,
//		'success'    => 'true',
//		'body'       => $body_decoded
//	);
//}

//function cr_rest_api_user_authenticate() {
//
//	$users_array = get_field( 'registered_concierge_users', 'option' );
//
//	return $users_array;
//}


