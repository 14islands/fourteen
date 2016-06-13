<?php
/**
 * Template part for displaying single posts.
 *
 * @package fourteen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div>' . esc_html__( 'Pages:', 'fourteen' ),
				'after'  => '</div>',
			) );
		?>
	</div>

</article><!-- #post-## -->

