<?php

/* Template name: About */

get_header(); ?>

	<div class="uk-section">
		<div class="uk-container uk-container-small">

		<?php while ( have_posts() ) {
			the_post();
			the_content();
		} ?>

		</div>
	</div>

	<div class="uk-section uk-section-muted uk-padding uk-margin-auto" style="max-width: 1440px;">

		<?php $args = array( 'cat' => 3 );
		$the_query = new WP_Query( $args );

		if( $the_query->have_posts() ) { ?>

			<div class="uk-child-width-1-2@s" uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div; delay: 500">

				<?php while ($the_query->have_posts() ) {	$the_query->the_post();

					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?>

					<div class="bs-about-gallery">
						<a href="<?php the_permalink(); ?>">
							<div class="uk-height-medium uk-grid-small uk-flex uk-flex-right uk-flex-bottom uk-background-cover" data-src="<?php echo $featured_img_url; ?>" uk-img>
		  					<h1 class="uk-padding-small uk-light"><?php the_title(); ?></h1>
							</div>
						</a>
					</div>

					<?php
				} // endwhile... ?>
			</div>

		<?php } ?>

	</div> <!-- .uk-section -->

	<?php get_footer(); ?>
