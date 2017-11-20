<header class="banner" id="top">
    <div class="banner-bg"></div>
    <div class="navbar-wrap">
        <div class="toggle-wrap">
            <div class="hamburger-menu">
                <div class="bar"></div>
            </div> 
        </div>
    <a class="nav-brand" href="<?php echo site_url();?>"></a>
    <nav class="navbar navbar-inverse navbar-toggleable-sm">
        <?php
        wp_nav_menu([
            'menu'            => 'primary_navigation',
            'theme_location'  => 'primary_navigation',
            'container_id'    => 'bs4navbar',

            'menu_id'         => false,
            'menu_class'      => 'lahav-nav list-unstyled',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
        ?>
        <!--<a href="http://app.lahavlearning.com/accounts/login/?next=/" target="_blank">JOIN</a>-->
    </nav>
    </div>
</header>

