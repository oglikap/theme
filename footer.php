    <?php if( !is_page('contact') ) { ?>
      <div class="uk-section">
        <?php get_template_part( 'template-parts/content', 'totop' ); ?>
      </div>
    <?php } ?>

    <div class="uk-section uk-light" style="background: #840f0a">
      <h2 class="uk-text-uppercase uk-text-center">Energienulhuis Woubrugge</h2>
      <p class="uk-text-center"><span class="uk-text-small">&copy; <?php echo date('Y'); ?></span> Vierambachtsweg 55 | 2481 KS Woubrugge</p>
    </div>

  </div><!-- .bs-wrapper -->

  <?php wp_footer(); ?>
  </body>
</html>
