<?php
/**
 * Breadcrumbs template part
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

?>

<nav aria-label="Breadcrumb">
	<ul class="breadcrumbs">
		<li><a class="breadcrumbs__link" href="<?php echo esc_url( home_url() ); ?>">Inicio</a></li> /
		<li><a class="breadcrumbs__link" href=""> Dir</a></li> /
		<li class="breadcrumbs__link" aria-current="page">Page</li>
	</ul>
</nav>
