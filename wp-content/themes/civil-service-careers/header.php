<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Civil_Service_Careers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'civil-service-careers' ); ?></a>-->

<header class="masthead">

	<div class="masthead__first">
		<div class="masthead__inner">
			<a class="masthead__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<!--<div class="masthead__account-nav">
				<nav>
					<ul>
						<li><a href="">Sign in</a></li>
						<li><a href="">Register</a></li>
					</ul>
				</nav>
			</div>-->
		</div>
	</div>

	<div class="masthead__last">
		<div class="masthead__inner">
			<div class="navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id' => false,
						'container' => 'nav',
					) );
				?>
			</div>
		</div>
	</div>

</header>

<main class="content">
	<div class="content__inner">
