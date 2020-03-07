<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  <article class="uk-article">

    <div class="uk-child-width-1-2@s" uk-grid>
      <div>
        <?php the_post_thumbnail(); ?>
        <p style="font-variant: all-small-caps; font-size: 1em; margin-top: 0;"><?php the_post_thumbnail_caption(); ?></p>
      </div>
      <div>
        <ul class="uk-list-striped" style="list-style-type: none;">
          <?php if( get_field('author') ) { ?>
            <li>
              Door <strong><?php the_field( 'author' ); ?></strong>
            </li>
          <?php } ?>
          <?php if( get_field('paper') ) { ?>
            <li>
              Gepubliceerd: <strong><?php the_field('date'); ?></strong>
               in <strong><?php the_field('paper'); ?></strong>
            </li>
          <?php } ?>
          <?php if( get_field('bio_1') ) { ?>
            <li>
              <?php the_field('bio_1'); ?>
            </li>
          <?php } ?>
          <?php if( get_field('bio_2') ) { ?>
            <li>
              <?php the_field('bio_2'); ?>
            </li>
          <?php } ?>
        </ul>

      </div>
    </div>

  </article>
  <?php if( get_field('intro') ): ?>
    <p class="uk-text-bold" id="bs-content"><?php the_field('intro'); ?></p>
  <?php endif; ?>

  <?php if( get_field('sub_header') ) { ?>
    <blockquote class="bs-blockquote">
      <p class="uk-text-lead bs-color-red"><?php the_field( 'sub_header' ); ?> <span uk-icon="quote-right"></span></p>
    </blockquote>
  <?php } ?>

  <div class="bs-content">
    <?php the_content(); ?>
  </div>

<?php endwhile; endif; ?>

</div><!-- END SECTION -->

<div class="uk-section uk-section-muted">
  <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
</div>
