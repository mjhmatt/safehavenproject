<?php

/**
 * Template Name: Our Focus
 */

get_header();

?>

	
<div class="clear inside-press about">

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<!-- article -->
		<div class="article" id="post-<?php the_ID(); ?>" >

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<?php the_content(); // Dynamic Content ?>

			<?php
				// TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        
			        <div class="contact-content-page">
			            <?php the_content(); ?> <!-- Page Content -->
			        </div><!-- .entry-content-page -->
			    <?php
				endwhile; //resetting the page loop
				wp_reset_query(); //resetting the page query
			?>


			<?php $ofStats = rwmb_meta( 'ourfocus_stats' );?>

			<?php foreach($ofStats as $stat): ?>

					<p> <?= $stat; ?> </p>

			<?php endforeach; ?>


		</div>
		<!-- /article -->





</div>

<?php get_footer(); ?>


