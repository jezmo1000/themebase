<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crockpot-2016
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( "recipe-tile" )); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
			<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php  crockpot_2016_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
