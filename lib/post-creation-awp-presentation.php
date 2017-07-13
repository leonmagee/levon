<?php

/**
 * Get data from Reddit api and create posts
 */
function create_posts_from_reddit() {

	$reddit_data = wp_remote_get( 'https://www.reddit.com/r/Wordpress/.json' );

	$reddit_data_decode = json_decode( $reddit_data['body'] );

	foreach ( $reddit_data_decode->data->children as $item ) {
		$post_title    = $item->data->title; // post title
		$reddit_author = $item->data->author; // author
		$up_votes      = $item->data->ups; // up votes

		$my_post = array(
			'post_title'  => $post_title,
			'post_status' => 'publish',
			'post_type'   => 'post',
		);

		$post_id = wp_insert_post( $my_post );

		update_field( 'reddit_author', $reddit_author, $post_id );
		update_field( 'up_votes', $up_votes, $post_id );
	}
}

create_posts_from_reddit();


// wp_cron