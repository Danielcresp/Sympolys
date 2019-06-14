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
<header class="container">
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">
        <img class="img-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Synfonypoly.png" alt="imagen">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Porfolio</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Page</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Contacto</a>
                    <div class="dropdown-divider"></div>
                    <a href="#"class="dropdown-item">Contacto</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contacto</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href=""><span class="fas fa-shopping-cart"></span></a>
                <a href=""><span class="fas fa-search"></span></a>
            </li>
        </ul>
    </div>
</nav>
</header>
    

