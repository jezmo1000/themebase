<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crockpot-2016
 */

// Get a list of terms based on parent term
$term_id = get_term_by( 'slug', 'slow-cookers', 'type' )->term_id;
$terms = get_terms( array(
    'taxonomy' => 'type',
		'child_of' => $term_id,
    'hide_empty' => false,
) );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	echo '<ul>';
		foreach ($terms as $term) {
			echo '<li><a href="'. get_term_link( $term ) .'">' . $term->name . '</a></li>';
		}
	echo '</ul>';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php crockpot_2016_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'crockpot-2016' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'crockpot-2016' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php get_template_part( 'template-parts/content', 'ingredients' ); ?>
	<?php get_template_part( 'template-parts/content', 'timings' ); ?>
	<footer class="entry-footer">
		<?php crockpot_2016_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
