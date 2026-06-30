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
		<div class="row">
			<div class="col">
				<!-- Breadcrumbs -->
				<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1 class="archive-title">Directory Categories</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est dolor, maximus sit amet posuere nec, porta a neque. Praesent euismod pretium eros sed vestibulum. Vestibulum ac lacus odio. Proin sed sagittis nisi, ac efficitur leo. Aliquam a sapien dapibus, viverra risus quis, maximus turpis. Suspendisse potenti. Sed iaculis euismod libero sed molestie. Nulla feugiat risus ut ligula lobortis commodo. Etiam et diam mi. 
				</p>
			</div>
		</div>
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