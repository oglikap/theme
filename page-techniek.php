<?php

/* Template name: Techniek */

get_header(); ?>

	<div class="uk-section">
		<div class="uk-container">

			<?php
			$loop = new WP_Query( array(
			    'post_type' => 'Techniek',
			    'posts_per_page' => 1
			  )
			);
			?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php if( get_field('intro') ): ?>
			    <p class="uk-text-bold" id="bs-content"><?php the_field('intro'); ?></p>
			  <?php endif; ?>

			  <div class="bs-content">
			    <?php the_content(); ?>
			  </div>

			<?php endwhile; wp_reset_query(); ?>

		</div>
	</div> <!-- .uk-section -->

	<?php get_footer(); ?>
