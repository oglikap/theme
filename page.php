<?php get_header(); ?>

<div class="uk-section">

  <div class="uk-container">

    <?php get_template_part( 'template-parts/content', 'content' ); ?>

    <?php //FOR THE PRESS LANDING PAGE
     if( is_page( 'in-de-pers' ) ) {

      //* The Query
      $exec_query = new WP_Query( array (
      'post_type' => 'press',
      ) );

      //* The Loop
      if ( $exec_query->have_posts() ) { ?>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid="masonry: true">
          <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
          <article>
            <header style="margin:0;">
              <h3 style="font-size:1.25em; line-height: 1;">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              <a href="<?php the_permalink(); ?>" class="image featured">
                <?php the_post_thumbnail('widescreen'); ?>
              </a>
            </header>
            <p class="uk-text-small"><?php if( get_field('intro') ): the_field('intro'); endif; ?></p>
          </article>
         <?php
            endwhile; ?>
          <?php
            //* Restore original Post Data
          wp_reset_postdata();} ?>
        </div>

      <?php } ?>

  </div><!-- /.uk-container -->

</div><!-- /.uk-section -->

<?php get_footer(); ?>
