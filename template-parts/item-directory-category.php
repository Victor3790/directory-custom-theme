<?php
/**
 * Archive item template part for directory categories
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

?>
<article class="item">
	<h2 class="item__title">
		<?php echo esc_html( $args['term']->name ); ?>
	</h2>
	<p class="item__description">
		<?php echo esc_html( $args['term']->description ); ?>
	</p>
	<a href="<?php echo esc_url( get_term_link( $args['term'] ) ); ?>">Saber más</a>
</article>
<hr>