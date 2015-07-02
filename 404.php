<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package fourteen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fourteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fourteen' ); ?></p>
					<?php get_search_form(); ?>
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&larr; <?php _e( 'Return home?', 'fourteen' ); ?></a>
				</div><!-- .page-content -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
