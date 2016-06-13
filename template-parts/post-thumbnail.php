<?php
	if ( has_post_thumbnail() ):

		$size = isset($size) ? $size : 'full';
?>

	<div>
		<?php the_post_thumbnail($size); ?>
	</div>

<?php
	endif;
?>
