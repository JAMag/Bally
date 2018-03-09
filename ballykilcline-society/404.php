<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ballykilcline_Society
 */

get_header(); ?>
  <!-- FEATURE IMAGE
  ================================================== -->
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1>Sorry, that page can't be found</h1>
  </section>
  <div class="Container">

      <div class="row" id="primary">
      
        <div id="content" class="col-md-8 col-md-offset-2">

			<section class="error-404 not-found">
				<header class="page-header">
					<h4 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ballykilcline-society' ); ?></h4>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a link below or search?', 'ballykilcline-society' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'ballykilcline-society' ); ?></h4>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<p>... or just head back to the <a href="<?php echo esc_url( home_url ('/') ); ?>"> home page</a>. </p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
get_footer();
