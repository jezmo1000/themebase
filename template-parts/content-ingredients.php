<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crockpot-2016
 */

?>
<div id="post-<?php the_ID(); ?>">

	<?php
	 	$field_name = 'ingredients';
		$field = get_field_object( $field_name, $post->ID );

	if( $field ) {
			echo '<h3>' . $field['label'] . '</h4>';

			echo $field['value'];
	} ?>
</div>
