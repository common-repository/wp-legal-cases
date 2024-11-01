<?php
/**
* Template Name: Case Archive Page
 */
 
get_header(); ?>

	<div id="primary" class="site-content cases-wrap">
		<div id="content" role="main">
		<?php query_posts('post_type=case');
	if (have_posts()) : ?>
			<?php
			/* Start the Loop */
			 while ( have_posts() ) : the_post();?>
				
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title cases-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
		</header>

		<div class="entry-content cases-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta cases-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
<?php endif;?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>