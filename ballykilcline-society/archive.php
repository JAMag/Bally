<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ballykilcline_Society
 */

get_header(); ?>


		<?php
		if ( have_posts() ) : ?>
		    <section class="feature-image feature-image-default-alt" data-type="background">
<!--         <h1 class="blog">The Bonfire</h1> -->

				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
    </section>  

<div class="container">
	</div class="row' id="primary">
		<main class="col-sm-8" id="content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</main>
		<aside class="col-sm-4"> <!-- SIDEBAR-->
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>

<?php

get_footer();
