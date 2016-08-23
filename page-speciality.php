<?php
/**
 * The template for displaying archive pages.
 *
 * Template Name: Speciality Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crockpot-2016
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php

			$args = array(
				'post_type' => 'product',
				'tax_query' => array(
						array(
							'taxonomy' => 'type',
							'field'    => 'slug',
							'operator'  => 'NOT IN',
							'terms'    => 'slow-cookers',
						),
					),
			);

			$the_query = new WP_Query( $args );
			/* Start the Loop */
			while ( $the_query->have_posts() ) : $the_query->the_post();

				get_template_part( 'template-parts/content', 'product-tile' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
