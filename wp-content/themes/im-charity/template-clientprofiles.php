<?php

/**
 * Template Name: Client Profiles
 */

get_header();

	?>

	
<div class="clear inside-press about">

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<!-- article -->
		<div class="article" id="post-<?php the_ID(); ?>" >

			<div class="donation-points">

			<?php $clientProfiles = rwmb_meta( 'client_profiles' );?>

			<?php foreach($clientProfiles as $key=>$clientProfile): ?>

					<div> <?= $clientProfile; ?> </div>

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

