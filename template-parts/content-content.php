<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  <?php if( get_field('intro') ): ?>
    <p class="uk-text-bold" id="bs-content"><?php the_field('intro'); ?></p>
  <?php endif; ?>

  <div class="bs-content">
    <?php the_content(); ?>
  </div>

<?php endwhile; endif; ?>
