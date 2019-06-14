<?php

function sympolys_styles(){
 //Registrar estilos CSS
 wp_register_style('style',get_stylesheet_directory_uri().'/style.css');
 wp_register_style('bootstrap',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
 wp_register_style('normalize',get_stylesheet_directory_uri().'/assets/css/normalize.css');
 wp_register_style('fontw',get_stylesheet_directory_uri().'/assets/css/font_awesome.css');
 //Registrar Scripts JS
//  wp_enqueue_script('fluidbox',get_template_directory_uri().'/js/jquery.fluidbox.js',array('jquery'),'1.0.0',true);

 //Obtener CSS
 wp_enqueue_style('style');
 wp_enqueue_style('bootstrap');
 wp_enqueue_style('normalize');
 wp_enqueue_style('fontw');

 //Obtener JS
 wp_enqueue_script('jquery'); 

}

// Agregar a Wordpress la funcion
add_action('wp_enqueue_scripts','sympolys_styles');