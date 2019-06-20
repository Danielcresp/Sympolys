    <footer class="footer container-fluid">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-logo-footer" src="<?php echo get_template_directory_uri(); ?>/assets/img/Synfonypoly.png" alt="imagen">
            </div>
            <div class="col-md-8">
            <?php 
                $argss = array(
                        'theme_location' => 'footer-menu',
                        'depth'         => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'menu_class' => 'nav navbar-nav menu-footer float-right',
                        'container' => 'nav-link',
                        'container_class' => 'nav-link',
                        'fallback_cb'   => false,
                        'add_li_class'  => 'nav-item',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),     
                    );
                    wp_nav_menu( $argss);
                    //menu
        ?>
        
            </div>
            <div class="col-md-4">
            <?php 
                $argss = array(
                        'theme_location' => 'social-menu',
                        'depth'         => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'menu_class' => 'nav navbar-nav social-menu ',
                        'container' => 'nav-link',
                        'container_class' => 'nav-link',
                        'fallback_cb'   => false,
                        'add_li_class'  => 'nav-item',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),     
                    );
                    wp_nav_menu( $argss);
            ?>
            </div>
            <div class="col-md-8 col-md-offset-4">
            <?php 
                $argss = array(
                        'theme_location' => 'terminos-menu',
                        'depth'         => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'menu_class' => 'nav navbar-nav d-flex float-right align-items-center',
                        'container' => 'nav-link',
                        'container_class' => 'nav-link',
                        'fallback_cb'   => false,
                        'add_li_class'  => 'nav-item',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),     
                    );
                    wp_nav_menu( $argss);
                    //menu
        ?>
        
            </div>
        </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>