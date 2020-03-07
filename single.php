<?php get_header(); ?>

<div class="uk-section">

  <div class="uk-container uk-container-small">

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

  </div>

</div><!-- .uk-section -->
<div class="uk-section uk-section-muted">
  <div class="uk-container">
    <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
  </div>
</div>

<?php get_template_part( 'template-parts/content', 'gallery' );

 get_footer(); ?>
