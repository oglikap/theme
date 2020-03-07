<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?>

<div>
  <a href="<?php the_permalink(); ?>">
    <div class="uk-height-large uk-grid-small uk-flex uk-flex-right uk-flex-bottom uk-background-cover" data-src="<?php echo $featured_img_url; ?>" uk-img>
    </div>
  </a>
</div>

<?php get_template_part( 'template-parts/content', 'content' ); ?>
