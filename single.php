<?php
/**
 * The template for displaying all single posts.
 *
 * @package fourteen
 */

get_header(); ?>

	<div>
		<main role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
