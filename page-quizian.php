<?php
/**
 * Template Name: Quizian Question Form
 */

// process form submission

//$wpdb->insert($table_name, array(
//	'question' => 'What number was worn by NBA great Kevin McHale?',
//	'correct' => '34',
//	'incorrect_1' => '23',
//	'incorrect_2' => '33',
//	'incorrect_3' => '35',
//	'cat' => 'sports',
//	'sub_cat' => 'basketball',
//	'sub_sub_cat' => 'nba',
//));





get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<h1>Quizian</h1>


		<form action="#" method="post">
			<input name="question" placeholder="Question"/>
			<input name="correct" placeholder="Correct Answer"/>
			<input name="incorrect_1" placeholder="Incorrect Answer 1"/>
			<input name="incorrect_2" placeholder="Incorrect Answer 2"/>
			<input name="incorrect_3" placeholder="Incorrect Answer 3"/>
			<select name="category">
				<option value="sports">Sports</option>
				<option value="art">Art</option>
			</select>
			<select name="sub_category">
				<option value="basketball">Basketball</option>
				<option value="baseball">Baseball</option>
			</select>
			<select name="sub_sub_category">
				<option value="nba">NBA</option>
				<option value="ncaa">NCAA</option>
			</select>
		</form>

	</section>
	<!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

