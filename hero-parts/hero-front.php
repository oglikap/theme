<div class="bs-hero__overlay-text">

  <span class="bs-hero__overlay-cursive">
    <span>Sinds
      <span>1993</span>
    </span>
  </span>

  <span class="bs-hero__overlay-title" uk-scrollspy="cls: uk-animation-scale-up; delay: 500" id="showTitle">Energie<br />nulhuis<br />Woubrugge
  </span>

</div>

<?php get_template_part( 'hero-parts/content', 'topdown' ); ?>

<div class="bs-menu" uk-scrollspy="cls: uk-animation-fade; target: > ul > li; delay: 250">
  <?php wp_nav_menu(
    array(
      'theme_location' => 'woubrugge-menu',
      'container' => 'ul',
      'menu_class' => 'bs-menu__list'
    ) ); ?>

</div>
