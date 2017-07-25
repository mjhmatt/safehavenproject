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

<div class="clear client-and-focus">

	<a class="float-left client main-areas">

		<div class="client-inside">
			<?php $clientProfiles = get_page_by_path('client-profiles'); ?>
			<?php $clientProfilesDesc = rwmb_meta( 'client_profiles',false,$clientProfiles->ID);?>
			<?php $profileCount = count($clientProfiles); ?>
			<h4> <?= get_the_title($clientProfiles->ID);?></h4>

			<h5>“He doesn't mean to. It’s only bad when he drinks. He loves me”</h5>
			<h6>Tanya, single mum of 3y/o</h6>
		</div>
	</a>


	<a class="float-left focus main-areas">

		<?php $ourFocus = get_page_by_path('our-focus'); ?>
		<h4> <?= get_the_title($ourFocus->ID);?></h4>

		<h5>Safe Haven is a fundraising portal for local domestic violence specialist services</h5>
		<p>Enabling these domestic violence specialist services to raise much needed funds while providing discreet services to those in need.  Our local services focus on addressing the safety and wellbeing of women and children who have experienced domestic violence.</p>
		<span>READ MORE &rarr;</span>

	</a>

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

		<div class="donation-description clear">

			<?php foreach($donationStats as $key=>$stat): ?>

				<p class="<?= $key!=0 ? 'no-display' : '';?>"> <?= $stat; ?> </p>
				
			<?php endforeach; ?>

		</div>


		<a class="donate-button" href="https://www.givenow.com.au/safehavenproject" target="_blank">
			Donate Now
		</a>

	</div>




</div>



</div>

<?php get_footer(); ?>

