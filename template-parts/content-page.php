<?php
/**
 * The template used for displaying page content in page.php
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

	<footer>
		<?php edit_post_link( esc_html__( 'Edit', 'fourteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

