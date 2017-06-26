<?php

/**
 * Template Name: Home
 */

get_header();

	?>

	
<div class="clear home-inner">

	<div class="home-content clear">

			<?php $tagline = rwmb_meta( 'tagline' );?>
			<?php $taglineWords = rwmb_meta( 'tagline_word' );?>
			<?php $taglineDesc = rwmb_meta( 'tagline_desc' );?>


			<h1 class="rw-wrapper">
				<?= $tagline; ?>

				<div class="rw-words">
					<?php foreach($taglineWords as $key=>$word): ?>

								<span> <?= $word; ?></span>

					<?php endforeach; ?>
				</div>

			</h1>

			<h2>

				<?= $taglineDesc; ?> 

			</h2>

	</div>


</div>


<!-- DONATE -->
<div class="donate clear">

	<h2>Make a difference today</h2>
	<h3>Enabling these domestic violence specialist services to raise much needed funds.</h3>

	<div class="donation-points">
		
		<?php $donatePage = get_page_by_path('donate'); ?>
		<?php $donationStats = rwmb_meta( 'donation_points',false,$donatePage->ID);?>
		<?php $donationAmounts = rwmb_meta( 'donation_amounts',false, $donatePage->ID);?>

		
		<ul>
			<?php foreach($donationAmounts as $key=>$amount): ?>

				<li class="<?= $key==0 ? 'active' : '';?>"><?= $amount;?></li>
				
			<?php endforeach; ?>

		</ul>

		<div class="donation-description">

			<?php foreach($donationStats as $key=>$stat): ?>

				<p class="<?= $key!=0 ? 'no-display' : '';?>"> <?= $stat; ?> </p>
				
			<?php endforeach; ?>

		</div>
	</div>




</div>



</div>

<?php get_footer(); ?>

