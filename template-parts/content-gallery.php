<?php if( have_rows('gallery') ): ?>

  <div class="uk-section">
    <div class="uk-container">

      <?php while ( have_rows('gallery') ): the_row(); ?>

      <h2><span class="bs-color-red">Schilderijen | </span><?php the_sub_field('title') ?></h2>
      <ul class="bs-gallery uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-grid-small" uk-grid="masonry: true" uk-lightbox uk-scrollspy="cls: uk-animation-fade; target: li; delay: 250">
        <?php $images = get_sub_field('gallery');

           foreach( $images as $image ): ?>
            <li>
              <a class="uk-inline uk-box-shadow-small uk-border-rounded" href="<?php echo $image['url']; ?>" data-caption="<?php echo $image['caption']; ?>">
                <img src="<?php echo $image['sizes']['medium']; ?>" data-alt="<?php echo $image['alt']; ?>" />
              </a>
            </li>
          <?php endforeach; ?>
        </ul>

        <?php endwhile; ?>

  </div>
</div>

<?php endif; ?>
