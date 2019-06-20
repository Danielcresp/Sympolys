<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- icono -->
    <link rel="shortcut icon" href="/assets/icono/synfonypoly.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icono/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icono/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icono/favicon-16x16.png">
    <link rel="manifest" href="assets/icono/site.webmanifest">
    <link rel="mask-icon" href="assets/icono/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/icono/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/icono/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- fin icono -->
    <?php  wp_head(); ?> 
    <title>Sympolys</title>
</head>
<body <?php body_class(); ?>>
<header class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img class="img-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Synfonypoly.png" alt="imagen">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <?php 
                    $args = array(
                            'theme_location' => 'header-menu',
                            'depth'         => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'menu_class' => 'nav navbar-nav',
                            'container' => 'nav-link',
                            'container_class' => 'nav-link',
                            'fallback_cb'   => false,
                            'add_li_class'  => 'nav-item',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),     
                        );
                        wp_nav_menu( $args);
                        //menu
            ?>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href=""><span class="fas fa-shopping-cart"></span></a>
                    <a href=""><span class="fas fa-search"></span></a>
                </li>
            </ul>
        </div>
    </div>   
</nav>
</header>
    

