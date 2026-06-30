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
				<article class="item">
					<h2 class="item__title">
						Category A
					</h2>
					<p class="item__description">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.
					</p>
					<a href="dir-archive.html">Ver</a>
				</article>
				<hr>
				<article class="item">
					<h2 class="item__title">
						Category B
					</h2>
					<p class="item__description">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.
					</p>
					<a href="dir-archive.html">Ver</a>
				</article>
				<hr>
				<article class="item">
					<h2 class="item__title">
						Category C
					</h2>
					<p class="item__description">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.
					</p>
					<a href="dir-archive.html">Ver</a>
				</article>
				<hr>
				<article class="item">
					<h2 class="item__title">
						Category D
					</h2>
					<p class="item__description">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.
					</p>
					<a href="dir-archive.html">Ver</a>
				</article>
				<hr>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();