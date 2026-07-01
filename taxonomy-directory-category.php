<?php
/**
 * Taxonomy archive page for Directory categories
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
		<div class="row">
			<div class="col">
				<!-- Breadcrumbs -->
				<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="archive-title"><?php single_term_title( '', true ); ?></h1>
				<p>
					<?php the_archive_description(); ?>
				</p>
			</div>
		</div>
		<section class="row section archive-section">
			<div class="col-12 col-lg-10 offset-lg-1">
				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<?php get_template_part( 'template-parts/item-directory-item' ); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php esc_html_e( 'No items found in this category.', 'directory' ); ?></p>
				<?php endif; ?>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();