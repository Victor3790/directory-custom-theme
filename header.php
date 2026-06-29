<?php
/**
 * The template for displaying the header
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
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
						<a href="/index.html" class="m-0 menu__logo">JM</a>
					</div>
					<div class="col-6">
						<nav aria-label="Main navigation">
							<ul class="menu__list">
								<li><a href="index.html">Home</a></li>
								<li><a href="cat-archive.html">Directorio</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>