
<?php
/** 
*Template Name: Single Case 
*Description: Used to show Legal Cases that are entered as "Cases" custom post type.
*
*/
get_header()?>

<div id="primary">
    <div id="content" role="main">
   

			<?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
 
                <!-- Display featured image in right-aligned floating div -->
                <div style="float: right; margin: 10px" class="cases-thum>
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
 
               
				<h1 class="cases-title entry-title"><?php the_title(); ?></h1>
				<br/>
				<section class="cases-meta">
				<strong>Year:</strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'cases-year-meta', true ) ); ?>&nbsp; <strong>Charges:</strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'cases-charges-meta', true) );?>&nbsp; 
				<strong>Verdict:</strong><?php echo esc_html( get_post_meta( get_the_ID(), 'cases-verdict-meta', true) );?> <br/>
				<strong>Filed Under:</strong><?php
$terms = get_the_terms( $post->ID , 'case_category' );
foreach ( $terms as $term ) {
echo $term->name;
}
					?>
                <br />
 </section>
                
            </header>
 
            <!-- Display movie review contents -->
            <div class="entry-content cases-content"><?php the_content(); ?></div>
        </article>
 
    <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>