<?php

// Add scripts and stylesheets
function nulhuis_scripts() {
  wp_enqueue_style( 'archivo_font', 'https://fonts.googleapis.com/css?family=Archivo+Black' );
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.3/css/uikit.min.css' );
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.3/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uikit_icons_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.3/js/uikit-icons.min.js' );
  wp_enqueue_script( 'slider', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.3/js/components/slider.min.js', true );
  wp_enqueue_script( 'slideshow_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.3/js/components/slideshow.min.js', true );
  wp_enqueue_script( 'lightbox_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.3/js/components/lightbox.min.js', true );
  // wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'nulhuis_scripts');

// Custom menu main
function wpb_woubrugge_menu() {
  register_nav_menu('woubrugge-menu',__('Woubrugge Menu'));
}
add_action( 'init', 'wpb_woubrugge_menu');

// Custom menu techniek
function bs_techniek_menu() {
  register_nav_menu( 'techniek-menu', __( 'Techniek Menu' ) );
}
add_action( 'init', 'bs_techniek_menu' );

// FILTER ADSS A 'UK-ACTIVE' CLASS TO CURRENT-MENU-ITEM
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'uk-active ';
    }
    return $classes;
}

/**********************************************************************************
energienulhuis-woubrugge_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function energienulhuis_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'techniek', 'press' ) );

  add_image_size( 'square', 250, 250, true );
  add_image_size( 'widescreen', 320, 180, true );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

  // Wordpress titles
  add_theme_support( 'title-tag' );

  /* Logo support */
  add_theme_support( 'custom-logo', array(
  	'height'      => 240, // set to your dimensions
  	'width'       => 240,
  	'flex-height' => true,
  	'flex-width'  => true,
  ) );

}
add_action( 'after_setup_theme', 'energienulhuis_theme_support' );

/********************************************************************************
excerpt length
********************************************************************************/
function energienulhuis_excerpt_length( $length ) {
  return 16;
}
add_filter( 'excerpt_length', 'energienulhuis_excerpt_length', 999 );


// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

  register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Custom Post Type
function create_techniek() {
	register_post_type( 'techniek',
			array(
			'labels' => array(
					'name' => __( 'Techniek' ),
					'singular_name' => __( 'Techniek' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
			)
	));
}
add_action( 'init', 'create_techniek' );

function create_press() {
  register_post_type( 'press',
    array(
      'labels' => array(
        'name' => __( 'Pers' ),
        'singular_name' => __( 'Pers' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'pers' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
    )
  );
}
add_action( 'init', 'create_press' );
