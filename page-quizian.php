<?php
/**
 * Template Name: Quizian Question Form
 */

/**
 * process form submission
 **/
if (
	isset( $_POST['question'] ) && ( $question = $_POST['question'] )
	&& isset( $_POST['correct'] ) && ( $correct = $_POST['correct'] )
	&& isset( $_POST['incorrect_1'] ) && ( $incorrect_1 = $_POST['incorrect_1'] )
	&& isset( $_POST['incorrect_2'] ) && ( $incorrect_2 = $_POST['incorrect_2'] )
	&& isset( $_POST['incorrect_3'] ) && ( $incorrect_3 = $_POST['incorrect_3'] )
) {
	global $wpdb;

	$prefix     = $wpdb->prefix;
	$table_name = $prefix . 'quizian';

	$wpdb->insert( $table_name, array(
		'question'    => $question,
		'correct'     => $correct,
		'incorrect_1' => $incorrect_1,
		'incorrect_2' => $incorrect_2,
		'incorrect_3' => $incorrect_3,
		'cat'         => $_POST['category'],
		'sub_cat'     => $_POST['sub_category'],
		'sub_sub_cat' => $_POST['sub_sub_category'],
	) );
}


get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="quizian">

        <h1>Quizian</h1>

        <form action="" method="post">
            <div class="quizian-input">
                <input name="question" placeholder="Question"/>
            </div>
            <div class="quizian-input">
                <input name="correct" placeholder="Correct Answer"/>
            </div>
            <div class="quizian-input">
                <input name="incorrect_1" placeholder="Incorrect Answer 1"/>
            </div>
            <div class="quizian-input">
                <input name="incorrect_2" placeholder="Incorrect Answer 2"/>
            </div>
            <div class="quizian-input">
                <input name="incorrect_3" placeholder="Incorrect Answer 3"/>
            </div>
            <div class="quizian-input">
                <select name="category">
                    <option value="sports">Sports</option>
                    <option value="art">Art</option>
                </select>
            </div>
            <div class="quizian-input">
                <select name="sub_category">
                    <option value="basketball">Basketball</option>
                    <option value="baseball">Baseball</option>
                </select>
            </div>
            <div class="quizian-input">
                <select name="sub_sub_category">
                    <option value="nba">NBA</option>
                    <option value="ncaa">NCAA</option>
                </select>
            </div>
            <div class="quizian-input">
                <button type="submit">Submit</button>
            </div>
        </form>

    </section>
    <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
