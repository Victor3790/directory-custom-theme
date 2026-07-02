<?php
/**
 * Custom Walker nav menu class.
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Class Directory_Theme_Walker_Nav_Menu
 */
class Directory_Theme_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * Start element output
	 *
	 * @param string   $output Used to append content.
	 * @param WP_Post  $item Menu item data object.
	 * @param int      $depth depth of menu item.
	 * @param stdClass $args Arguments.
	 * @param int      $id Current object id.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= '<li class="me-3"><a class="menu__link" href="' . esc_url( $item->url ) . '">' . $item->title;
	}

	/**
	 * End element output
	 *
	 * @param string   $output Used to append content.
	 * @param WP_Post  $item Menu item data object.
	 * @param int      $depth depth of menu item.
	 * @param stdClass $args Arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= '</a></li>';
	}
}
