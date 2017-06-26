<?php

/**
 * Template Name: Donate
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

			<div class="donation-points">

			<?php $donationStats = rwmb_meta( 'donation_points' );?>
			<?php $donationAmounts = rwmb_meta( 'donation_amounts' );?>

			<?php foreach($donationStats as $key=>$stat): ?>

					<p> <span> <?= $donationAmounts[$key]; ?></span> <?= $stat; ?> </p>

			<?php endforeach; ?>

			</div>
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

		</div>
		<!-- /article -->





</div>

<?php get_footer(); ?>

