<?php /* The template for the navigation part */ ?>

<nav class="uk-navbar-container uk-navbar-transparent uk-padding" uk-navbar>

  <div class="uk-position-top-left">

    <?php get_template_part( 'template-parts/content', 'logo' ); ?>

  </div>

<!-- OFFCANVAS MENU -->
<?php if( !is_front_page() ) { ?>
 <div class="uk-offcanvas-content <?php if( is_page('techniek') || is_singular('techniek') ) { echo 'uk-light'; } ?>">

   <a href="#bs-toggle-menu" uk-toggle uk-icon="icon: menu; ratio: 3" class="uk-position-top-right uk-visible@s uk-padding"></a>

   <a href="#bs-toggle-menu" uk-toggle uk-icon="icon: menu; ratio: 2.5" class="uk-position-top-right uk-hidden@s"></a>

   <div id="bs-toggle-menu" uk-modal uk-toggle class="uk-light uk-background-cover uk-background-secondary uk-modal-full">
     <div class="uk-modal-dialog uk-modal-body uk-light uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-text-uppercase" uk-height-viewport>

         <?php get_template_part( 'template-parts/content', 'menu' ); ?>

     </div>
   </div>
 </div>
<?php } ?>

</nav>
