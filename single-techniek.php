<?php get_header(); ?>

<div class="uk-section">

  <div class="uk-container">

    <h2>Techniek | <span class="bs-color-red"><?php the_title(); ?></span></h2>

    <?php get_template_part( 'template-parts/content', 'content' ); ?>

    </div>

</div><!-- .uk-section -->

<div class="uk-section uk-section-muted">
  <?php get_template_part( 'template-parts/content', 'prev-next' );?>
</div>

<?php get_footer(); ?>
