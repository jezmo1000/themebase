<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crockpot-2016
 */

?>
<div class="timings">
	<?php if( get_field('cooking_time', $post->ID ) ) {
			echo '<h3>Cooking Time</h3>';
			echo '<p class="timings_cook">' . get_field('cooking_time', $post->ID ) . '</p>';
	} ?>
	<?php if( get_field('preparation_time', $post->ID ) ) {
			echo '<h3>Preparation Time</h3>';
			echo '<p class="timings_prep">' . get_field('preparation_time', $post->ID ) . '</p>';
	} ?>
</div>
