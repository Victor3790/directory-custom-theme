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
