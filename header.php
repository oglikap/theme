<!DOCTYPE html>
<html lang="nl" class="uk-animation-fade">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Rutger Kroon">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="bs-wrapper">

      <header>

        <?php if( get_field( 'bg' ) ) { ?>

          <section class="bs-hero" style="background-image: url(<?php the_field( 'bg' ); ?>)">

            <div class="bs-hero__overlay"

              <?php get_template_part( 'template-parts/content', 'nav' ); ?>

              <?php if( is_front_page() ) {

                get_template_part( 'hero-parts/hero', 'front' );

              }

              elseif( is_page('techniek') || is_singular('techniek') ) { ?>

                <div class="uk-text-center uk-flex uk-flex-center uk-flex-bottom uk-flex-wrap" style="min-height: 85vh;">
                  <div class="uk-display-block" uk-scrollspy="cls: uk-animation-fade; target: > ul > li; delay: 200">
                    <h2 class="uk-heading-hero uk-light">Techniek</h2>

                    <?php wp_nav_menu(
                      array(
                        'theme_location' => 'techniek-menu',
                        'container' => 'ul',
                        'menu_class' => 'bs-inline'
                      ) );
                      get_template_part( 'hero-parts/content', 'page_down' ); ?>
                  </div>

                </div>

                <?php
              } else { ?>

                <h2 class="uk-heading-primary uk-text-center uk-light uk-padding-large"><?php the_title(); ?></h2>

                <?php wp_nav_menu(
                  array(
                    'theme_location' => 'techniek-menu',
                    'container' => 'ul',
                    'menu_class' => 'bs-inline uk-text-center'
                  ) ); ?>

              <?php } ?>



            </div>

          </section><!-- bs-hero -->

        <?php	} else { ?>

          <div class="uk-section uk-padding-remove-top <?php if( is_singular( 'press') ) { echo "uk-padding-remove-bottom"; } ?>">
            <?php get_template_part( 'template-parts/content', 'nav' ); ?>
            <h1 class="uk-text-center <?php if( is_singular( 'press') ) { echo "uk-heading-primary"; } else { echo "uk-heading-medium uk-position-top-center"; } ?> uk-padding uk-padding-remove-top"><?php the_title(); ?></h1>
          </div>

        <?php	} ?>

      </header>
