<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pibar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
      integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
      crossorigin="anonymous"
	/>
	<link
      href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap"
      rel="stylesheet"
    />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pibar' ); ?></a>
	<header #id="masthead" class="site-header">
		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark bg-dark">
			<?php the_custom_logo(); ?>
  		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
		<?php
			wp_nav_menu( array(
				'menu'              => 'main-menu',
				'theme_location'    => 'primary',
				'depth'             => 5,
				'container'         => false,
				'menu_class'        => 'navbar-nav  ',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			); 			
			?>
		  </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
