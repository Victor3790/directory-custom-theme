<?php
/**
 * This page will specifically show the categories (taxonomies) in the directory
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

get_header();

?>

<main>
	<div class="container">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<div class="row">
					<div class="col">
						<!-- Breadcrumbs -->
						<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h1 class="archive-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
		<section class="row section archive-section">
			<div class="col-12 col-lg-10 offset-lg-1">
				<?php
				$term_args = array(
					'taxonomy'   => 'directory-category',
					'hide_empty' => false,
					'orderby'    => 'name',
					'order'      => 'ASC',
				);

				$dir_terms = get_terms( $term_args );

				if ( ! empty( $dir_terms ) && ! is_wp_error( $dir_terms ) ) {
					foreach ( $dir_terms as $dir_term ) {
						get_template_part( 'template-parts/item', $dir_term->taxonomy, array( 'term' => $dir_term ) );
					}
				}
				?>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();