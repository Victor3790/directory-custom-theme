<?php
/**
 * The template for displaying the header
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

require_once DIRECTORY_THEME_DIR . '/includes/class-directory-theme-walker-nav-menu.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<!-- Menu -->
		<div class="menu">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<a href="<?php echo esc_url( home_url() ); ?>" class="m-0 menu__logo">JM</a>
					</div>
					<div class="col-6">
						<nav aria-label="Main navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'container'      => 'ul',
									'menu_class'     => 'menu__list',
									'walker'         => new Directory_Theme_Walker_Nav_Menu(),
								)
							);
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>