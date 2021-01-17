<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
function google_fonts() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

// Load in our CSS
function TPrestaurant_enqueue_styles() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all' );
      wp_enqueue_style('bootstrap');


        wp_register_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), false, 'all' );
        wp_enqueue_style('magnific');

 
        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all' );
        wp_enqueue_style('main');

}
add_action( 'wp_enqueue_scripts', 'TPrestaurant_enqueue_styles' );

// Load in our JS
function TPrestaurant_enqueue_scripts() {

  wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');

		wp_register_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', 'jquery', false, true);
		wp_enqueue_script('magnific');

  wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
  wp_enqueue_script( 'footer-js', get_stylesheet_directory_uri() . '/assets/js/footer.js', [], time(), true );

}
add_action( 'wp_enqueue_scripts', 'TPrestaurant_enqueue_scripts' );



// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

function TPrestaurant_after_setup_theme() {
    // On ajoute un menu
    register_nav_menu('header_menu', "Top Menu Location");
}
add_action('after_setup_theme', 'TPrestaurant_after_setup_theme');
/**
* Register Custom Navigation Walker
*/
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// logo and nav and img
add_action( 'after_setup_theme', 'register_navwalker' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

// Menus
register_nav_menus(

    array(

        'header_menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',

    )

);

// Widgets 

add_theme_support( 'widgets' );

//Widgets footer 

function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area one',
      'id'            => 'footer_area_one',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-one">',
      'after_widget'  => '</section>',
      'before_title'  => '<div class="h2">',
      'after_title'   => '</div>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area two',
      'id'            => 'footer_area_two',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-two">',
      'after_widget'  => '</section>',
      'before_title'  => '<div class="h5">',
      'after_title'   => '</div>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area three',
      'id'            => 'footer_area_three',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-three">',
      'after_widget'  => '</section>',
      'before_title'  => '<div class="h5">',
      'after_title'   => '</div>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area four',
      'id'            => 'footer_area_four',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-three instaGallery">',
      'after_widget'  => '</section>',
      'before_title'  => '<div class="h5"><a href="http://www.instagram.com" alt="" target="_blank">',
      'after_title'   => '</a></div>',
    ));

    register_sidebar( array( // For the divider of the footer
      'name'          => 'Footer area Divider',
      'id'            => 'footer_area_divider',
    ));
  
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );

  
//acf recipe

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_6002df9d7d35b',
      'title' => 'Recipe',
      'fields' => array(
        array(
          'key' => 'field_6002e2347e2c0',
          'label' => 'Description',
          'name' => 'description',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'only_front' => 0,
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'custom_title' => 0,
          'custom_slug' => 0,
          'custom_username' => 0,
          'custom_sku' => 0,
          'readonly' => 0,
        ),
        array(
          'key' => 'field_6002e29323587',
          'label' => 'Serve',
          'name' => 'serve',
          'type' => 'number',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'only_front' => 0,
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'min' => '',
          'max' => '',
          'step' => '',
        ),
        array(
          'key' => 'field_6002e28523586',
          'label' => 'Preparation Time',
          'name' => 'preparation_time',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'only_front' => 0,
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'custom_title' => 0,
          'custom_slug' => 0,
          'custom_username' => 0,
          'custom_sku' => 0,
          'readonly' => 0,
        ),
        array(
          'key' => 'field_6002dfe37e2bc',
          'label' => 'Ingredients',
          'name' => 'ingredients',
          'type' => 'wysiwyg',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'only_front' => 0,
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'full',
          'media_upload' => 1,
          'delay' => 0,
          'custom_content' => 0,
        ),
        array(
          'key' => 'field_6002e08a7e2bd',
          'label' => 'Instructions',
          'name' => 'instructions',
          'type' => 'wysiwyg',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'only_front' => 0,
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'full',
          'media_upload' => 1,
          'delay' => 0,
          'custom_content' => 0,
        ),
        array(
          'key' => 'field_6002e414155c1',
          'label' => 'Nutritional Information',
          'name' => 'nutritional_information',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'only_front' => 0,
          'filter_row_edit' => '',
          'collapsed' => 'field_6002e451155c2',
          'min' => 0,
          'max' => 0,
          'layout' => 'table',
          'button_label' => 'Add Nutrition Information',
          'sub_fields' => array(
            array(
              'key' => 'field_6002e451155c2',
              'label' => 'Nutrition Type',
              'name' => 'nutrition_type',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'only_front' => 0,
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'custom_title' => 0,
              'custom_slug' => 0,
              'custom_username' => 0,
              'custom_sku' => 0,
              'readonly' => 0,
            ),
            array(
              'key' => 'field_6002e473155c3',
              'label' => 'Nutrition value',
              'name' => 'nutrition_value',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'only_front' => 0,
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'custom_title' => 0,
              'custom_slug' => 0,
              'custom_username' => 0,
              'custom_sku' => 0,
              'readonly' => 0,
            ),
            array(
              'key' => 'field_6002e491155c4',
              'label' => '% Daily Value',
              'name' => '%_daily_value',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'only_front' => 0,
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'custom_title' => 0,
              'custom_slug' => 0,
              'custom_username' => 0,
              'custom_sku' => 0,
              'readonly' => 0,
            ),
          ),
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'recipes-post',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
    ));
    
    endif;
 // For The Option Page : 


 if(function_exists('acf_add_options_page')){
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    
 }

















?>
