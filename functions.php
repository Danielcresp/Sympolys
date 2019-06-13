<?php

function sympolys_styles(){
 //Registrar estilos CSS
 wp_register_style('style',get_stylesheet_directory_uri().'/style.css');
 //Registrar Scripts JS
//  wp_enqueue_script('fluidbox',get_template_directory_uri().'/js/jquery.fluidbox.js',array('jquery'),'1.0.0',true);

 //Obtener CSS
 wp_enqueue_style('style'); 

 //Obtener JS
 wp_enqueue_script('jquery'); 

}

// Agregar a Wordpress la funcion
add_action('wp_enqueue_scripts','sympolys_styles');