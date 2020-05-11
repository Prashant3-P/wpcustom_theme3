<?php 


/* CSS Boostrap Jquery */
function my_quilava(){
 
	 /* including css */
     wp_enqueue_style('style', get_stylesheet_uri());     
     
	 /* including boostrap css & js */
	 wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');

	 wp_enqueue_script('jquery');
	 wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js');

     /* including javascript */
     wp_enqueue_script('urscript', get_template_directory_uri().'/assets/js/myscript.js');	

}

add_action('wp_enqueue_scripts','my_quilava');

//Add fontawesome
function enqueue_load_fa() {
      wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');



// Add featured  Image
function fn_add_featured(){
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'post-imge', 730, 380 );
   add_image_size('abt-post-img', 348, 188);
}

add_action('after_setup_theme','fn_add_featured');



// Add about us
function fn_about_featured(){
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'about_imgs', 475, 503 );
}

add_action('after_setup_theme','fn_about_featured');



// Add Customize Signature
function banner_theme_settings($wp_customize){
   
   //titleArea
   $wp_customize->add_section("signature_image_section_area", array(
      "title"=>"Signature Image Setings"
   ));

   //Image control
   $wp_customize->add_setting("signature_imageControl_setting");

   $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'banner_theme_imageControl', 
        array(
        'label'    => 'Upload Image',
        'settings' => 'signature_imageControl_setting',
        'section' => 'signature_image_section_area'
      )
    ));

}

add_action('customize_register','banner_theme_settings');




// Add Recent post thumbnail
function fn_add_recentpost(){
   add_image_size( 'recent-thumbnails', 80, 80); // Sets Recent Posts Thumbnails 
}

add_action('after_setup_theme','fn_add_recentpost');


// Navigation Menus 
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'secondary' => __('Footer Menu')
));


require get_template_directory() . '/class-wp-bootstrap-navwalker.php';



//register sidebar
function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'before_widget' => '<div class="bg-white px-4 side-tab sidebar-box-shadow">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="mb-3 sidebr-title">',
            'after_title' => '</h4>',
        )
    );
}

add_action( 'widgets_init', 'my_custom_sidebar' );



//register footer links
function footer_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'Quilava' ),
        'id' => 'first-footer-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}


add_action('widgets_init','footer_widgets_init');





















