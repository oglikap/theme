<?php get_header();

  $loop = new WP_Query( array(
      'post_type' => 'Techniek',
      'posts_per_page' => 1
    )
  );
  ?>

  <div class="uk-section uk-padding-small">
    <div class="uk-container">

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php if( get_field('intro') ): ?>
          <p class="uk-text-bold" id="bs-content"><?php the_field('intro'); ?></p>
        <?php endif; ?>

        <div class="bs-content">
          <?php the_content(); ?>
        </div>

      <?php endwhile; wp_reset_query(); ?>

    </div>
  </div>

<?php get_footer(); ?>
