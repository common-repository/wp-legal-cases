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
              <?php if(has_post_thumbnail()){?>
                <div style="float: right; margin: 10px" class="cases-thumb">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
              <?php }?>
               
				<h1 class="cases-title entry-title"><?php the_title(); ?></h1>
				<br/>
				<section class="cases-meta">
                  <?php $case_meta = get_post_meta($post->ID); ?>
				  <strong>Filed Under:</strong>&nbsp; <?php echo $case_meta['case_type'][0];?><br/>
				<strong>Year:</strong>&nbsp;  <?php echo $case_meta['case_year'][0];?><br/> <strong>Charges:</strong> &nbsp; <?php echo $case_meta['cases_charges'][0];?><br/>
				<?php $verdict = get_post_meta($post->ID,'cases_verdict',true);
				if (!empty($verdict) || $verdict!='other'){ ?>
					 
				<strong>Verdict:</strong>&nbsp; <?php  cases_verdict_output(get_the_id());?> <br/><?php }?>
				<?php if ($case_meta['cases_other_verdict'][0] !='') {?>
					<strong>Outcome:</strong>&nbsp;<?php echo $case_meta['cases_other_verdict'][0];?><?php }?><br/>
				
				
                <br />
 </section>
                
            </header>
 
         
            <div class="entry-content cases-content"><?php the_content(); ?></div>
        </article>
 
    <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>