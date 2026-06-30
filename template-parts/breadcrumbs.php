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

		<?php if ( is_page() ) : ?>
			<li class="breadcrumbs__link" aria-current="page"><?php the_title(); ?></li>
		<?php elseif ( is_tax() ) : ?>
			<li><a class="breadcrumbs__link" href="<?php echo esc_url( home_url( 'directorio' ) ); ?>"> Directorio</a></li> /
			<li class="breadcrumbs__link" aria-current="page"><?php single_term_title( '', true ); ?></li>
		<?php endif; ?>
	</ul>
</nav>
