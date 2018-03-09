<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ballykilcline_Society
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="post-details">
        <span class="glyphicon glyphicon-user"></span><?php the_author(); ?>
        <span class="glyphicon glyphicon-time"></span><time><?php the_date(); ?></time>
        <span class="glyphicon glyphicon-folder-open"></span><?php the_category(); ?>
        <span class="glyphicon glyphicon-tags"></span><?php the_tags(); ?>
        <div class="post-comments-badge"> 
        	<a href="<?php comments_link(); ?>"><span class="glyphicon glyphicon-comment"></i> <?php echo get_comments_number( $post_id ); ?></a>       
        </div>
				<?php edit_post_link( 'Edit', '<span class="glyphicon glyphicon-pencil"></span>', ''); ?> 
    </div>
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) { // check for feature image ?> 
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<?php if ( is_single() ) : ?>
	<div class="post-body">
	    <?php the_content(); ?>
	</div><!-- post-content -->
	<?php else : ?>
	<div class="post-excerpt">
	    <?php the_excerpt(); ?>
	</div><!-- post-excerpt -->
	<?php endif; ?>
	
</article><!-- #post-## -->
