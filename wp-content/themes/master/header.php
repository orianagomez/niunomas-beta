<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tarful
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0 user-scalable=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="navbar-fixed-top">
		<nav class="navbar">
			<?php //if(is_page_template('contact.php')){?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php echo bloginfo( 'name' );?>
					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-pricipal">
					      	<span class="icon-bar"></span>
					      	<span class="icon-bar"></span>
					      	<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-main col-xs-12">
					<?php wp_nav_menu(
						array(
							'container' => false,
							'items_wrap' => '<ul class="nav navbar-nav navbar-left">%3$s</ul>',
							'theme_location' => 'main'));
					?>
				</div>
		</nav>
	</header>