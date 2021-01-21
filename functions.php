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


    
 // For The Option Page : 


 if(function_exists('acf_add_options_page')){
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    
 }


  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

  add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to Restaurants
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Restaurants';
        $labels->singular_name = 'Restaurant';
        $labels->add_new = 'Add Restaurant';
        $labels->add_new_item = 'Add Restaurant';
        $labels->edit_item = 'Edit Restaurant';
        $labels->new_item = 'Restaurant';
        $labels->view_item = 'View Restaurant';
        $labels->search_items = 'Search Restaurant';
        $labels->not_found = 'No Restaurant found';
        $labels->not_found_in_trash = 'No Restaurant found in Trash';
        $labels->all_items = 'All Restaurants';
        $labels->menu_name = 'Restaurants';
        $labels->name_admin_bar = 'Restaurants';
}

?>
