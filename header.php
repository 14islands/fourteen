<?php
/**
 * The header for our theme.
 *
 * @package fourteen
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <meta name="apple-mobile-web-app-capable" content="yes" />

	<?php
		// Fore more favicons, use a good favicon generator like:
	 	// - http://realfavicongenerator.net/
	 	// - http://www.favicomatic.com/
	?>

	<link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" rel="shortcut icon">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-57.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-144.png" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fourteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// For an accessible menu, also use some aria-controls like:
					// <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fourteen' ); </button>
				 	wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
