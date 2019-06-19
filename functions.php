<?php
// Register Custom Navigation Walker  Compatible Boostrap con Wordpress
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function sympolys_styles(){
 //Obtener JS
 wp_enqueue_script('jquery'); 
 wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/assets/js/bootstrap.js',array('jquery'),'1.0.0',true);
 wp_enqueue_script('scripts',get_template_directory_uri().'/assets/js/scripts.js',array('jquery'),'1.0.0',true);
 //Registrar estilos CSS
 wp_register_style('style',get_stylesheet_directory_uri().'/style.css');
 wp_register_style('bootstrap',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
 wp_register_style('normalize',get_stylesheet_directory_uri().'/assets/css/normalize.css');
 wp_register_style('fontw',get_stylesheet_directory_uri().'/assets/css/font_awesome.css');
 //Obtener CSS
 wp_enqueue_style('style');
 wp_enqueue_style('bootstrap');
 wp_enqueue_style('normalize');
 wp_enqueue_style('fontw');
}
//Agregar Menu
function sympolys_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu','youeat'),
        'social-menu' => __('Social Menu','youeat'),
        'footer-menu' => __('Header Menu','youeat'),
        'terminos-menu' => __('Terminos Menu','youeat'),
    ));
}
// Agregar clases en el menu 
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Agregar a Wordpress la funcion Styles
add_action('wp_enqueue_scripts','sympolys_styles');

// Agregar a Wordpress la funcion
add_action('init','sympolys_menus');


